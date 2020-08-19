@extends('layouts.app')

@section('header')
    <x-sub-header title="Patients" />
@endsection

@section('content')
    <form action="{{ route('patient.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="bg-white rounded shadow p-5 space-y-8">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Client Information') }}</h3>
                    <h5 class="form-sub-heading">{{ __('This give us detail of the person who brought the pet') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="client['reference']">Client ID</label>
                        <input class="block form-input @error('client.reference') is-invalid @enderror w-full max-w-xs" id="client['reference']" type="text" name="client[reference]" value="{{ $patient->client->reference }}" readonly />
                        @error('client.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['name']">Client Name</label>
                        <input class="block form-input @error('client.name') is-invalid @enderror w-full max-w-md" id="client['name']" type="text" name="client[name]" value="{{ $patient->client->name }}" readonly />
                        @error('client.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['address']">Client Address</label>
                        <input class="block form-input @error('client.address') is-invalid @enderror w-full max-w-md" id="client['address']" type="text" name="client[address]" value="{{ $patient->client->address }}" readonly />
                        @error('client.address')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['phone']">Client Phone</label>
                        <input class="block form-input @error('client.phone') is-invalid @enderror w-full max-w-xs" id="client['phone']" type="text" name="client[phone]" value="{{ $patient->client->phone }}" readonly />
                        @error('client.phone')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['email']">Client Email</label>
                        <input class="block form-input @error('client.email') is-invalid @enderror w-full max-w-sm" id="client['email']" type="text" name="client[email]" value="{{ $patient->client->email }}" readonly />
                        @error('client.email')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Patient Information') }}</h3>
                    <h5 class="form-sub-heading">{{ __('This give us detail of the pet which was brought') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="patient[reference]">Patient ID</label>
                        <input class="block form-input @error('patient.reference') is-invalid @enderror w-full max-w-xs" id="patient[reference]" type="text" name="patient[reference]" value="{{ $patient->reference }}" />
                        @error('patient.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[name]">Patient Name</label>
                        <input class="block form-input @error('patient.name') is-invalid @enderror w-full max-w-md" id="patient[name]" type="text" name="patient[name]" value="{{ $patient->name }}" />
                        @error('patient.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label block mb-2" for="patient[species]">Species</label>
                        <div class="grid grid-cols-2 gap-4 max-w-md text-gray-800">
                            <div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->species === 'dog') {{ 'checked' }} @endif name="patient[species]" value="dog" />
                                        <span class="ml-2">Dog</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->species === 'cat') {{ 'checked' }} @endif name="patient[species]" value="cat" />
                                        <span class="ml-2">Cat</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->species === 'none') {{ 'checked' }} @endif name="patient[species]" value="none" />
                                        <span class="ml-2">None</span>
                                    </label>
                                </div>
                                @error('patient.species')
                                    <x-error :message="$message" />
                                @enderror
                            </div>
                            <div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->type === 'spayed') {{ 'checked' }} @endif name="patient[type]" value="spayed" />
                                        <span class="ml-2">Spayed</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->type === 'neutered') {{ 'checked' }} @endif name="patient[type]" value="neutered" />
                                        <span class="ml-2">Neutered</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($patient->type === 'none') {{ 'checked' }} @endif name="patient[type]" value="none" />
                                        <span class="ml-2">None</span>
                                    </label>
                                </div> 
                                @error('patient.type')
                                    <x-error :message="$message" />
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label" for="patient[breed]">Breed</label>
                            <input class="block form-input @error('patient.breed') is-invalid @enderror w-full max-w-xs" id="patient[breed]" type="text" name="patient[breed]" value="{{ $patient->breed }}" />
                            @error('patient.breed')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[color]">Color</label>
                            <input class="block form-input @error('patient.color') is-invalid @enderror w-full max-w-xs" id="patient[color]" type="text" name="patient[color]" value="{{ $patient->color }}" />
                            @error('patient.color')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[markings]">Markings</label>
                            <input class="block form-input @error('patient.markings') is-invalid @enderror w-full max-w-xs" id="patient[markings]" type="text" name="patient[markings]" value="{{ $patient->markings }}" />
                            @error('patient.markings')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[microchip]">Microchip</label>
                            <input class="block form-input @error('patient.microchip') is-invalid @enderror w-full max-w-xs" id="patient[microchip]" type="text" name="patient[microchip]" value="{{ $patient->microchip }}" />
                            @error('patient.microchip')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[tattoo]">Tattoo</label>
                            <input class="block form-input @error('patient.tattoo') is-invalid @enderror w-full max-w-xs" id="patient[tattoo]" type="text" name="patient[tattoo]" value="{{ $patient->tattoo }}" />
                            @error('patient.tattoo')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[date_of_birth]">Date of Birth</label>
                            <input class="block form-input @error('patient.date_of_birth') is-invalid @enderror w-full max-w-xs" id="patient[date_of_birth]" type="date" name="patient[date_of_birth]" value="{{ $patient->date_of_birth }}" />
                            @error('patient.date_of_birth')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Medical History') }}</h3>
                    <h5 class="form-sub-heading">{{ __('This you insight into previous occurances') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="patient[medical_history][previous_veterinarian]">Previous Veterinarian / Clinic</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][previous_veterinarian]" type="text" name="patient[medical_history][previous_veterinarian]" value="{{ $patient->medical_history['previous_veterinarian'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][prior_illness]">Prior illness / surgeries</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][prior_illness]" type="text" name="patient[medical_history][prior_illness]" value="{{ $patient->medical_history['prior_illness'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][allergies]">Any Known allergies (drug)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][allergies]" type="text" name="patient[medical_history][allergies]" value="{{ $patient->medical_history['allergies'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][current_medications]">Current Medications</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][current_medications]" type="text" name="patient[medical_history][current_medications]" value="{{ $patient->medical_history['current_medications'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][vaccinations]">Vaccinations (Immunization)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][vaccinations]" type="text" name="patient[medical_history][vaccinations]" value="{{ $patient->medical_history['vaccinations'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history]['diet_restrictions']">Diet restrictions / Supplements</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][diet_restrictions]" type="text" name="patient[medical_history][diet_restrictions]" value="{{ $patient->medical_history['diet_restrictions'] ?? null }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex justify-end items-center space-x-4">
                <button class="btn btn-primary" name="action" value="save-and-edit">
                    Save & Continue Editing
                </button>
                <button type="submit" class="btn btn-primary" name="action" value="save">
                    Save
                </button>
            </div>
        </div>
    </form>
@endsection