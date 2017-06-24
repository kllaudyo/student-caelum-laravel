<?php

namespace Lojinha\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nome" => "required|min:5",
            "preco" => "required"
        ];
    }

    public function messages()
    {
        return [
            "required" => "O campo :attribute é obrigatório",
            "preco.required" => "O campo preço é obrigatório e precisa ser um valor válido",
            "min" => "O campo :attribute deve ter no mínimo :min caracteres"
        ];
    }
}
