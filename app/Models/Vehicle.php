<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vehicle_name',
        'price_(rs)',
        'brand',
        'model',
        'model_year',
        'colors_available',
        'wheel_count',
        'fuel_type',
        'specification_id',
        'record_status'
    ];
    protected $casts = [
        'decimal' => 'price_(rs)',
        'integer' => 'model_year',
        'integer' => 'colors_available',
        'integer' => 'wheel_count',
        'integer' => 'specification_id',
        'integer' => 'record_status'
    ];
}
