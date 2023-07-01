<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('FatherName')->nullable();
            $table->string('MotherName')->nullable();
            $table->string('Photo')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->date('DOB')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Married')->nullable();
            $table->string('BloodGroup')->nullable();
            $table->string('Address')->nullable();
            $table->string('State')->nullable();
            $table->string('City')->nullable();
            $table->string('Pincode')->nullable();
            $table->string('Country')->nullable();
            $table->string('OriginAddress')->nullable();
            $table->string('OriginState')->nullable();
            $table->string('OriginCity')->nullable();
            $table->string('OriginPincode')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
