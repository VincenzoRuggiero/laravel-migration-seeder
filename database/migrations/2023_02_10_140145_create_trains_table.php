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
            $table->string('Azienda', 255);
            $table->string('Stazione di partenza', 255);
            $table->string('Stazione di arrivo', 255);
            $table->dateTime('Orario di partenza')->unsigned();
            $table->dateTime('Orario di arrivo')->unsigned();
            $table->string('Codice Treno', 255);
            $table->tinyInteger('Numero Carrozze', 1)->nullable();
            $table->tinyInteger('In orario')->unsigned()->default(1);
            $table->tinyInteger('Cancellato')->unsigned()->default(0);
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
