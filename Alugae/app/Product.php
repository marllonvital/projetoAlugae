<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public function insereProduto($request){
    $this->disponibilidade=$request->disponibilidade;
    $this->descricao=$request->descricao;
    $this->preco=$request->preco;
    $this->nome=$request->nome;
    $this->marca=$request->marca;
    $this->tipo=$request->tipo;
    $this->save();
  }
  public function atualizaProduto($request){
    $this->disponibilidade=$request->disponibilidade;
    $this->descricao=$request->descricao;
    $this->preco=$request->preco;
    $this->nome=$request->nome;
    $this->marca=$request->marca;
    $this->tipo=$request->tipo;
    
    $this->save();


  }

}
