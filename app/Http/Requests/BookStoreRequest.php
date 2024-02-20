<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
        return [

            'title' => 'required|max:20',
            'year' => 'required|max:4',
            'genre' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo non è stato specificato',
            'title.max' => 'Il titolo deve contenere massimo di 20 caratteri',
            'year.required' => "L'anno non è stato specificata",
            'year.max' =>"L'anno deve contenere massimo 4 caratteri",
            'genre.required' => 'Il genere deve essere selezionato',
            
            
        ];
    }
}
