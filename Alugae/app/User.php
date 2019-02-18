<?php

namespace App;

use App\Product;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token'//, 'is_admin'  comentado só por fins educativos não é
                                    // legal permitir q usuários saibam que esse atributo existe
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function insereUsuario($request){
      $this->name=$request->name;
      $this->cpf=$request->cpf;
      $this->password=bcrypt($request->password);
      $this->email=$request->email;
      $this->city=$request->city;
      $this->telephone=$request->telephone;
      $this->number=$request->number;
      $this->complement=$request->complement;
      $this->cep=$request->cep;

      if(!Storage::exists('localPhotos/')) //Criando uma pasta para armanezar as fotos!
            Storage::makeDirectory('localPhotos/',0775,true);

      $validator = Validator::make($request->all(), [
        'photo' =>'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
      ]);

      $file = $request->file('photo');
      $path = $file->store('localPhotos');
      $this->photo = $file;
      $this->save();
    }
    public function atualizaUsuario($request){
      $this->name=$request->name;
      $this->cpf=$request->cpf;
      $this->password=bcrypt($request->password);
      $this->email=$request->email;
      $this->city=$request->city;
      $this->telephone=$request->telephone;
      $this->number=$request->number;
      $this->complement=$request->complement;
      $this->cep=$request->cep;

      $this->save();
    }

    public function product(){
        return $this->belongsTo('App\product');
    }

    //reserva o quarto ou falha
    public function reserveproduct($product_id){
        $product = product::findOrFail($product_id);

        $product->newUsers([$this->id]);

        return true;
    }

    public function removeproduct(){
        $product = $this->product;

        $product->removeUsers([$this->id]);

        return true;
    }



}
