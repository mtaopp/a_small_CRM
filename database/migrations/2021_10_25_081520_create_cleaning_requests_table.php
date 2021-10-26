<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCleaningRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cleaning_requests', function (Blueprint $table) {
            $table->id();
            $table->string('clean-first-name');
            $table->string('clean-last-name');
            $table->string('clean-adress');
            $table->string('clean-house');
            $table->integer('clean-postcode');
            $table->string('clean-city');
            $table->integer('clean-phone');
            $table->string('clean-email');
            $table->string('cleaning-dateTime');
            $table->string('handover-dateTime');
            $table->string('visited');
            $table->string('object-type');
            $table->integer('ares');
            $table->float('rooms');
            $table->integer('floor');
            $table->boolean('elevator');
            $table->integer('windows');
            $table->integer('carpet');
            $table->integer('shades');
            $table->integer('basement');
            $table->integer('screed');
            $table->integer('balcony');
            $table->integer('terrace');
            $table->integer('garage');
            $table->integer('conservatory');
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
        Schema::dropIfExists('cleaning_requests');
    }
}
