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
            'client.reference' => 'required|string',
            'client.name' => 'required|string',
            'client.address' => 'required|string',
            'client.phone' => 'required|starts_with:0|digits:10',
            'client.email' => 'required|email',
            'patient.reference' => 'required|string',
            'patient.name' => 'required|string',
            'patient.species' => 'required|string|in:dog,cat,none',
            'patient.type' => 'required|string|in:spayed,neutered,none',
            'patient.breed' => 'required|string',
            'patient.color' => 'required|string',
            'patient.markings' => 'nullable|string',
            'patient.microchip' => 'nullable|string',
            'patient.tattoo' => 'nullable|string',
            'patient.date_of_birth' => 'nullable|date',
            'patient.medical_history' => 'nullable|array',
            'physical_examination' => 'nullable|array',
            'subjective_findings' => 'nullable|array',
            'objective_findings' => 'nullable|array',
            'assesment' => 'nullable|string',
            'treatment' => 'nullable|string',
            'recommendations' => 'nullable|string',
            'immunization_history' => 'nullable',
            'immunization_history.*.date' => 'required|date',
            'immunization_history.*.type' => 'required|string',
            'immunization_history.*.next_due' => 'required|date',
            'date' => 'nullable|date',
            'signature' => 'nullable|string',
            'action' => 'required',
        ];
    }
}
