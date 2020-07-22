<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_reference',
        'client_name',
        'client_address',
        'client_phone',
        'client_email',
        'patient_reference',
        'patient_name',
        'patient_species',
        'patient_type',
        'patient_breed',
        'patient_color',
        'patient_markings',
        'patient_microchip',
        'patient_tattoo',
        'patient_date_of_birth',
        'medical_history',
        'physical_examination',
        'subjective_findings',
        'objective_findings',
        'assesment',
        'treatment',
        'recommendations',
        'immunization_history',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'medical_history' => 'array',
        'physical_examination' => 'array',
        'subjective_findings' => 'array',
        'objective_findings' => 'array',
        'immunization_history' => 'array',
    ];
}
