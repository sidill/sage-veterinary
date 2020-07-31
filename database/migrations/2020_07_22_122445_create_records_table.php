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
            $table->json('physical_examination')->nullable();
            $table->json('subjective_findings')->nullable();
            $table->json('objective_findings')->nullable();
            $table->longText('assesment')->nullable();
            $table->longText('treatment')->nullable();
            $table->longText('recommendations')->nullable();
            $table->json('immunization_history')->nullable();
            $table->string('signature')->nullable();
            $table->string('date')->nullable();
            $table->bigInteger('patient_id');
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
