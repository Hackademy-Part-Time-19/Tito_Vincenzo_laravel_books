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
            'price' => 'required',
            'genres' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo non è stato specificato',
            'title.max' => 'Il titolo deve contenere massimo di 50 caratteri',
            'price.required' => "il prezzo non è stato specificato",
            'genres.required' => 'Il genere deve essere selezionato',
            
            
        ];
    }
}
