<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Rezervacija_TerminRequest extends FormRequest
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
            'rezervacija_id' => 'required|exists:rezervacijas,id',
            'termin_id' => 'required|exists:termins,id',
            'datum' => 'required|date'
        ];
    }
}
