<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordUpdateRequest extends FormRequest
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
