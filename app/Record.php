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
        'patient_id' => 'integer',
        'medical_history' => 'array',
        'physical_examination' => 'array',
        'subjective_findings' => 'array',
        'objective_findings' => 'array',
        'immunization_history' => 'array',
    ];
}
