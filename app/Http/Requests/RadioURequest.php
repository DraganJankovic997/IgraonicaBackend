<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RadioURequest extends FormRequest
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
            'radio_od' => 'required|date',
            'radio_do' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'lokacija_id' => 'required|exists:lokacijas,id',
            'pozicija_id' => 'required|exists:pozicijas,id',
        ];
    }
}
