<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  public function insereUsuario($request){
    $this->telefone=$request->telefone;
    $this->complemento=$request->complemento;
    $this->email=$request->email;
    $this->nome=$request->nome;
    $this->cep=$request->cep;
    $this->cpf=$request->cpf;

    $this->save();
  }
    public function atualizaBancaria($request){
      $this->telefone=$request->telefone;
      $this->complemento=$request->complemento;
      $this->email=$request->email;
      $this->nome=$request->nome;
      $this->cep=$request->cep;
      $this->cpf=$request->cpf;

      $this->save();


    }

  }
