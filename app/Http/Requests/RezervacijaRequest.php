<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RezervacijaRequest extends FormRequest
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
            'teren_id' => 'required|exists:terens,id',
            'klijent_id' => 'required|exists:klijents,id',
            'racun_id' => 'required|exists:racuns,id'
        ];
    }
}
