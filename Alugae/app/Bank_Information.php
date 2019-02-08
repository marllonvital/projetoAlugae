<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_Information extends Model
{
  use SoftDeletes:
  protected $dates=['deleted_at'];

  public function insereBancaria($request){
    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipó_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;

    $this->save();
  }

  public function atualizaBancaria($request){
    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipó_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;

    $this->save();
  }

  public function leBancaria($request){
    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipó_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;

    $this->save();
  }

  public function deletaBancaria($request){
    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipó_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;

    $this->save();
  }

}
