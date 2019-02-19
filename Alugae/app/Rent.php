<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
  public function insereAluguel($request){
    $days = $request->days;
    // $this->quantity=$request->quantity;
    $this->date_initial= new Carbon()->format('D-M-Y');
    $this->date_final = $this->date_initial->addDays($days)->format('D-M-Y');
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
