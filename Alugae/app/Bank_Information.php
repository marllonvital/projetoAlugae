<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_information extends Model
{
  protected $table = 'bank_informations';
  protected $fillable = ['numero_do_cartao','tipo_do_cartao','bandeira','validade','usuario_id'];

  public function insereBancaria($request){

    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipo_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;
    $this->usuario_id=$request->usuario_id;

    $this->save();
  }

  public function atualizaBancaria($request){
    
    $this->numero_do_cartao=$request->numero_do_cartao;
    $this->tipo_do_cartao=$request->tipo_do_cartao;
    $this->bandeira=$request->bandeira;
    $this->validade=$request->validade;
    $this->usuario_id=$request->usuario_id;

    $this->save();
  }



}
