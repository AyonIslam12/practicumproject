<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('car_id');
            $table->integer('user_id');
            $table->date('from_date');
            $table->time('from_time');
            $table->date('to_date');
            $table->time('to_time');
            $table->double('price_per_day','10','2')->default(0.0);
            $table->double('total_price','10','2')->default(0.0);
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('email');
            $table->integer('phone');
            $table->text('details')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('bookings');
    }
}
