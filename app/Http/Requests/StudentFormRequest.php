<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
            'nome' => 'required',
            'cognome' =>'required',
            'email' => 'required|email',
            'anno_iscrizione' => 'required',
            'genere' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome richiesto',
            'cognome.required' => 'Campo cognome richiesto',
            'email.required' => 'Campo email richiesto',
            'email.required.email' => 'Formato email non corretto',
            'anno_iscrizione.required' => 'Campo anno iscrizione richiesto',
            'genere.required' => 'Campo genere richiesto'
        ];
    }
}
