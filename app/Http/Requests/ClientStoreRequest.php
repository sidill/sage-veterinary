<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientStoreRequest extends FormRequest
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
            'client.reference' => 'required|string',
            'client.name' => 'required|string',
            'client.address' => 'required|string',
            'client.phone' => 'required|starts_with:0|digits:10|unique:clients,phone',
            'client.email' => 'required|email|unique:clients,email',
            'action' => 'required',
        ];
    }
}
