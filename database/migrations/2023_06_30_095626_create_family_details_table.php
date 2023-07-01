<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('relation')->nullable();
            $table->string('photo')->nullable();
            $table->date('dob')->nullable();
            $table->string('married')->nullable();
            $table->string('gender')->nullable();
            $table->string('originCity')->nullable();
            $table->string('bloodGroup')->nullable();
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
        Schema::dropIfExists('family_details');
    }
}
