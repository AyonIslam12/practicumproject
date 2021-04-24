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
            $table->id();
            $table->integer('brand_id');
            $table->string('name',100);
            $table->string('model',50);
            $table->date('model_year')->nullable();
            $table->double('price_per_day','10','2')->default('0.0');
            $table->text('image')->nullable();
            $table->string('color',20)->nullable();
            $table->integer('air_condition')->nullable();
            $table->integer('power_deadlock')->nullable();
            $table->integer('anti_lockbraking')->nullable();
            $table->integer('brake_assist')->nullable();
            $table->integer('power_steering')->nullable();
            $table->integer('cd_player')->nullable();
            $table->integer('central_looking')->nullable();
            $table->integer('crash_sensor')->nullable();
            $table->string('mileage',255);
            $table->string('transmission',50);
            $table->integer('seats');
            $table->string('luggage',100);
            $table->string('fuel',20);
            $table->longText('decs',255)->nullable();
            $table->enum('status',['active','inactive']);
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
