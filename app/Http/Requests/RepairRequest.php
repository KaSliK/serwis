<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepairRequest extends FormRequest
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
            'client_id' => 'required|numeric',
            'item_id' => 'required|numeric',
            'status_id' => 'required|numeric',
            'serial_number' => 'required',
            'description' => 'required|max:250',
            'price' => 'required',

        ];


    }

    public function messages()
    {
        return [
            'client_id.required' => 'Wybierz klienta',
            'item_id.required' => 'Wybierz urządzenie',
            'status_id.required' => 'Wybierz status',
            'serial_number.required' => 'Podaj numer seryjny',
            'description.required' => 'Wpisz opis',
            'description.max' => 'Opis jest zbyt długi',
            'price.required' => 'Cena jest obowiązkowa',

        ];
    }
}
