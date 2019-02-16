<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank_information extends Model
{
  protected $table = 'bank_informations';
  protected $fillable = ['number_card','type_card','flag','validity','user_id'];

  public function insereBancaria($request){

    $this->number_card=$request->number_card;
    $this->type_card=$request->type_card;
    $this->flag=$request->flag;
    $this->validity=$request->validity;
    $this->user_id=$request->user_id;

    $this->save();
  }

  public function atualizaBancaria($request){
    
    $this->number_card=$request->number_card;
    $this->type_card=$request->type_card;
    $this->flag=$request->flag;
    $this->validity=$request->validity;
    $this->user_id=$request->user_id;

    $this->save();
  }



}
