<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormulario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $year = date('Y');
        return [
            'txtisbn' => "required|digits_between:13,20|numeric",
            'txttitulo' => "required|max:150",
            'txtautor' => "required|max:70",
            'txtpaginas' => "required|numeric|integer|min:1|max:1000",
            'txtanio' => "required|integer|digits:4|min:1000|max:$year",
            'txteditorial' => "required",
            'txtemail' => "required|email",
        ];
    }
}
