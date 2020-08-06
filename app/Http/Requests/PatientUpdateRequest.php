<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientUpdateRequest extends FormRequest
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
            'action' => 'required',
        ];
    }
}
