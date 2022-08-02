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
            $table->integer('first_production_year');
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
            $table->boolean('power_steering')->nullable()->default(null);
            $table->boolean('power_windows_front')->nullable()->default(null);
            $table->boolean('anti_lock_braking_system')->nullable()->default(null);
            $table->boolean('air_conditioner')->nullable()->default(null);
            $table->boolean('heater')->nullable()->default(null);
            $table->boolean('driver_airbag')->nullable()->default(null);
            $table->boolean('passenger_airbag')->nullable()->default(null);
            $table->boolean('automatic_climate_control')->nullable()->default(null);
            $table->boolean('alloy_wheels')->nullable()->default(null);
            $table->boolean('multi_function')->nullable()->default(null);
            $table->boolean('cruise_control')->nullable()->default(null);
            $table->boolean('parking_sensors')->nullable()->default(null);
            $table->boolean('usb_charger')->nullable()->default(null);
            $table->boolean('voice_control')->nullable()->default(null);
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
