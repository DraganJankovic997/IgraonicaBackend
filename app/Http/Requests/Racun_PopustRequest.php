<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Racun_PopustRequest extends FormRequest
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
            'racun_id' => 'required|exists:racuns,id',
            'popust_id' => 'required|exists:popusts,id'
        ];
    }
}
