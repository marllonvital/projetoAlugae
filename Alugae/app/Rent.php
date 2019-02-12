<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  public function insereAluguel($request){
    $this->historico=$request->historico;
    $this->quantidade=$request->quantidade;
    $this->data_final=$request->data_final;
    $this->data_inicial=$request->data_inicial;
    $this->produto_id=$request->produto_id;
    $this->usuario_id=$request->usuario_id;
    $this->save();
  }
  public function atualizaAluguel($request){
    $this->historico=$request->historico;
    $this->quantidade=$request->quantidade;
    $this->data_final=$request->data_final;
    $this->data_inicial=$request->data_inicial;
    $this->produto_id=$request->produto_id;
    $this->usuario_id=$request->usuario_id;

    $this->save();
  }

}
