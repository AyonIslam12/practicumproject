<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('driver_id');
            $table->string('driver_firstname');
            $table->string('driver_lastname');
            $table->string('driver_lastname');
            $table->string('driver_username');
            $table->string('driver_email');
            $table->string('driver_password');
            $table->string('driver_photo');
            $table->string('driver_nidcard');
            $table->string('driver_age');
            $table->string('driver_licence');
            $table->string('driver_contact');
            $table->longText('driver_address');
            $table->longText('status',10);
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
        Schema::dropIfExists('drivers');
    }
}
