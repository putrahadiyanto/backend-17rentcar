<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'brand',
        'type',
        'price',
        'image',
        'capacity',
        'transmission',
        'fuelType',
        'year',
        'color',
        'shortDescription',
        'description',
        'features',
        'isShowing',
    ];

    protected $casts = [
        'features' => 'array',
        'price' => 'float',
        'year' => 'integer',
        'capacity' => 'integer',
    ];

    public function clicks()
    {
        return $this->hasMany(CarClick::class);
    }
}
