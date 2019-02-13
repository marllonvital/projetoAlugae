<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\User;

class User extends Model
{
  use Notifiable;

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
