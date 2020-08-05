@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" label="New Record" :route="route('record.create')" />
@endsection

@section('content')
    @if(!$records->isEmpty())
    <div class="shadow rounded-lg w-full">
        <div class="flex bg-gray-100 text-gray-600 rounded-t-lg text-xs uppercase tracking-wider">
            <div class="w-1/12 px-6 py-3">ID</div>
            <div class="w-3/12 px-6 py-3">Client</div>
            <div class="w-3/12 px-6 py-3">Patient</div>
            <div class="w-2/12 px-6 py-3">Created</div>
            <div class="w-2/12 px-6 py-3">Updated</div>
            <div class="w-1/12 px-6 py-3"></div>
        </div>
        @foreach($records as $record)
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

                        <form id="delete-record-{{$record->id }}" action="{{ route('record.destroy', $record->id) }}" method="POST" class="hidden">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection