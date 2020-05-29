<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Racun_PiceRequest extends FormRequest
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
            'kolicina' => 'required|integer',
            'racun_id' => 'required|exists:racuns,id',
            'pice_id' => 'required|exists:pices,id'
        ];
    }
}
