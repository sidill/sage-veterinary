@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" />
@endsection

@section('content')
    <form action="{{ route('record.store') }}" method="POST">
        @csrf
        <div class="bg-white rounded shadow p-5 space-y-8">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Client Information') }}</h3>
                    <h5 class="form-sub-heading">{{ __('This give us detail of the person who brought the pet') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="client['reference']">Client ID</label>
                        <input class="block form-input @error('client.reference') is-invalid @enderror w-full max-w-xs" id="client['reference']" type="text" name="client[reference]" value="{{ $patient->client->reference ?? $client->reference ?? old('client.reference') }}" />
                        @error('client.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['name']">Client Name</label>
                        <input class="block form-input @error('client.name') is-invalid @enderror w-full max-w-md" id="client['name']" type="text" name="client[name]" value="{{ $patient->client->name ?? $client->name ?? old('client.name') }}" />
                        @error('client.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['address']">Client Address</label>
                        <input class="block form-input @error('client.address') is-invalid @enderror w-full max-w-md" id="client['address']" type="text" name="client[address]" value="{{ $patient->client->address ?? $client->address ?? old('client.address') }}" />
                        @error('client.address')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['phone']">Client Phone</label>
                        <input class="block form-input @error('client.phone') is-invalid @enderror w-full max-w-xs" id="client['phone']" type="text" name="client[phone]" value="{{ $patient->client->phone ?? $client->phone ?? old('client.phone') }}" autocomplete="tel-national" />
                        @error('client.phone')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['email']">Client Email</label>
                        <input class="block form-input @error('client.email') is-invalid @enderror w-full max-w-sm" id="client['email']" type="text" name="client[email]" value="{{ $patient->client->email ?? $client->email ?? old('client.email') }}" />
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
                        <input class="block form-input @error('patient.reference') is-invalid @enderror w-full max-w-xs" id="patient[reference]" type="text" name="patient[reference]" value="{{ $patient->reference ?? old('patient.reference') }}" />
                        @error('patient.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[name]">Patient Name</label>
                        <input class="block form-input @error('patient.name') is-invalid @enderror w-full max-w-md" id="patient[name]" type="text" name="patient[name]" value="{{ $patient->name ?? old('patient.name') }}" />
                        @error('patient.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label block mb-2" for="patient[species]">Species</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-md text-gray-800">
                            <div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->species ?? old('patient.species')) === 'dog') {{ 'checked' }} @endif name="patient[species]" value="dog" />
                                        <span class="ml-2">Dog</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->species ?? old('patient.species')) === 'cat') {{ 'checked' }} @endif name="patient[species]" value="cat" />
                                        <span class="ml-2">Cat</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->species ?? old('patient.species')) === 'none') {{ 'checked' }} @endif name="patient[species]" value="none" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->type ?? old('patient.type')) === 'spayed') {{ 'checked' }} @endif name="patient[type]" value="spayed" />
                                        <span class="ml-2">Spayed</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->type ?? old('patient.type')) === 'neutered') {{ 'checked' }} @endif name="patient[type]" value="neutered" />
                                        <span class="ml-2">Neutered</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(($patient->type ?? old('patient.type')) === 'none') {{ 'checked' }} @endif name="patient[type]" value="none" />
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
                            <input class="block form-input @error('patient.breed') is-invalid @enderror w-full max-w-xs" id="patient[breed]" type="text" name="patient[breed]" value="{{ $patient->breed ?? old('patient.breed') }}" />
                            @error('patient.breed')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[color]">Color</label>
                            <input class="block form-input @error('patient.color') is-invalid @enderror w-full max-w-xs" id="patient[color]" type="text" name="patient[color]" value="{{ $patient->color ?? old('patient.color') }}" />
                            @error('patient.color')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[markings]">Markings</label>
                            <input class="block form-input @error('patient.markings') is-invalid @enderror w-full max-w-xs" id="patient[markings]" type="text" name="patient[markings]" value="{{ $patient->markings ?? old('patient.markings') }}" />
                            @error('patient.markings')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[microchip]">Microchip</label>
                            <input class="block form-input @error('patient.microchip') is-invalid @enderror w-full max-w-xs" id="patient[microchip]" type="text" name="patient[microchip]" value="{{ $patient->microchip ?? old('patient.microchip') }}" />
                            @error('patient.microchip')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[tattoo]">Tattoo</label>
                            <input class="block form-input @error('patient.tattoo') is-invalid @enderror w-full max-w-xs" id="patient[tattoo]" type="text" name="patient[tattoo]" value="{{ $patient->tattoo ?? old('patient.tattoo') }}" />
                            @error('patient.tattoo')
                                <x-error :message="$message" />
                            @enderror
                        </div>
                        <div>
                            <label class="form-label" for="patient[date_of_birth]">Date of Birth</label>
                            <input class="block form-input @error('patient.date_of_birth') is-invalid @enderror w-full max-w-xs" id="patient[date_of_birth]" type="date" name="patient[date_of_birth]" value="{{ $patient->date_of_birth ?? old('patient.date_of_birth') }}" />
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
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][previous_veterinarian]" type="text" name="patient[medical_history][previous_veterinarian]" value="{{ $patient->medical_history['previous_veterinarian'] ?? old('patient.medical_history.previous_veterinarian') }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][prior_illness]">Prior illness / surgeries</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][prior_illness]" type="text" name="patient[medical_history][prior_illness]" value="{{ $patient->medical_history['prior_illness'] ?? old('patient.medical_history.prior_illness') }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][allergies]">Any Known allergies (drug)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][allergies]" type="text" name="patient[medical_history][allergies]" value="{{ $patient->medical_history['allergies'] ?? old('patient.medical_history.allergies') }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][current_medications]">Current Medications</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][current_medications]" type="text" name="patient[medical_history][current_medications]" value="{{ $patient->medical_history['current_medications'] ?? old('patient.medical_history.current_medications') }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history][vaccinations]">Vaccinations (Immunization)</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][vaccinations]" type="text" name="patient[medical_history][vaccinations]" value="{{ $patient->medical_history['vaccinations'] ?? old('patient.medical_history.vaccinations') }}" />
                        @error('patient.date_of_birth')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="patient[medical_history]['diet_restrictions']">Diet restrictions / Supplements</label>
                        <input class="block form-input w-full max-w-md" id="patient[medical_history][diet_restrictions]" type="text" name="patient[medical_history][diet_restrictions]" value="{{ $patient->medical_history['diet_restrictions'] ?? old('patient.medical_history.diet_restrictions') }}" />
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
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="physical_examination[notes]" name="physical_examination[notes]">{{ old('physical_examination.notes') }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[frequency]">Frequency / Duration</label>
                        <textarea class="block form-input w-full max-w-xl" id="physical_examination[frequency]" name="physical_examination[frequency]">{{ old('physical_examination.frequency') }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[previous_treatment]">Previous Treatment for the problem</label>
                        <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination[previous_treatment]" name="physical_examination[previous_treatment]">{{ old('physical_examination.previous_treatment') }}</textarea>
                    </div>
                    <div>
                        <label class="form-label" for="physical_examination[treatment_response]">Response to treatment</label>
                        <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination[treatment_response]" name="physical_examination[treatment_response]">{{ old('physical_examination.treatment_response') }}</textarea>
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.appetite') === 'normal') {{ 'checked' }} @endif name="subjective_findings[appetite]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.appetite') === 'abnormal') {{ 'checked' }} @endif  name="subjective_findings[appetite]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.drinking') === 'normal') {{ 'checked' }} @endif name="subjective_findings[drinking]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.drinking') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[drinking]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.coughing') === 'normal') {{ 'checked' }} @endif name="subjective_findings[coughing]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.coughing') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[coughing]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.sneezing') === 'normal') {{ 'checked' }} @endif name="subjective_findings[sneezing]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.sneezing') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[sneezing]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.behaviour') === 'normal') {{ 'checked' }} @endif name="subjective_findings[behaviour]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.behaviour') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[behaviour]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.vomiting') === 'normal') {{ 'checked' }} @endif name="subjective_findings[vomiting]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.vomiting') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[vomiting]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.bowels') === 'normal') {{ 'checked' }} @endif name="subjective_findings[bowels]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.bowels') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[bowels]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.urination') === 'normal') {{ 'checked' }} @endif name="subjective_findings[urination]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('subjective_findings.urination') === 'abnormal') {{ 'checked' }} @endif name="subjective_findings[urination]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
    
                    </div>
                    <div>
                        <label class="form-label" for="subjective_findings[notes]">Notes</label>
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="subjective_findings[notes]" name="subjective_findings[notes]">{{ old('subjective_findings.notes') }}</textarea>
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
                            <input class="block form-input w-full max-w-xs" id="objective_findings[temperature]" type="text" name="objective_findings[temperature]" value="{{ old('objective_findings.temperature') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[heart_rate]">Heart Rate</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[heart_rate]" type="text" name="objective_findings[heart_rate]" value="{{ old('objective_findings.heart_rate') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[respiratory_rate]">Respiratory Rate</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[respiratory_rate]" type="text" name="objective_findings[respiratory_rate]" value="{{ old('objective_findings.respiratory_rate') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[capillary_refill_time]">Capillary Refill Time</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[capillary_refill_time]" type="text" name="objective_findings[capillary_refill_time]" value="{{ old('objective_findings.capillary_refill_time') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[mucuos_membranes]">Mucuos Membranes</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[mucuos_membranes]" type="text" name="objective_findings[mucuos_membranes]" value="{{ old('objective_findings.mucuos_membranes') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="objective_findings[weight]">Weight</label>
                            <input class="block form-input w-full max-w-xs" id="objective_findings[weight]" type="text" name="objective_findings[weight]" value="{{ old('objective_findings.weight') }}" />
                        </div>
                    </div>
    
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 text-gray-800">
                        <div>
                            <span class="form-label">Eyes</span>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.eyes') === 'normal') {{ 'checked' }} @endif name="objective_findings[eyes]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.eyes') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[eyes]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.ears') === 'normal') {{ 'checked' }} @endif name="objective_findings[ears]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.ears') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[ears]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.oral_cavity') === 'normal') {{ 'checked' }} @endif name="objective_findings[oral_cavity]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.oral_cavity') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[oral_cavity]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.lymphatic') === 'normal') {{ 'checked' }} @endif name="objective_findings[lymphatic]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.lymphatic') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[lymphatic]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.abdomen') === 'normal') {{ 'checked' }} @endif name="objective_findings[abdomen]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.abdomen') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[abdomen]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.heart') === 'normal') {{ 'checked' }} @endif name="objective_findings[heart]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.heart') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[heart]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.respiratory') === 'normal') {{ 'checked' }} @endif name="objective_findings[respiratory]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.respiratory') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[respiratory]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.musculoskeletal') === 'normal') {{ 'checked' }} @endif name="objective_findings[musculoskeletal]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.musculoskeletal') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[musculoskeletal]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.urogenital') === 'normal') {{ 'checked' }} @endif name="objective_findings[urogenital]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.urogenital') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[urogenital]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.neurological') === 'normal') {{ 'checked' }} @endif name="objective_findings[neurological]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.neurological') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[neurological]" value="abnormal" />
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
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.body_condition_score') === 'normal') {{ 'checked' }} @endif name="objective_findings[body_condition_score]" value="normal" />
                                        <span class="ml-2">Normal</span>
                                    </label>
                                </div>  
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio w-5 h-5 cursor-pointer" @if(old('objective_findings.body_condition_score') === 'abnormal') {{ 'checked' }} @endif name="objective_findings[body_condition_score]" value="abnormal" />
                                        <span class="ml-2">Abnormal</span>
                                    </label>
                                </div> 
                            </div>
                        </div>
    
                    </div>
                    <div>
                        <label class="form-label" for="objective_findings[notes]">Notes</label>
                        <textarea rows="10" class="block form-input w-full max-w-xl" id="objective_findings[notes]" name="objective_findings[notes]">{{ old('objective_findings.notes') }}</textarea>
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
                    <textarea rows="20" class="block form-input w-full max-w-xl" id="assesment" name="assesment">{{ old('assesment') }}</textarea>
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
                    <textarea rows="20" class="block form-input w-full max-w-xl" id="treatment" name="treatment">{{ old('treatment') }}</textarea>
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
                        <textarea rows="20" class="block form-input w-full max-w-xl" id="recommendations" name="recommendations">{{ old('recommendations') }}</textarea>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <label class="form-label" for="signature">Veterinarian Signature</label>
                            <input class="block form-input w-full max-w-xs" id="signature" type="text" name="signature" value="{{ old('signature') }}" />
                        </div>
                        <div>
                            <label class="form-label" for="date">Date</label>
                            <input class="block form-input w-full max-w-xs" id="date" type="date" name="date" value="{{ old('date') }}" />
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
                <div class="w-full lg:w-2/3 space-y-2" id="immunization">
                    <livewire:immunization :immunizations="old('immunization_history')" />
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