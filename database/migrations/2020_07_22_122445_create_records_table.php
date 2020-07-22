<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('client_reference')->index();
            $table->string('client_name');
            $table->text('client_address');
            $table->string('client_phone')->index();
            $table->string('client_email')->index();
            $table->string('patient_reference')->index();
            $table->string('patient_name');
            $table->string('patient_species');
            $table->string('patient_type');
            $table->string('patient_breed');
            $table->string('patient_color');
            $table->string('patient_markings')->nullable();
            $table->string('patient_microchip')->nullable();
            $table->string('patient_tattoo')->nullable();
            $table->string('patient_date_of_birth');
            $table->json('medical_history');
            $table->json('physical_examination');
            $table->json('subjective_findings');
            $table->json('objective_findings');
            $table->longText('assesment');
            $table->longText('treatment');
            $table->json('recommendations');
            $table->json('immunization_history');
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
        Schema::dropIfExists('records');
    }
}
