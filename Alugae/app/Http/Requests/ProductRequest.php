<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->isMethod('post')){
            return[
                'name' => 'required|string',
                'type' => 'required|string',
                'brand' => 'required|string',
                'price' => 'required|numeric',
                'description' => 'required|string',
                'availability' => 'string',
            ];
            }
        if($this->isMethod('put')){
            return [
                'name' => 'string',
                'type' => 'string',
                'brand' => 'string',
                'price' => 'string',
                'description' => 'string',
                'availability' => 'string',
            ];
            }
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    public function messages() {
        return [
            'name.required' => "Campo Obrigatório!",
            'type.required' => "Campo Obrigatório!",
            'type.string' => "O campo deve ser preenchido com uma das categorias disponiveis",
            'brand.required' => "Campo Obrigatório",
            'price.required' => "Campo Obrigatório!",
            'description.required' => "Campo Obrigatório!",
        ];
    }

    public function getProduct($name){

    $products = Product::where('name', $name)->get();
    return response()->json([$products]);
  }
}
