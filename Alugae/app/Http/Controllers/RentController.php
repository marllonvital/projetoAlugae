<?php

namespace App\Http\Controllers;

use App\Notifications\ConfirmationRent;
use Illuminate\Http\Request;
use App\Rent;

class RentController extends Controller
{

    public function index()
    {
      $user = Auth::user();  
      return Rent::where('user_id', $user->id)->count();
    }

    public function store(Request $request)
    {
      $newRent= new Rent;
      $newRent->notify(new ConfirmationRent($newRent));
      $newRent->insereAluguel($request);
    }

    public function show($id)
    {
      $newRent = Rent::findOrFail($id);
      return response()->json([$newRent]);
    }

    public function update(Request $request, $id)
    {
      $newRent= Rent::findOrFail($id);
      $newRent->atualizaAluguel($request);
      return response()->json([$newRent]);
    }

    public function destroy($id)
    {
      $newRent=Rent::destroy($id);
      return response()->json(['Deletado!']);
    }
}
