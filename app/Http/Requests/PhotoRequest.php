<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
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
            'photo' => 'mimes:jpeg,png|max:1014',
        ];
    }
    public function messages()
    {
        return [
            'photo.max' => 'Zdjęcie jest zbyt duże, zmniejsz jego wagę',
            'photo.mimes' => 'Zdjęcie posiada zły format'
        ];
    }
}
