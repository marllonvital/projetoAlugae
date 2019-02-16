<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\product;

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'//, 'is_admin'  comentado só por fins educativos não é
                                    // legal permitir q usuários saibam que esse atributo existe
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
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


    //exemplo de acessor
    /*public function getNameAttribute($value)
    {
        return strtolower($value);
    }*/

    //exemplo de acessor para formatação de vários atributos
    /*public function getAllInfoAttribute()
    {
        return "{$this->name} - {$this->email}";
    }
    protected $appends = ['all_info'];*/

    //exemplo de mutator
    /*public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }*/


    //retorna o quarto
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
