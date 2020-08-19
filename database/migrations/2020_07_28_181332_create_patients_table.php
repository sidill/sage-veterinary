<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->index();
            $table->string('name')->nullable();
            $table->string('species')->nullable();
            $table->string('type')->nullable();
            $table->string('breed')->nullable();
            $table->string('color')->nullable();
            $table->string('markings')->nullable();
            $table->string('microchip')->nullable();
            $table->string('tattoo')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->json('medical_history')->nullable();
            $table->bigInteger('client_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
