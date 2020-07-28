<?php

namespace Tests\Feature\Http\Controllers;

use App\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PatientController
 */
class PatientControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $patients = factory(Patient::class, 3)->create();

        $response = $this->get(route('patient.index'));

        $response->assertOk();
        $response->assertViewIs('patient.index');
        $response->assertViewHas('patients');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('patient.create'));

        $response->assertOk();
        $response->assertViewIs('patient.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PatientController::class,
            'store',
            \App\Http\Requests\PatientStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $reference = $this->faker->word;
        $name = $this->faker->name;
        $species = $this->faker->word;
        $type = $this->faker->word;
        $breed = $this->faker->word;
        $color = $this->faker->word;
        $date_of_birth = $this->faker->word;
        $medical_history = $this->faker->;

        $response = $this->post(route('patient.store'), [
            'reference' => $reference,
            'name' => $name,
            'species' => $species,
            'type' => $type,
            'breed' => $breed,
            'color' => $color,
            'date_of_birth' => $date_of_birth,
            'medical_history' => $medical_history,
        ]);

        $patients = Patient::query()
            ->where('reference', $reference)
            ->where('name', $name)
            ->where('species', $species)
            ->where('type', $type)
            ->where('breed', $breed)
            ->where('color', $color)
            ->where('date_of_birth', $date_of_birth)
            ->where('medical_history', $medical_history)
            ->get();
        $this->assertCount(1, $patients);
        $patient = $patients->first();

        $response->assertRedirect(route('patient.index'));
        $response->assertSessionHas('patient.id', $patient->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $patient = factory(Patient::class)->create();

        $response = $this->get(route('patient.show', $patient));

        $response->assertOk();
        $response->assertViewIs('patient.show');
        $response->assertViewHas('patient');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $patient = factory(Patient::class)->create();

        $response = $this->get(route('patient.edit', $patient));

        $response->assertOk();
        $response->assertViewIs('patient.edit');
        $response->assertViewHas('patient');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PatientController::class,
            'update',
            \App\Http\Requests\PatientUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $patient = factory(Patient::class)->create();
        $reference = $this->faker->word;
        $name = $this->faker->name;
        $species = $this->faker->word;
        $type = $this->faker->word;
        $breed = $this->faker->word;
        $color = $this->faker->word;
        $date_of_birth = $this->faker->word;
        $medical_history = $this->faker->;

        $response = $this->put(route('patient.update', $patient), [
            'reference' => $reference,
            'name' => $name,
            'species' => $species,
            'type' => $type,
            'breed' => $breed,
            'color' => $color,
            'date_of_birth' => $date_of_birth,
            'medical_history' => $medical_history,
        ]);

        $patient->refresh();

        $response->assertRedirect(route('patient.index'));
        $response->assertSessionHas('patient.id', $patient->id);

        $this->assertEquals($reference, $patient->reference);
        $this->assertEquals($name, $patient->name);
        $this->assertEquals($species, $patient->species);
        $this->assertEquals($type, $patient->type);
        $this->assertEquals($breed, $patient->breed);
        $this->assertEquals($color, $patient->color);
        $this->assertEquals($date_of_birth, $patient->date_of_birth);
        $this->assertEquals($medical_history, $patient->medical_history);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $patient = factory(Patient::class)->create();

        $response = $this->delete(route('patient.destroy', $patient));

        $response->assertRedirect(route('patient.index'));

        $this->assertDeleted($patient);
    }
}
