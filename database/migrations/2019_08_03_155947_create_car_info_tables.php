<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInfoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand', 255);
            $table->string('model', 255);
            $table->string('fuel', 255);
            $table->string('car_img', 255);
            $table->integer('price');
            $table->enum('transmission', ['AT', 'MT']);
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
        Schema::dropIfExists('car_info');
    }
}
