<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnwrappingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unwrapping_requests', function (Blueprint $table) {
            $table->id();
            $table->string('unwrapping-dateTime');
            $table->string('unwrap-vehicles');
            $table->string('unwrap-vehicle_per_hour');
            $table->string('unwrap-men');
            $table->string('unwrap-men_per_hour');
            $table->string('unwrap-time_min');
            $table->string('unwrap-time_max');
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
        Schema::dropIfExists('unwrapping_requests');
    }
}
