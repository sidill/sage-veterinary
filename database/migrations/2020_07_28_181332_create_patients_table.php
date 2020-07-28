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
            $table->string('name');
            $table->string('species');
            $table->string('type');
            $table->string('breed');
            $table->string('color');
            $table->string('markings')->nullable();
            $table->string('microchip')->nullable();
            $table->string('tattoo')->nullable();
            $table->string('date_of_birth');
            $table->json('medical_history');
            $table->bigInteger('client_id');
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
        Schema::dropIfExists('patients');
    }
}
