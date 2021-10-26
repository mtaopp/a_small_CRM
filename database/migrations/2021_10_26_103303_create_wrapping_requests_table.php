<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrappingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrapping_requests', function (Blueprint $table) {
            $table->id();
            $table->string('wrap-dateTime');
            $table->string('wrap-vehicles');
            $table->string('wrap-vehicle_per_hour');
            $table->string('wrap-men');
            $table->string('wrap-men_per_hour');
            $table->string('wrap-time_min');
            $table->string('wrap-time_max');
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
        Schema::dropIfExists('wrapping_requests');
    }
}
