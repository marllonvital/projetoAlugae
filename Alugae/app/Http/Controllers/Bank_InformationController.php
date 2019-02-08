<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank_Information;
class Bank_InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      Bank_Information::destroy($id);
      return response()->json(['Deletado!']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $novo_banco= new Bank_Information;
      $novo_banco->insereBancaria($request);

      return response()->json([$novo_banco]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $novo_banco = Bank_Information::findOrFail($sid);
      return response()->json([$novo_banco]);
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
      $novo_banco= $novo_banco::find( $request->$novo_banco_id)
      $novo_banco->atualizaBancaria($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $novo_banco=Bank_Information::destroy($id);
      return response()->json(['Deletado!']);
    }
}
