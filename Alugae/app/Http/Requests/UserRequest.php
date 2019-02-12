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
                'nome' => 'required|string',
                'email' => 'required|email',
                'cpf' => 'required|cpf|formato_cpf|digits:11',
                'cep' => 'required|numeric',
                'telefone' => 'string|digits:11|telefone',
                'complemento' => 'required|string',
            ];
            }
        if($this->isMethod('put')){
            return [
                'nome' => 'string',
                'email' => 'email',
                'cpf' => 'unique:users,cpf,'.$this->users->id,
                'cep' => 'numeric',
                'telefone' => 'string|digits:11|telefone',
                'complemento' => 'string',
                ];
            }
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json($validator->errors(),422));
    }

    public function messages() {
        return [
            'nome.required' => "Campo Obrigatório!",
            'email.required' => "Campo Obrigatório!",
            'email.email' => "O campo deve ser preenchido no formato nomeDoUsuario@exemplo.com",
            'cpf.required' => "Campo Obrigatório",
            'cpf.cpf' => "Insira um CPF válido",
            'cpf.formato_cpf' => "Insira o CPF na forma 111.222.333-44",
            'cpf.digits' => "O cpf deve ter exatamente 11 digitos",
            'cep.required' => "Campo Obrigatório!",
            'telefone.telefone' => "Digite primeiramente o DDD e em seguida o telefone na forma 99999-9999",
            'telefone.digits' => "O telefone deve ter exatamente 11 digitos",
            'complemento.required' => "Campo Obrigatório",
        ];
    }
}
