@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" model="Record" :route="route('record.create')" />
@endsection

@section('content')
    <div class="bg-white rounded shadow p-5 space-y-8">
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Client Information') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('This give us detail of the person who brought the pet') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div>
                    <label class="text-gray-700 text-sm" for="client_name">Client Name</label>
                    <input class="block form-input w-full max-w-md" id="client_name" type="text" name="client_name" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="client_address">Client Address</label>
                    <input class="block form-input w-full max-w-md" id="client_address" type="text" name="client_address" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="client_phone">Client Phone</label>
                    <input class="block form-input w-full max-w-xs" id="client_phone" type="text" name="client_phone" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="client_email">Client Email</label>
                    <input class="block form-input w-full max-w-sm" id="client_email" type="text" name="client_email" />
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Patient Information') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('This give us detail of the pet which was brought') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div>
                    <label class="text-gray-700 text-sm" for="patient_name">Patient Name</label>
                    <input class="block form-input w-full max-w-md" id="patient_name" type="text" name="patient_name" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm block mb-2" for="patient_name">Species</label>
                    <div class="grid grid-cols-2 gap-4 max-w-md text-gray-800">
                        <div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="species" value="dog" />
                                    <span class="ml-2">Dog</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="species" value="cat" />
                                    <span class="ml-2">Cat</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="species" value="none" />
                                    <span class="ml-2">None</span>
                                </label>
                            </div>  
                        </div>
                        <div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="type" value="spayed" />
                                    <span class="ml-2">Spayed</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="type" value="neutered" />
                                    <span class="ml-2">Neutered</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="type" value="none" />
                                    <span class="ml-2">None</span>
                                </label>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 space-y-2">
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_breed">Breed</label>
                        <input class="block form-input w-full max-w-xs" id="patient_breed" type="text" name="patient_breed" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_color">Color</label>
                        <input class="block form-input w-full max-w-xs" id="patient_color" type="text" name="patient_color" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_markings">Markings</label>
                        <input class="block form-input w-full max-w-xs" id="patient_markings" type="text" name="patient_markings" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_microchip">Microchip</label>
                        <input class="block form-input w-full max-w-xs" id="patient_microchip" type="text" name="patient_microchip" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_tattoo">Tattoo</label>
                        <input class="block form-input w-full max-w-xs" id="patient_tattoo" type="text" name="patient_tattoo" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_date_of_birth">Markings</label>
                        <input class="block form-input w-full max-w-xs" id="patient_date_of_birth" type="text" name="patient_date_of_birth" />
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Medical History') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('This you insight into previous occurances') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['previous_veterinarian']">Previous Veterinarian / Clinic</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['previous_veterinarian']" type="text" name="medical_history['previous_veterinarian']" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['prior_illness']">Prior illness / surgeries</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['prior_illness']" type="text" name="medical_history['prior_illness']" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['allergies']">Any Known allergies (drug)</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['allergies']" type="text" name="medical_history['allergies']" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['current_medications']">Current Medications</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['current_medications']" type="text" name="medical_history['current_medications']" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['vaccinations']">Vaccinations (Immunization)</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['vaccinations']" type="text" name="medical_history['vaccinations']" />
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="medical_history['diet_restrictions']">Diet restrictions / Supplements</label>
                    <input class="block form-input w-full max-w-md" id="medical_history['diet_restrictions']" type="text" name="medical_history['diet_restrictions']" />
                </div>
                <div class="grid grid-cols-2 gap-4 space-y-2">
                    <div>
                        <label class="text-gray-700 text-sm" for="medical_history['signature']">Veterinarian Signature</label>
                        <input class="block form-input w-full max-w-xs" id="medical_history['signature']" type="text" name="medical_history['signature']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="medical_history['date']">Date</label>
                        <input class="block form-input w-full max-w-xs" id="medical_history['date']" type="text" name="medical_history['date']" />
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Companion Animal Physical Examination Record Form') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('Various forms for physical examination') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div class="grid grid-cols-2 gap-4 space-y-2">
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_breed">Client ID</label>
                        <input class="block form-input w-full max-w-xs" id="patient_breed" type="text" name="patient_breed" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_color">Animal ID</label>
                        <input class="block form-input w-full max-w-xs" id="patient_color" type="text" name="patient_color" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_markings">Date</label>
                        <input class="block form-input w-full max-w-xs" id="patient_markings" type="text" name="patient_markings" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="patient_microchip">Time</label>
                        <input class="block form-input w-full max-w-xs" id="patient_microchip" type="text" name="patient_microchip" />
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Presenting Complaint') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('Finding and examinations in details') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div>
                    <label class="text-gray-700 text-sm" for="physical_examination['notes']">Notes</label>
                    <textarea rows="10" class="block form-input w-full max-w-xl" id="physical_examination['notes']" name="physical_examination['notes']"></textarea>
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="physical_examination['frequency']">Frequency / Duration</label>
                    <textarea class="block form-input w-full max-w-xl" id="physical_examination['frequency']" name="physical_examination['frequency']"></textarea>
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="physical_examination['previous_treatment']">Previous Treatment for the problem</label>
                    <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination['previous_treatment']" name="physical_examination['previous_treatment']"></textarea>
                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="physical_examination['treatment_response']">Response to treatment</label>
                    <textarea rows="5" class="block form-input w-full max-w-xl" id="physical_examination['treatment_response']" name="physical_examination['treatment_response']"></textarea>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Subjective Findings - History') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('Bring out the findings as reported by Client') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div class="grid grid-cols-4 gap-4 space-y-2 text-gray-800">
                    <div>
                        <span class="text-gray-700 text-sm">Appetite</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['appetite']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['appetite']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Drinking</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['drinking']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['drinking']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Coughing</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['coughing']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['coughing']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Sneezing</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['sneezing']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['sneezing']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Behaviour</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['behaviour']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['behaviour']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Vomiting</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['vomiting']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['vomiting']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Bowels</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['bowels']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['bowels']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Urination</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['urination']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="subjective_findings['urination']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>

                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="subjective_findings['notes']">Notes</label>
                    <textarea rows="10" class="block form-input w-full max-w-xl" id="subjective_findings['notes']" name="subjective_findings['notes']"></textarea>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Objective Findings - History') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('Bring out the findings as observed by Veterinarian') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div class="grid grid-cols-2 gap-4 space-y-2">
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['temperature']">Temperature</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['temperature']" type="text" name="objective_findings['temperature']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['heart_rate']">Heart Rate</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['heart_rate']" type="text" name="objective_findings['heart_rate']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['respiratory_rate']">Respiratory Rate</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['respiratory_rate']" type="text" name="objective_findings['respiratory_rate']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['capillary_refill_time']">Capillary Refill Time</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['capillary_refill_time']" type="text" name="objective_findings['capillary_refill_time']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['mucuos_membranes']">Mucuos Membranes</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['mucuos_membranes']" type="text" name="objective_findings['mucuos_membranes']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="objective_findings['weight']">Weight</label>
                        <input class="block form-input w-full max-w-xs" id="objective_findings['weight']" type="text" name="objective_findings['weight']" />
                    </div>
                </div>

                <div class="grid grid-cols-4 gap-4 space-y-2 text-gray-800">
                    <div>
                        <span class="text-gray-700 text-sm">Eyes</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['eyes']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['eyes']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Ears</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['ears']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['ears']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Oral cavity</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['oral_cavity']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['oral_cavity']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Lymphatic</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['lymphatic']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['lymphatic']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Abdomen</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['abdomen']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['abdomen']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Heart</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['heart']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['heart']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Respiratory</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['respiratory']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['respiratory']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Musculoskeletal</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['musculoskeletal']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['musculoskeletal']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Urogenital</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['urogenital']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['urogenital']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Neurological</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['neurological']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['neurological']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-700 text-sm">Body condition score</span>
                        <div class="mt-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['body_condition_score']" value="normal" />
                                    <span class="ml-2">Normal</span>
                                </label>
                            </div>  
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" class="form-radio w-5 h-5 cursor-pointer" name="objective_findings['body_condition_score']" value="abnormal" />
                                    <span class="ml-2">Abnormal</span>
                                </label>
                            </div> 
                        </div>
                    </div>

                </div>
                <div>
                    <label class="text-gray-700 text-sm" for="objective_findings['notes']">Notes</label>
                    <textarea rows="10" class="block form-input w-full max-w-xl" id="objective_findings['notes']" name="objective_findings['notes']"></textarea>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Assesment, Rule Outs, DDX') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('What was discovered') }}</h5>
            </div>
            <div class="w-2/3">
                <label label class="text-gray-700 text-sm" for="assesment">Assesment</label>
                <textarea rows="20" class="block form-input w-full max-w-xl" id="assesment" name="assesment"></textarea>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Plan and Treatment') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('What treatment was given out') }}</h5>
            </div>
            <div class="w-2/3">
                <label label class="text-gray-700 text-sm" for="treatment">Treatment</label>
                <textarea rows="20" class="block form-input w-full max-w-xl" id="treatment" name="treatment"></textarea>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Recommendations / Instructions To Owner') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('What was recommended for the client') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div>
                    <label label class="text-gray-700 text-sm" for="recommendations['body']">Recommendations</label>
                    <textarea rows="20" class="block form-input w-full max-w-xl" id="recommendations['body']" name="recommendations['body']"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4 space-y-2">
                    <div>
                        <label class="text-gray-700 text-sm" for="recommendations['signature']">Veterinarian Signature</label>
                        <input class="block form-input w-full max-w-xs" id="recommendations['signature']" type="text" name="recommendations['signature']" />
                    </div>
                    <div>
                        <label class="text-gray-700 text-sm" for="recommendations['date']">Date</label>
                        <input class="block form-input w-full max-w-xs" id="recommendations['date']" type="text" name="recommendations['date']" />
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex">
            <div class="w-1/3">
                <h3 class="text-gray-600 text-lg">{{ __('Immunization History') }}</h3>
                <h5 class="text-gray-500 text-xs">{{ __('List out the history of all immunization') }}</h5>
            </div>
            <div class="w-2/3 space-y-2">
                <div class="flex items-center space-x-4">
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <input class="block form-input w-full max-w-xs" id="immunization_history[]['date']" type="text" name="immunization_history" placeholder="Date" />
                        </div>
                        <div>
                            <input class="block form-input w-full max-w-xs" id="immunization_history[]['type']" type="text" name="immunization_history" placeholder="Type" />
                        </div>
                        <div>
                            <input class="block form-input w-full max-w-xs" id="immunization_history[]['next_due']" type="text" name="immunization_history" placeholder="Next Due" />
                        </div>
                    </div>

                    <button class="focus:outline-none focus:shadow-outline rounded-full" title="Add another">
                        <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex justify-end items-center space-x-4">
            <button class="bg-primary-500 hover:bg-primary-600 transition ease-in-out text-white font-semibold py-2 px-5 rounded">
                Save & Continue Editing
            </button>
            <button class="bg-primary-500 hover:bg-primary-600 transition ease-in-out text-white font-semibold py-2 px-5 rounded">
                Save
            </button>
        </div>
    </div>
@endsection