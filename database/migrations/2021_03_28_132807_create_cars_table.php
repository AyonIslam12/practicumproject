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
            $table->string('name',100);
            $table->string('brand',50);
            $table->string('model',50);
            $table->double('price','10','2')->default('0.0');
            $table->text('image')->nullable();
            $table->string('color',20);
            $table->string('mileage',255);
            $table->string('transmission',50);
            $table->integer('seats');
            $table->string('luggage',100);
            $table->string('fuel',20);
            $table->longText('decs')->nullable();

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
