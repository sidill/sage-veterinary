@extends('layouts.app')

@section('header')
    <x-sub-header title="Clients" label="All Clients" :route="route('client.index')" />
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
                {{ $client->reference }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Name
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $client->name }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Address
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $client->address }}
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Phone
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $client->phone }}
              </dd>
            </div>
            <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Email
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $client->email }}
              </dd>
            </div>
          </dl>
        </div>
    </div>

    <div class="flex items-center justify-between px-4 pt-5">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Patient List
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                List of patients for client.
            </p>
        </div>
        <a href="{{ route('patient.create', ['client' => $client->reference]) }}" class="btn btn-primary">
            New Patient
        </a>
    </div>

    @if($client->patients->count())
    <div class="shadow rounded-lg w-full">
        <div class="flex bg-gray-100 text-gray-600 rounded-t-lg text-xs uppercase tracking-wider">
            <div class="w-1/12 px-6 py-3">ID</div>
            <div class="w-3/12 px-6 py-3">Client</div>
            <div class="w-3/12 px-6 py-3">Name</div>
            <div class="w-2/12 px-6 py-3">Created</div>
            <div class="w-2/12 px-6 py-3">Updated</div>
            <div class="w-1/12 px-6 py-3"></div>
        </div>
        @foreach($patients = $client->patients()->paginate() as $patient)
        <div class="flex items-center bg-white text-gray-800 @if($loop->last) rounded-b-lg @endif text-sm">
            <div class="w-1/12 px-6 py-3">{{ $patient->id }}</div>
            <div class="w-3/12 px-6 py-3">
                <div>{{ $patient->client->name }}</div>
                <div class="text-gray-500">{{ $patient->client->reference }}</div>
            </div>
            <div class="w-3/12 px-6 py-3">
                <div>{{ $patient->name }}</div>
                <div class="text-gray-500">{{ $patient->reference }}</div>
            </div>
            <div class="w-2/12 px-6 py-3">{{ $patient->created_at->format('D j M, Y') }}</div>
            <div class="w-2/12 px-6 py-3">{{ $patient->updated_at->diffForHumans() }}</div>
            <div class="w-1/12 px-6 py-3">
                <div x-data="{ show: false }" class="relative float-right clearfix">
                    <svg x-on:click="show = true" class="text-gray-800 w-5 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    
                    <div x-on:click.away="show = false" x-show="show" class="absolute z-10 right-0 top-auto bg-white shadow rounded-lg text-gray-700">
                        <a href="{{ route('record.create', ['patient' => $patient->reference]) }}" class="flex items-center space-x-2 px-4 py-1 rounded-t-lg hover:bg-gray-100">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            <div>Record</div>
                        </a>
                        <a href="{{ route('patient.show', $patient->id) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <div>View</div>
                        </a>
                        <a href="{{ route('patient.edit', $patient->id) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            <div>Edit</div>
                        </a>
                        <a href="{{ route('patient.destroy', $patient->id) }}" class="flex items-center space-x-2 px-4 py-1 rounded-b-lg hover:bg-gray-100"
                            onclick="event.preventDefault();
                            if (confirm('Do you want to delete patient with ID, {{ $patient->id }}')) {
                                document.getElementById('delete-patient-{{$patient->id }}').submit();
                            }
                            ">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            <div>Delete</div>
                        </a>

                        <form id="delete-patient-{{$patient->id }}" action="{{ route('patient.destroy', $patient->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-5">
        {{ $patients->links() }}
    </div>
    @else

    @endif

    <div class="flex items-center justify-between px-4 pt-5">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Record List
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                List of records for Patients that belongs to client.
            </p>
        </div>
        <a href="{{ route('record.create', ['client' => $client->reference]) }}" class="btn btn-primary">
            New Record
        </a>
    </div>

    @if($client->records->count())
    <div class="shadow rounded-lg w-full">
        <div class="flex bg-gray-100 text-gray-600 rounded-t-lg text-xs uppercase tracking-wider">
            <div class="w-1/12 px-6 py-3">ID</div>
            <div class="w-3/12 px-6 py-3">Client</div>
            <div class="w-3/12 px-6 py-3">Patient</div>
            <div class="w-2/12 px-6 py-3">Created</div>
            <div class="w-2/12 px-6 py-3">Updated</div>
            <div class="w-1/12 px-6 py-3"></div>
        </div>
        @foreach($records = $client->records()->paginate() as $record)
        <div class="flex items-center bg-white text-gray-800 @if($loop->last) rounded-b-lg @endif text-sm">
            <div class="w-1/12 px-6 py-3">{{ $record->id }}</div>
            <div class="w-3/12 px-6 py-3">
                <div>{{ $record->patient->client->name }}</div>
                <div class="text-gray-500">{{ $record->patient->client->reference }}</div>
            </div>
            <div class="w-3/12 px-6 py-3">
                <div>{{ $record->patient->name }}</div>
                <div class="text-gray-500">{{ $record->patient->reference }}</div>
            </div>
            <div class="w-2/12 px-6 py-3">{{ $record->created_at->format('D j M, Y') }}</div>
            <div class="w-2/12 px-6 py-3">{{ $record->updated_at->diffForHumans() }}</div>
            <div class="w-1/12 px-6 py-3">
                <div x-data="{ show: false }" class="relative float-right clearfix">
                    <svg x-on:click="show = true" class="text-gray-800 w-5 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                    
                    <div x-on:click.away="show = false" x-show="show" class="absolute z-10 right-0 top-auto bg-white shadow rounded-lg text-gray-700">
                        <a href="{{ route('record.show', $record->id) }}" class="flex items-center space-x-2 px-4 py-1 rounded-t-lg hover:bg-gray-100">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            <div>View</div>
                        </a>
                        <a href="{{ route('record.edit', $record->id) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            <div>Edit</div>
                        </a>
                        <a href="{{ route('record.destroy', $record->id) }}" class="flex items-center space-x-2 px-4 py-1 rounded-b-lg hover:bg-gray-100"
                            onclick="event.preventDefault();
                            if (confirm('Do you want to delete record with ID, {{ $record->id }}')) {
                                document.getElementById('delete-record-{{$record->id }}').submit();
                            }
                            ">
                            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            <div>Delete</div>
                        </a>

                        <form id="delete-record-{{ $record->id }}" action="{{ route('record.destroy', $record->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-5">
        {{ $records->links() }}
    </div>
    @else

    @endif
</div>
  
@endsection