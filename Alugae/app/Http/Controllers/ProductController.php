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
      $newProduct= new Product;
      $newProduct->insereProduto($request);

       if(!Storage::exists('localPhotos/')) //Criando uma pasta para armanezar as fotos!
            Storage::makeDirectory('localPhotos/',0775,true);

      $validator = Validator::make($request->all(), [
        'photo' =>'required|file|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
      ]);

      $file = $request->file('photo');
      $path = $file->store('localPhotos');
      $products->photo = $file;
      return response()->json([$newProduct]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $newProduct = Product::findOrFail($id);
      return response()->json([$newProduct]);
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
      $newProduct= Product::findOrFail($id);
      $newProduct->atualizaProduto($request);
      return response()->json([$newProduct]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $newProduct=Product::destroy($id);
      return response()->json(['Deletado!']);
    }

    public function showPhoto()
    {
        return response()->download($path, $product->photo);
    }
}