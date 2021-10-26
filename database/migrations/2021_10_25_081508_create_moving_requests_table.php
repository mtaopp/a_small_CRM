<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moving_requests', function (Blueprint $table) {
            $table->id();

            $table->string('move-first-name');
            $table->string('move-last-name');
            $table->string('move-phone');
            $table->string('move-email');

            $table->string('origin-adress');
            $table->string('origin-house');
            $table->string('origin-postcode');
            $table->string('origin-city');
            $table->string('dest-city');
            $table->string('dest-adress');
            $table->string('dest-house');
            $table->string('dest-postcode');

            $table->string('visited');
            $table->string('object-type');
            $table->string('ares');
            $table->string('rooms');
            $table->string('floor');
            $table->string('elevator');

            $table->string('moving-dateTime');
            $table->string('vehicles');
            $table->string('vehicles_per_hour');
            $table->string('men');
            $table->string('men_per_hour');
            $table->string('approach_trip_time');
            $table->string('return_trip_time');
            $table->string('required_time_min');
            $table->string('required_time_max');

            $table->string('disassembly');
            $table->string('assembly');

            $table->string('e_employee_expenses_count');
            $table->string('e_employee_expenses_price');

            $table->string('e-funiture_lift_count');
            $table->string('e-funiture_lift_price');

            $table->string('e-heavy_cargo_count');
            $table->string('e-heavy_cargo_price');

            $table->string('e-safe_count');
            $table->string('e-safe_price');

            $table->string('e-piano_count');
            $table->string('e-piano_price');

            $table->string('e-grand_piano_count');
            $table->string('e-grand_piano_price');

            $table->boolean('has_wrapping');
            $table->integer('wrapping_id');

            $table->boolean('has_unwrapping');
            $table->integer('unwrapping_id');

            $table->string('has_waste_disposal');
            $table->integer('disposal_id');

            $table->string('has_storage');
            $table->integer('storage_id');

            $table->string('comment');

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
        Schema::dropIfExists('moving_requests');
    }
}
