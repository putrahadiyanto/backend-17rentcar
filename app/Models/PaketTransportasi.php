<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketTransportasi extends Model
{
    use HasFactory;

    protected $table = 'paket_transportasis';

    protected $fillable = [
        'car_id',
        'type',
        'price_per_day',
        'include',
        'exclude',
        'is_showing',
    ];

    protected $casts = [
        'include' => 'array',
        'exclude' => 'array',
        'is_showing' => 'boolean',
        'price_per_day' => 'integer',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
