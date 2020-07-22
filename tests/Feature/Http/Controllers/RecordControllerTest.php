<?php

namespace Tests\Feature\Http\Controllers;

use App\Record;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\RecordController
 */
class RecordControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $records = factory(Record::class, 3)->create();

        $response = $this->get(route('record.index'));

        $response->assertOk();
        $response->assertViewIs('record.index');
        $response->assertViewHas('records');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('record.create'));

        $response->assertOk();
        $response->assertViewIs('record.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RecordController::class,
            'store',
            \App\Http\Requests\RecordStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $client_reference = $this->faker->word;
        $client_name = $this->faker->word;
        $client_address = $this->faker->text;
        $client_phone = $this->faker->word;
        $client_email = $this->faker->word;
        $patient_reference = $this->faker->word;
        $patient_name = $this->faker->word;
        $patient_species = $this->faker->word;
        $patient_type = $this->faker->word;
        $patient_breed = $this->faker->word;
        $patient_color = $this->faker->word;
        $patient_date_of_birth = $this->faker->word;
        $medical_history = $this->faker->;
        $physical_examination = $this->faker->;
        $subjective_findings = $this->faker->;
        $objective_findings = $this->faker->;
        $assesment = $this->faker->text;
        $treatment = $this->faker->text;
        $recommendations = $this->faker->text;
        $immunization_history = $this->faker->;

        $response = $this->post(route('record.store'), [
            'client_reference' => $client_reference,
            'client_name' => $client_name,
            'client_address' => $client_address,
            'client_phone' => $client_phone,
            'client_email' => $client_email,
            'patient_reference' => $patient_reference,
            'patient_name' => $patient_name,
            'patient_species' => $patient_species,
            'patient_type' => $patient_type,
            'patient_breed' => $patient_breed,
            'patient_color' => $patient_color,
            'patient_date_of_birth' => $patient_date_of_birth,
            'medical_history' => $medical_history,
            'physical_examination' => $physical_examination,
            'subjective_findings' => $subjective_findings,
            'objective_findings' => $objective_findings,
            'assesment' => $assesment,
            'treatment' => $treatment,
            'recommendations' => $recommendations,
            'immunization_history' => $immunization_history,
        ]);

        $records = Record::query()
            ->where('client_reference', $client_reference)
            ->where('client_name', $client_name)
            ->where('client_address', $client_address)
            ->where('client_phone', $client_phone)
            ->where('client_email', $client_email)
            ->where('patient_reference', $patient_reference)
            ->where('patient_name', $patient_name)
            ->where('patient_species', $patient_species)
            ->where('patient_type', $patient_type)
            ->where('patient_breed', $patient_breed)
            ->where('patient_color', $patient_color)
            ->where('patient_date_of_birth', $patient_date_of_birth)
            ->where('medical_history', $medical_history)
            ->where('physical_examination', $physical_examination)
            ->where('subjective_findings', $subjective_findings)
            ->where('objective_findings', $objective_findings)
            ->where('assesment', $assesment)
            ->where('treatment', $treatment)
            ->where('recommendations', $recommendations)
            ->where('immunization_history', $immunization_history)
            ->get();
        $this->assertCount(1, $records);
        $record = $records->first();

        $response->assertRedirect(route('record.index'));
        $response->assertSessionHas('record.id', $record->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $record = factory(Record::class)->create();

        $response = $this->get(route('record.show', $record));

        $response->assertOk();
        $response->assertViewIs('record.show');
        $response->assertViewHas('record');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $record = factory(Record::class)->create();

        $response = $this->get(route('record.edit', $record));

        $response->assertOk();
        $response->assertViewIs('record.edit');
        $response->assertViewHas('record');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\RecordController::class,
            'update',
            \App\Http\Requests\RecordUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $record = factory(Record::class)->create();
        $client_reference = $this->faker->word;
        $client_name = $this->faker->word;
        $client_address = $this->faker->text;
        $client_phone = $this->faker->word;
        $client_email = $this->faker->word;
        $patient_reference = $this->faker->word;
        $patient_name = $this->faker->word;
        $patient_species = $this->faker->word;
        $patient_type = $this->faker->word;
        $patient_breed = $this->faker->word;
        $patient_color = $this->faker->word;
        $patient_date_of_birth = $this->faker->word;
        $medical_history = $this->faker->;
        $physical_examination = $this->faker->;
        $subjective_findings = $this->faker->;
        $objective_findings = $this->faker->;
        $assesment = $this->faker->text;
        $treatment = $this->faker->text;
        $recommendations = $this->faker->text;
        $immunization_history = $this->faker->;

        $response = $this->put(route('record.update', $record), [
            'client_reference' => $client_reference,
            'client_name' => $client_name,
            'client_address' => $client_address,
            'client_phone' => $client_phone,
            'client_email' => $client_email,
            'patient_reference' => $patient_reference,
            'patient_name' => $patient_name,
            'patient_species' => $patient_species,
            'patient_type' => $patient_type,
            'patient_breed' => $patient_breed,
            'patient_color' => $patient_color,
            'patient_date_of_birth' => $patient_date_of_birth,
            'medical_history' => $medical_history,
            'physical_examination' => $physical_examination,
            'subjective_findings' => $subjective_findings,
            'objective_findings' => $objective_findings,
            'assesment' => $assesment,
            'treatment' => $treatment,
            'recommendations' => $recommendations,
            'immunization_history' => $immunization_history,
        ]);

        $record->refresh();

        $response->assertRedirect(route('record.index'));
        $response->assertSessionHas('record.id', $record->id);

        $this->assertEquals($client_reference, $record->client_reference);
        $this->assertEquals($client_name, $record->client_name);
        $this->assertEquals($client_address, $record->client_address);
        $this->assertEquals($client_phone, $record->client_phone);
        $this->assertEquals($client_email, $record->client_email);
        $this->assertEquals($patient_reference, $record->patient_reference);
        $this->assertEquals($patient_name, $record->patient_name);
        $this->assertEquals($patient_species, $record->patient_species);
        $this->assertEquals($patient_type, $record->patient_type);
        $this->assertEquals($patient_breed, $record->patient_breed);
        $this->assertEquals($patient_color, $record->patient_color);
        $this->assertEquals($patient_date_of_birth, $record->patient_date_of_birth);
        $this->assertEquals($medical_history, $record->medical_history);
        $this->assertEquals($physical_examination, $record->physical_examination);
        $this->assertEquals($subjective_findings, $record->subjective_findings);
        $this->assertEquals($objective_findings, $record->objective_findings);
        $this->assertEquals($assesment, $record->assesment);
        $this->assertEquals($treatment, $record->treatment);
        $this->assertEquals($recommendations, $record->recommendations);
        $this->assertEquals($immunization_history, $record->immunization_history);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $record = factory(Record::class)->create();

        $response = $this->delete(route('record.destroy', $record));

        $response->assertRedirect(route('record.index'));

        $this->assertDeleted($record);
    }
}
