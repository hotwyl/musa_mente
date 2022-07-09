<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class TesteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => "nullable|min:5|max:100",
            'email' => "required|email:rfc,dns|unique:testes,email",
            'fone' => "nullable",
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(response()->json([
    //         'messagem'   => 'Erro de Validação do formulário',
    //         'erros'      => $validator->errors()
    //     ]));
    // }

    // public function messages()
    // {
    //     return [

    //     ];
    // }
}
