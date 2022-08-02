<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
            'first_production_year',
            'transmission',
            'engine_displacement_(cc)',
            'seating_capacity',
            'fuel_tank_capacity_(litres)',
            'body_type',
            'mileage_(kmpl)',
            'rpm',
            'max_power_(bhp)',
            'max_torque_(nm)',
            'length_(mm)',
            'width_(mm)',
            'height_(mm)',
            'wheel_base_(mm)',
            'power_steering',
            'power_windows_front',
            'anti_lock_braking_system',
            'air_conditioner',
            'heater',
            'driver_airbag',
            'passenger_airbag',
            'automatic_climate_control',
            'alloy_wheels',
            'multi_function',
            'cruise_control',
            'parking_sensors',
            'usb_charger',
            'voice_control'
    ];
    protected $casts = [
        'decimal' => 'first_production_year',
        'integer' => 'engine_displacement_(cc)',
        'integer' => 'seating_capacity',
        'decimal' => 'fuel_tank_capacity_(litres)',
        'integer' => 'mileage_(kmpl)',
        'integer' => 'rpm',
        'integer' => 'max_power_(bhp)',
        'integer' => 'max_torque_(nm)',
        'integer' => 'length_(mm)',
        'integer' => 'width_(mm)',
        'integer' => 'height_(mm)',
        'integer' => 'wheel_base_(mm)',
        'boolean' => 'power_steering',
        'boolean' => 'power_windows_front',
        'boolean' => 'anti_lock_braking_system',
        'boolean' => 'air_conditioner',
        'boolean' => 'heater',
        'boolean' => 'driver_airbag',
        'boolean' => 'passenger_airbag',
        'boolean' => 'automatic_climate_control',
        'boolean' => 'alloy_wheels',
        'boolean' => 'multi_function',
        'boolean' => 'cruise_control',
        'boolean' => 'parking_sensors',
        'boolean' => 'usb_charger',
        'boolean' => 'voice_control'
    ];
}
