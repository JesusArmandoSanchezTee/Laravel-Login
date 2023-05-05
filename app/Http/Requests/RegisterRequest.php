<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    // permite que una solicitud avence o no 
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

        // aqui van la reglas de validacion del login
        return [
            'email' => 'required|min:3',
            'username' => 'required|min:3',
            'password' => 'required|min:3',
            'password_confirmation' => 'required|same:password',
        ];
    }
}
