<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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
        'signature',
        'date',
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

    public static function create(array $attributes = [])
    {
        $client = Client::query()->firstOrCreate([
            'reference' => $attributes['client']['reference']
        ], $attributes['client']);

        $patient = $client->patients()->firstOrCreate([
            'reference' => $attributes['patient']['reference']
        ], $attributes['patient']);

        return $patient->records()->create(Arr::except($attributes, [
            'client', 'patient'
        ]));
    }
}
