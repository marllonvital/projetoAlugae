<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
                'email' => 'required|email',
                'cpf' => 'required|cpf|formato_cpf',
                'cep' => 'required|numeric',
                'telefone' => 'string|telefone',
                'complemento' => 'required|string',
            ];
            }
        if($this->isMethod('put')){
            return [
                'name' => 'string',
                'email' => 'email',
                //'cpf' => 'unique:users,cpf,'.$this->users->id,
                'cep' => 'numeric',
                'telefone' => 'string|telefone',
                'complemento' => 'string',
                ];
            }
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    public function messages() {
        return [
            'name.required' => "Campo Obrigatório!",
            'email.required' => "Campo Obrigatório!",
            'email.email' => "O campo deve ser preenchido no formato nameDoUsuario@exemplo.com",
            'cpf.required' => "Campo Obrigatório",
            'cpf.cpf' => "Insira um CPF válido",
            'cpf.formato_cpf' => "Insira o CPF na forma 111.222.333-44",
            'cep.required' => "Campo Obrigatório!",
            'telefone.telefone' => "Digite o telefone na forma 9999-9999",
            'complemento.required' => "Campo Obrigatório",
        ];
    }
}
