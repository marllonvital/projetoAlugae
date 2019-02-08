<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  public function insereAluguel($request){
    $this->periodo=$request->periodo;
    $this->historico=$request->historico;
    $this->quantidade=$request->quantidade;
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
