@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" />
@endsection

@section('content')
    <form action="{{ route('record.update', $record->id) }}" method="POST">
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
                        <input class="block form-input @error('client.reference') is-invalid @enderror w-full max-w-xs" id="client['reference']" type="text" name="client[reference]" value="{{ $record->patient->client->reference }}" readonly />
                        @error('client.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['name']">Client Name</label>
                        <input class="block form-input @error('client.name') is-invalid @enderror w-full max-w-md" id="client['name']" type="text" name="client[name]" value="{{ $record->patient->client->name }}" readonly />
                        @error('client.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['address']">Client Address</label>
                        <input class="block form-input @error('client.address') is-invalid @enderror w-full max-w-md" id="client['address']" type="text" name="client[address]" value="{{ $record->patient->client->address }}" readonly />
                        @error('client.address')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['phone']">Client Phone</label>
                        <input class="block form-input @error('client.phone') is-invalid @enderror w-full max-w-xs" id="client['phone']" type="text" name="client[phone]" value="{{ $record->patient->client->phone }}" readonly autocomplete="tel-national" />
                        @error('client.phone')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['email']">Client Email</label>
                        <input class="block form-input @error('client.email') is-invalid @enderror w-full max-w-sm" id="client['email']" type="text" name="client[email]" value="{{ $record->patient->client->email }}" readonly />
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
                        <input class="block form-input @error('patient.reference') is-invalid @enderror w-full max-w-xs" id="patient[reference]" type="text" name="patient[reference]" value="{{ $record->patient->reference }}" readonly />
                        @error('patient.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[name]">Patient Name</label>
                        <input class="block form-input @error('patient.name') is-invalid @enderror w-full max-w-md" id="patient[name]" type="text" name="patient[name]" value="{{ $record->patient->name }}" readonly />
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
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 text-gray-700 cursor-pointer" @if($record->patient->species === 'dog') {{ 'checked' }} @endif name="patient[species]" value="dog" />
                                        <span class="ml-2">Dog</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 text-gray-700 cursor-pointer" @if($record->patient->species === 'cat') {{ 'checked' }} @endif name="patient[species]" value="cat" />
                                        <span class="ml-2">Cat</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 text-gray-700 cursor-pointer" @if($record->patient->species === 'none') {{ 'checked' }} @endif name="patient[species]" value="none" />
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
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 text-gray-700 cursor-pointer" @if($record->patient->type === 'spayed') {{ 'checked' }} @endif name="patient[type]" value="spayed" />
                                        <span class="ml-2">Spayed</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 text-gray-700 cursor-pointer" @if($record->patient->type === 'neutered') {{ 'checked' }} @endif name="patient[type]" value="neutered" />
                                        <span class="ml-2">Neutered</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input onclick="return false" type="radio" class="form-radio w-5 h-5 cursor-pointer" @if($record->patient->type === 'none') {{ 'checked' }} @endif name="patient[type]" value="none" />
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
                            <input class="block form-input @error('patient.breed') is-invalid @enderror w-full max-w-xs" id="patient[breed]" type="text" name="patient[breed]" value="{{ $record->patient->breed }}" readonly />
                            @error('patient.breed')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[color]">Color</label>
                            <input class="block form-input @error('patient.color') is-invalid @enderror w-full max-w-xs" id="patient[color]" type="text" name="patient[color]" value="{{ $record->patient->color }}" readonly />
                            @error('patient.color')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[markings]">Markings</label>
                            <input class="block form-input @error('patient.markings') is-invalid @enderror w-full max-w-xs" id="patient[markings]" type="text" name="patient[markings]" value="{{ $record->patient->markings }}" readonly />
                            @error('patient.markings')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[microchip]">Microchip</label>
                            <input class="block form-input @error('patient.microchip') is-invalid @enderror w-full max-w-xs" id="patient[microchip]" type="text" name="patient[microchip]" value="{{ $record->patient->microchip }}" readonly />
                            @error('patient.microchip')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[tattoo]">Tattoo</label>
                            <input class="block form-input @error('patient.tattoo') is-invalid @enderror w-full max-w-xs" id="patient[tattoo]" type="text" name="patient[tattoo]" value="{{ $record->patient->tattoo }}" readonly />
                            @error('patient.tattoo')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[date_of_birth]">Date of Birth</label>
                            <input class="block form-input @error('patient.date_of_birth') is-invalid @enderror w-full max-w-xs" id="patient[date_of_birth]" type="date" name="patient[date_of_birth]" value="{{ $record->patient->date_of_birth }}" readonly />
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
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][previous_veterinarian]" type="text" name="patient[medical_history][previous_veterinarian]" value="{{ $record->patient->medical_history['previous_veterinarian'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][prior_illness]">Prior illness / surgeries</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][prior_illness]" type="text" name="patient[medical_history][prior_illness]" value="{{ $record->patient->medical_history['prior_illness'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][allergies]">Any Known allergies (drug)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][allergies]" type="text" name="patient[medical_history][allergies]" value="{{ $record->patient->medical_history['allergies'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][current_medications]">Current Medications</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][current_medications]" type="text" name="patient[medical_history][current_medications]" value="{{ $record->patient->medical_history['current_medications'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][vaccinations]">Vaccinations (Immunization)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][vaccinations]" type="text" name="patient[medical_history][vaccinations]" value="{{ $record->patient->medical_history['vaccinations'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history]['diet_restrictions']">Diet restrictions / Supplements</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][diet_restrictions]" type="text" name="patient[medical_history][diet_restrictions]" value="{{ $record->patient->medical_history['diet_restrictions'] ?? null }}" readonly />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Presenting Complaint') }}</h3>
                    <h5 class="form-sub-heading">{{ __('Finding and examinations in details') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="physical_examination[notes]">Notes</label>
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="physical_examination[notes]" name="physical_examination[notes]">{{ $record->physical_examination['notes'] ?? null }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[frequency]">Frequency / Duration</label>
                        <textarea class="block form-input w-full max-w-xl" id="physical_examination[frequency]" name="physical_examination[frequency]">{{ $record->physical_examination['frequency'] ?? null }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[previous_treatment]">Previous Treatment for the problem</label>
                        <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination[previous_treatment]" name="physical_examination[previous_treatment]">{{ $record->physical_examination['previous_treatment'] ?? null }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[treatment_response]">Response to treatment</label>
                        <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination[treatment_response]" name="physical_examination[treatment_response]">{{ $record->physical_examination['treatment_response'] ?? null }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Subjective Findings - History') }}</h3>
                    <h5 class="form-sub-heading">{{ __('Bring out the findings as reported by Client') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-gray-800">
                        <div>
                            <span class="form-label">Appetite</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['appetite'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[appetite]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['appetite'] ?? null) === 'abnormal') {{ 'checked' }} @endif  name="subjective_findings[appetite]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Drinking</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['drinking'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[drinking]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['drinking'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[drinking]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Coughing</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['coughing'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[coughing]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['coughing'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[coughing]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Sneezing</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['sneezing'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[sneezing]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['sneezing'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[sneezing]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Behaviour</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['behaviour'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[behaviour]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['behaviour'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[behaviour]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Vomiting</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['vomiting'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[vomiting]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['vomiting'] ?? null)=== 'abnormal') {{ 'checked' }} @endif name="subjective_findings[vomiting]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Bowels</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['bowels'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[bowels]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['bowels'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[bowels]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Urination</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['urination'] ?? null) === 'normal') {{ 'checked' }} @endif name="subjective_findings[urination]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->subjective_findings['urination'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[urination]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
    
                    </div>
                    <div>
                        <label class="form-label" for="subjective_findings[notes]">Notes</label>
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="subjective_findings[notes]" name="subjective_findings[notes]">{{ $record->subjective_findings['notes'] ?? null }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Objective Findings - History') }}</h3>
                    <h5 class="form-sub-heading">{{ __('Bring out the findings as observed by Veterinarian') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label" for="objective_findings[temperature]">Temperature</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[temperature]" type="text" name="objective_findings[temperature]" value="{{ $record->objective_findings['temperature'] ?? null }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[heart_rate]">Heart Rate</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[heart_rate]" type="text" name="objective_findings[heart_rate]" value="{{ $record->objective_findings['heart_rate'] ?? null }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[respiratory_rate]">Respiratory Rate</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[respiratory_rate]" type="text" name="objective_findings[respiratory_rate]" value="{{ $record->objective_findings['respiratory_rate'] ?? null }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[capillary_refill_time]">Capillary Refill Time</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[capillary_refill_time]" type="text" name="objective_findings[capillary_refill_time]" value="{{ $record->objective_findings['capillary_refill_time'] ?? null }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[mucuos_membranes]">Mucuos Membranes</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[mucuos_membranes]" type="text" name="objective_findings[mucuos_membranes]" value="{{ $record->objective_findings['mucuos_membranes'] ?? null }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[weight]">Weight</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[weight]" type="text" name="objective_findings[weight]" value="{{ $record->objective_findings['weight'] ?? null }}" />
                        </div>
                    </div>
    
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-gray-800">
                        <div>
                            <span class="form-label">Eyes</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['eyes'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[eyes]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['eyes'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[eyes]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Ears</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['ears'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[ears]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['ears'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[ears]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Oral cavity</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['oral_cavity'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[oral_cavity]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['oral_cavity'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[oral_cavity]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Lymphatic</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['lymphatic'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[lymphatic]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['lymphatic'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[lymphatic]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Abdomen</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['abdomen'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[abdomen]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['abdomen'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[abdomen]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Heart</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['heart'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[heart]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['heart'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[heart]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Respiratory</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['respiratory'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[respiratory]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['respiratory'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[respiratory]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Musculoskeletal</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['musculoskeletal'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[musculoskeletal]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['musculoskeletal'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[musculoskeletal]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Urogenital</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['urogenital'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[urogenital]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['urogenital'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[urogenital]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Neurological</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['neurological'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[neurological]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['neurological'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[neurological]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
                        <div>
                            <span class="form-label">Body condition score</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['body_condition_score'] ?? null) === 'normal') {{ 'checked' }} @endif name="objective_findings[body_condition_score]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($record->objective_findings['body_condition_score'] ?? null) === 'abnormal') {{ 'checked' }} @endif name="objective_findings[body_condition_score]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
    
                    </div>
                    <div>
                        <label class="form-label" for="objective_findings[notes]">Notes</label>
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="objective_findings[notes]" name="objective_findings[notes]">{{ $record->objective_findings['notes'] ?? null }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Assesment, Rule Outs, DDX') }}</h3>
                    <h5 class="form-sub-heading">{{ __('What was discovered') }}</h5>
                </div>
                <div class="w-full lg:w-2/3">
                    <label label class="form-label" for="assesment">Assesment</label>
                    <textarea rows="20" class="block form-input w-full max-w-xl" id="assesment" name="assesment">{{ $record->assesment }}</textarea>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Plan and Treatment') }}</h3>
                    <h5 class="form-sub-heading">{{ __('What treatment was given out') }}</h5>
                </div>
                <div class="w-full lg:w-2/3">
                    <label label class="form-label" for="treatment">Treatment</label>
                    <textarea rows="20" class="block form-input w-full max-w-xl" id="treatment" name="treatment">{{ $record->treatment }}</textarea>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Recommendations / Instructions To Owner') }}</h3>
                    <h5 class="form-sub-heading">{{ __('What was recommended for the client') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label label class="form-label" for="recommendations">Recommendations</label>
                        <textarea rows="20" class="block form-input w-full max-w-xl" id="recommendations" name="recommendations">{{ $record->recommendations }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label" for="signature">Veterinarian Signature</label>
                            <input class="block form-input w-full max-w-xs" id="signature" type="text" name="signature" value="{{ $record->signature }}" />
                        </div>
                        <div>
                            <label class="form-label" for="date">Date</label>
                            <input class="block form-input w-full max-w-xs" id="date" type="date" name="date" value="{{ $record->date }}" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Immunization History') }}</h3>
                    <h5 class="form-sub-heading">{{ __('List out the history of all immunization') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <livewire:immunization :immunizations="$record->immunization_history" />
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