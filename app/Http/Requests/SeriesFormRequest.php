<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => ['required','min:2']
        ];
    }

    public function messages()
    {
        return[
            //'nome.*' => "mensagem para todos os erros"
            'nome.required' => "O campo nome é obrigatório",
            'nome.min' => "É necessário no mímino :min caracteres"
        ];
    }
}
