<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PojedinacRequest extends FormRequest
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
            'klijent_id' => 'required|exists:klijents,id',
            'jmbg' => 'required|string|max:255'

        ];
    }
}
