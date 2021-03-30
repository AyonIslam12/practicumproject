<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->string('car_name');
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('car_color');
            $table->string('sit_capacity');
         /*  $table->string('car_type'); */
/*          $table->string('image');
            $table->string('car_dsce');
            $table->string('car_cc');
            $table->string('car_toc');
            $table->string('car_odo'); */
            $table->string('n_plate');
            /* $table->string('status'); */
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
        Schema::dropIfExists('cars');
    }
}
