<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->string('departure_station', 255);
            $table->string('arrival_station', 255);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_number', 255);
            $table->tinyInteger('number_of_cabs')->nullable();
            $table->tinyInteger('in_time')->unsigned()->default(1);
            $table->tinyInteger('cancelled')->unsigned()->default(0);
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
        Schema::dropIfExists('trains');
    }
};
