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

  public function createRent($product_id) {
    $date_initial = Carbon::now()->format('D/M/Y');
    $date_final = Carbon::now()->addDays(7)->format('D/M/Y');
  	$newRent = reserveProduct($product_id);
  	$this->notify(new ConfirmationRent($newRent));
  	return response()->json('Aluguel feito com sucesso!');
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

}
