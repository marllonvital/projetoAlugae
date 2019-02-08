<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function insereProduto($request){
    $this->disponibilidade=$request->disponibilidade;
    $this->descricao=$request->descricao;
    $this->tamanho=$request->tamanho;
    $this->preco=$request->preco;
    $this->nome=$request->nome;
    $this->peso=$request->peso;
    $this->tipo=$request->tipo;
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
