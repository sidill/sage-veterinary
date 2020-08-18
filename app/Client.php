<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference',
        'name',
        'address',
        'phone',
        'email',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];


    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function records()
    {
        return $this->hasManyThrough(Record::class, Patient::class);
    }

    public static function create(array $attributes = [])
    {
       return Client::query()->firstOrCreate([
            'reference' => $attributes['client']['reference']
        ], $attributes['client']);
    }

    protected static function booted()
    {
        self::deleting(function ($model) {
            $model->patients->each(function ($patient) {
                $patient->delete();
            });
        });
    }
}
