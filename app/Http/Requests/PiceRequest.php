<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PiceRequest extends FormRequest
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
            'Naziv_Pica' => 'required|string|max:255',
            'Cena_Pica' => 'required|numeric'
        ];
    }
}
