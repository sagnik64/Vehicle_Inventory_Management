<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->integer('year_of_manufacture');
            $table->string('fuel_type');
            $table->string('transmission');
            $table->integer('engine_displacement_(cc)');
            $table->integer('seating_capacity');
            $table->decimal('fuel_tank_capacity_(litres)');
            $table->string('body_type');
            $table->integer('mileage_(kmpl)');
            $table->integer('rpm');
            $table->integer('max_power_(bhp)');
            $table->integer('max_torque_(nm)');
            $table->integer('length_(mm)');
            $table->integer('width_(mm)');
            $table->integer('height_(mm)');
            $table->integer('wheel_base_(mm)');
            $table->boolean('power_steering')->default(null);
            $table->boolean('power_windows_front')->default(null);
            $table->boolean('anti_lock_braking_system')->default(null);
            $table->boolean('air_conditioner')->default(null);
            $table->boolean('heater')->default(null);
            $table->boolean('driver_airbag')->default(null);
            $table->boolean('passenger_airbag')->default(null);
            $table->boolean('automatic_climate_control')->default(null);
            $table->boolean('alloy_wheels')->default(null);
            $table->boolean('multi_function')->default(null);
            $table->boolean('cruise_control')->default(null);
            $table->boolean('parking_sensors')->default(null);
            $table->boolean('usb_charger')->default(null);
            $table->boolean('voice_control')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specifications');
    }
}
