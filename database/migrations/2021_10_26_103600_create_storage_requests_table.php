<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorageRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storage_requests', function (Blueprint $table) {
            $table->id();
            $table->string('storage-volume_min');
            $table->string('storage-volume_max');
            $table->string('storage-price');
            $table->string('storage_from_date');
            $table->string('storage_until_date');
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
        Schema::dropIfExists('storage_requests');
    }
}
