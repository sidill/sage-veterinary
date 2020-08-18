<div x-data="{ show: false }" class="relative float-right clearfix">
    <svg x-on:click="show = true" class="text-gray-800 w-5 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
    
    <div x-on:click.away="show = false" x-show="show" class="absolute z-10 right-0 top-auto bg-white shadow rounded-lg text-gray-700">
        <a href="{{ route('patient.create', ['client' => $client->reference]) }}" class="flex items-center space-x-2 px-4 py-1 rounded-t-lg hover:bg-gray-100">
            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
            <div>Patient</div>
        </a>
        <a href="{{ route('record.create', ['client' => $client->reference]) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <div>Record</div>
        </a>
        <a href="{{ route('client.show', $client->id) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            <div>View</div>
        </a>
        <a href="{{ route('client.edit', $client->id) }}" class="flex items-center space-x-2 px-4 py-1 hover:bg-gray-100">
            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            <div>Edit</div>
        </a>
        <a href="{{ route('client.destroy', $client->id) }}" class="flex items-center space-x-2 px-4 py-1 rounded-b-lg hover:bg-gray-100"
            onclick="event.preventDefault();
            if (confirm('Do you want to delete client with ID, {{ $client->id }}')) {
                document.getElementById('delete-client-{{$client->id }}').submit();
            }
            ">
            <svg class="inline-block w-4 h-4" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            <div>Delete</div>
        </a>

        <form id="delete-client-{{$client->id }}" action="{{ route('client.destroy', $client->id) }}" method="POST" class="hidden">
            @csrf
            @method('delete')
        </form>
    </div>
</div>