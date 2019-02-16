<?php

namespace App;

use Laravel\Passport\HasApiTokens; //adicionar o "use" junto
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'password', 'remember_token',
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

}
