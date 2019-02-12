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
                'nome' => 'required|string',
                'tipo' => 'required|string',
                'marca' => 'required|string',
                'preco' => 'required|numeric',
                'descricao' => 'required|string',
                'disponibilidade' => 'required|string',
            ];
            }
        if($this->isMethod('put')){
            return [
                'nome' => 'string',
                'tipo' => 'string',
                'marca' => 'string',
                'preco' => 'string',
                'descricao' => 'string',
                'disponibilidade' => 'string',
            ];
            }
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    public function messages() {
        return [
            'nome.required' => "Campo Obrigatório!",
            'tipo.required' => "Campo Obrigatório!",
            'tipo.string' => "O campo deve ser preenchido com uma das categorias disponiveis",
            'marca.required' => "Campo Obrigatório",
            'preco.required' => "Campo Obrigatório!",
            'descricao.required' => "Campo Obrigatório!",
            'disponibilidade.required' => "Campo Obrigatório!"
        ];
    }
}
