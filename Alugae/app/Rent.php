<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  public function insereAluguel($request){
    
    $this->quantity=$request->quantity;
    $this->date_final=$request->date_final;
    $this->date_initial=$request->date_initial;
    $this->product_id=$request->product_id;
    $this->user_id=$request->user_id;

    $this->save();
  }
  public function atualizaAluguel($request){

    $this->historic=$request->historic;
    $this->quantity=$request->quantity;
    $this->date_final=$request->date_final;
    $this->date_initial=$request->date_initial;
    $this->product_id=$request->product_id;
    $this->user_id=$request->user_id;

    $this->save();
  }

}
