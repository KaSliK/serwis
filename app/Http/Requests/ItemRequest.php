<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'brand' => 'required|max:20',
            'model' => 'required|max:30',
        ];
    }
    public function messages()
    {
        return [
            'brand.max' => 'Nazwa producenta jest zbyt długa',
            'brand.required' => 'Nazwa producenta jest obowiązkowa',
            'model.required' => 'Model jest obowiązkowy',
            'model.max' => 'Model jest zbyt długi',

        ];
    }
}
