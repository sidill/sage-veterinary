@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" />
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
                <a href="{{ route('client.show', $record->patient->client->id) }}" class="btn btn-primary">
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
                {{ $record->patient->client->reference }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->client->name }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Address
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->client->address }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Phone
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->client->phone }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Email
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->client->email }}
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
                <a href="{{ route('patient.show', $record->patient->id) }}" class="btn btn-primary">
                    View Patient
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
                {{ $record->patient->reference }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->name }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Species
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->species }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Type
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->type }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Color
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->color }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Markings
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->markings }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Microchip
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->microchip }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Tattoo
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->tattoo }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date of Birth
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->patient->date_of_birth }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Medical History
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                @foreach($record->patient->medical_history as $historyName => $historyValue)
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

    <div class="bg-white shadow overflow-hidden rounded-lg">
        <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                      Record Information
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                      Details about the visit to the clinic.
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
                Physical Examination
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                    @foreach($record->physical_examination as $examName => $examValue)
                        <li class="@if(!$loop->first) border-t border-gray-200 @endif pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <div class="text-gray-500">{{ Str::of($examName)->replace('_', ' ')->title() }}</div>
                                    <div class="whitespace-pre-line">{{ $examValue }}</div>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>  
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Subjective Findings
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                    @foreach($record->subjective_findings as $subFindName => $subFindValue)
                        <li class="@if(!$loop->first) border-t border-gray-200 @endif pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <div class="text-gray-500">{{ Str::of($subFindName)->replace('_', ' ')->title() }}</div>
                                    <div class="whitespace-pre-line">{{ $subFindValue }}</div>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Objective Findings
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                    @foreach($record->objective_findings as $objFindName => $objFindValue)
                        <li class="@if(!$loop->first) border-t border-gray-200 @endif pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <div class="text-gray-500">{{ Str::of($objFindName)->replace('_', ' ')->title() }}</div>
                                    <div class="whitespace-pre-line">{{ $objFindValue }}</div>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Assesment
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->assesment }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Treatment
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->treatment }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Recommendations
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->recommendations }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Immunization History
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 rounded-md">
                    @php
                    $ends = array('th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th');
                    @endphp

                    @foreach($record->immunization_history as $index => $history)
                        <li class="@if(!$loop->first) border-t border-gray-200 @endif pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                            <div class="w-0 flex-1 flex">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                    <div class="text-gray-500">
                                      @if((($index + 1) % 100) >= 11 && (($index + 1) % 100) <= 13)
                                        {{ ($index + 1) . 'th' }}
                                      @else
                                        {{ ($index + 1) . $ends[($index + 1) % 10]}}
                                      @endif
                                    </div>
                                    <div class="whitespace-pre-line">Date: {{ $history['date'] }}, Type: {{ $history['type'] }}, Next Due: {{ $history['next_due'] }}</div>
                                </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Signature
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $record->signature }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm leading-5 font-medium text-gray-500">
                  Date
                </dt>
                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                  {{ $record->date }}
                </dd>
            </div>
          </dl>
        </div>
    </div>
</div>
  
@endsection