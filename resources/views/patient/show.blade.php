@extends('layouts.app')

@section('header')
    <x-sub-header title="Patients" label="All Patients" :route="route('patient.index')" />
@endsection

@section('content')
<div class="space-y-5">
    <div class="bg-white shadow overflow-hidden rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Client Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Personal details about the client.
                    </p>
                </div>
                <a href="{{ route('client.show', $patient->client->id) }}" class="btn btn-primary">
                    View Client
                </a>
            </div>
        </div>
        <div>
          <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                ID
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->client->reference }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->client->name }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Address
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->client->address }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Phone
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->client->phone }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Email
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->client->email }}
              </dd>
            </div>
          </dl>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Patient Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                        Details about the patient brought by the client.
                    </p>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-primary">
                    Go Back
                </a>
            </div>
        </div>
        <div>
          <dl>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                ID
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->reference }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->name }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Species
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->species }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Type
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->type }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Color
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->color }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Markings
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->markings }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Microchip
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->microchip }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Tattoo
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->tattoo }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date of Birth
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $patient->date_of_birth }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Medical History
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                @foreach($patient->medical_history as $historyName => $historyValue)
                    <li class="@if(!$loop->first) border-t border-gray-200 @endif pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                        <div class="w-0 flex-1 flex items-center">
                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                            <span class="ml-2 flex-1 w-0 truncate">
                                <span class="text-gray-500">{{ Str::of($historyName)->replace('_', ' ')->title() }}:</span> {{ $historyValue }}
                            </span>
                        </div>
                    </li>
                @endforeach
                </ul>
              </dd>
            </div>
          </dl>
        </div>
    </div>

    <x-table name="record" :items="$records" :parameters="['patient' => $patient->reference]" description="List of records for this patient" />
</div>
  
@endsection