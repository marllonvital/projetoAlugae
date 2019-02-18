<?php

namespace App\Http\Controllers;

use App\Notifications\ConfirmationRent;
use Illuminate\Http\Request;
use App\Rent;
class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Rent::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $newRent= new Rent;
      $newRent->notify(new ConfirmationRent($newRent));
      $newRent->insereAluguel($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $newRent = Rent::findOrFail($id);
      return response()->json([$newRent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $newRent= Rent::findOrFail($id);
      $newRent->atualizaAluguel($request);
      return response()->json([$newRent]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $newRent=Rent::destroy($id);
      return response()->json(['Deletado!']);
    }
}
