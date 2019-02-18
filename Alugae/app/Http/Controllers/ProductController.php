<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
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
      $newProduct= new Product;
      $newProduct->insereProduto($request);
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
}
