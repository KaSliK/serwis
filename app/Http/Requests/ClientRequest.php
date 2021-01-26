<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|max:20',
            'surname' => 'required|max:50',
            'email' => 'required|max:50|unique:clients|email:rfc,dns',
            'phone_number' => 'required|min:9|numeric',
            'post_code' => 'required|min:6|max:6',

        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Zbyt długie imię',
            'name.required' => 'Imię jest wymagane',
            'surname.max' => 'Zbyt długie nazwisko',
            'surname.required' => 'Nazwisko jest wymagane',
            'email.required' => 'Email jest wymagany',
            'email.max' => 'Email jest zbyt długi',
            'email.email' => 'Email nie jest poprawny',
            'email.unique' => 'Email już został raz podany',
            'phone_number.numeric' => 'Numer telefonu powinien składać się z cyfr',
            'phone_number.required' => 'Numer telefonu jest konieczny',
            'post_code.min' => 'Podaj prawidłowy kod pocztowy',
            'post_code.max' => 'Podaj prawidłowy kod pocztowy',
            'post_code.required' => 'Kod pocztowy jest wymagany',
        ];
    }
}
