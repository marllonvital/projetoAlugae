<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Rent extends Pivot
{
  public function getDateInitialAttribute() {
    return Carbon::createFromFormat('d-m-Y', $this->date_initial)->format('d/m/Y');
  }

  public function getDateFinalAttribute() {
    return Carbon::createFromFormat('d-m-Y', $this->date_final)->format('d/m/Y');
  }

//   public function insereAluguel($request){
//     $days = $request->days;
//     // $this->quantity=$request->quantity;
//     $this->date_initial= new Carbon()->format('D-M-Y');
//     );
//     $this->product_id=$request->product_id;
//     $this->user_id=$request->user_id;

//     $this->save();
//   }
//   public function atualizaAluguel($request){

//     $this->historic=$request->historic;
//     $this->quantity=$request->quantity;
//     $this->date_final=$request->date_final;
//     $this->date_initial=$request->date_initial;
//     $this->product_id=$request->product_id;
//     $this->user_id=$request->user_id;

//     $this->save();
//   }

}
