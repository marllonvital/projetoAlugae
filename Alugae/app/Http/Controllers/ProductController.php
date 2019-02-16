<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return Product::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
      $novo_produto= new Product;
      $novo_produto->insereProduto($request);
      return response()->json([$novo_produto]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $novo_produto = Product::findOrFail($id);
      return response()->json([$novo_produto]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
      $novo_produto= Product::findOrFail($id);
      $novo_produto->atualizaProduto($request);
      return response()->json([$novo_produto]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $novo_produto=Product::destroy($id);
      return response()->json(['Deletado!']);
    }

    public function getUsers($id)
  {
      $product = Product::findOrFail($id);
      return response()->json([$product->users]);
  }

  //Request recebe users como string com ids separados por vírgula Ex:
  // 1,2,3
  public function putInProduct(Request $request, $product_id)
  {
      $product = Product::findOrFail($product_id);

      //pega user como string e separa pelas vírgulas os ids em um array
      $users = explode(',',$request->users);

      $product->newUsers($users);

      return response()->json([$product->users, $product]);
  }

  //Request recebe users como string com ids separados por vírgula Ex:
  // 1,2,3
  public function removeOfProduct(Request $request, $product_id)
  {
      $product = Product::findOrFail($product_id);

      //pega user como string e separa pelas vírgulas os ids em um array
      $users = explode(',',$request->users);

      $product->removeUsers($users);

      return response()->json([$product->users, $product]);
  }
}
