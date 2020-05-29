<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LokacijaRequest extends FormRequest
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
            'naziv' => 'required|string|max:255',
            'kvadratura' => 'required|integer',
            'adresa' => 'required|string|max:255',
            'deo_grada' => 'required|string|max:255',
            'grad_id' => 'required|exists:grads,id'
        ];
    }
}
