<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function index()
    {
      return Product::all();
    }

    public function store(ProductRequest $request)
    {
      $user = Auth::user();
      $newProduct= new Product;
      $newProduct->insereProduto($request, $user);
      return response()->json([$newProduct]);

    }

    public function show($id)
    {
      $newProduct = Product::findOrFail($id);
      return response()->json([$newProduct]);
    }

    public function update(ProductRequest $request, $id)
    {
      $newProduct= Product::findOrFail($id);
      $newProduct->atualizaProduto($request);
      return response()->json([$newProduct]);
    }

    public function destroy($id)
    {
      $newProduct=Product::destroy($id);
      return response()->json(['Deletado!']);
    }

    public function showPhoto()
    {
        return response()->download($path, $product->photo);
    }

    public function getUsers($id)
  {
      $product = Product::findOrFail($id);
      
      return response()->json([$product->users]);
  }

  public function getProduct($name){

    $products = Product::where('name', $name)->get();
    return response()->json([$products]);
  }

  public function getProductById($id){

    $products = Product::where('id', $id)->get();
    return response()->json([$products]);
  }
}
