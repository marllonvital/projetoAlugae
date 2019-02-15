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

    $this->name=$request->name;
    $this->cep=$request->cep;
    $this->cpf=$request->cpf;
    $this->password=$request->password;
    $this->email=$request->email;
    $this->city=$request->city;
    $this->telephone=$request->telephone;
    $this->number=$request->number;
    $this->complement=$request->complement;

    $this->save();
  }
  public function atualizaUsuario($request){

    $this->name=$request->name;
    $this->cep=$request->cep;
    $this->cpf=$request->cpf;
    $this->password=$request->password;
    $this->email=$request->email;
    $this->city=$request->city;
    $this->telephone=$request->telephone;
    $this->number=$request->number;
    $this->complement=$request->complement;

    $this->save();
  }

}
