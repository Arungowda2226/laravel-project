<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_details', function (Blueprint $table) {
              $table->id();
            $table->string('OrganisationName');
            $table->string('OrganisationAddress')->nullable();
            $table->string('OrganisationState')->nullable();
            $table->string('OrganisationCity')->nullable();
            $table->string('OrganisationCountry')->nullable();
            $table->string('OrganisationPhone')->nullable();
            $table->string('OrganisationEmail')->nullable();
            $table->string('OrganisationPhotos')->nullable();
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
        Schema::dropIfExists('business_details');
    }
}
