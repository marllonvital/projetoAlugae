<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens; //adicionar o "use" junto
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;
  use HasApiTokens; //indicar que ele será utilizado

  protected $fillable = [
      'name', 'email', 'password',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];

  public function insereUsuario($request){

    $this->nome=$request->nome;
    $this->cep=$request->cep;
    $this->cpf=$request->cpf;
    $this->senha=$request->senha;
    $this->email=$request->email;
    $this->cidade=$request->cidade;
    $this->telefone=$request->telefone;
    $this->numero=$request->numero;
    $this->complemento=$request->complemento;

    $this->save();
  }
  public function atualizaUsuario($request){

    $this->nome=$request->nome;
    $this->cep=$request->cep;
    $this->cpf=$request->cpf;
    $this->senha=$request->senha;
    $this->email=$request->email;
    $this->cidade=$request->cidade;
    $this->telefone=$request->telefone;
    $this->numero=$request->numero;
    $this->complemento=$request->complemento;

    $this->save();
  }

}
