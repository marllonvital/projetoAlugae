<?php

namespace App;

use App\Product;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
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
      $this->password=$request->password;
      $this->email=$request->email;
      $this->city=$request->city;
      $this->telephone=$request->telephone;
      $this->number=$request->number;
      $this->complement=$request->complement;
      $this->cep=$request->cep;

      $this->save();
    }
    public function atualizaUsuario($request){
      $this->name=$request->name;
      $this->cpf=$request->cpf;
      $this->password=$request->password;
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
