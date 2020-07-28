<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference',
        'name',
        'species',
        'type',
        'breed',
        'color',
        'markings',
        'microchip',
        'tattoo',
        'date_of_birth',
        'medical_history',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'client_id' => 'integer',
        'medical_history' => 'array',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
