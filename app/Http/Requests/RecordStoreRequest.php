<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordStoreRequest extends FormRequest
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
            'client_reference' => 'required|string',
            'client_name' => 'required|string',
            'client_address' => 'required|string',
            'client_phone' => 'required|string',
            'client_email' => 'required|string',
            'patient_reference' => 'required|string',
            'patient_name' => 'required|string',
            'patient_species' => 'required|string',
            'patient_type' => 'required|string',
            'patient_breed' => 'required|string',
            'patient_color' => 'required|string',
            'patient_markings' => 'string',
            'patient_microchip' => 'string',
            'patient_tattoo' => 'string',
            'patient_date_of_birth' => 'required|string',
            'medical_history' => 'required|json',
            'physical_examination' => 'required|json',
            'subjective_findings' => 'required|json',
            'objective_findings' => 'required|json',
            'assesment' => 'required|string',
            'treatment' => 'required|string',
            'recommendations' => 'required|string',
            'immunization_history' => 'required|json',
        ];
    }
}
