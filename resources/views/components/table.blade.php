<div>
    <div class="flex items-center justify-between px-4 sm:px-6 py-5 bg-white rounded-t-lg shadow-xs">
        <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                {{ ucfirst($name) }} List
            </h3>
            <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                {{ $description ?? 'List of ' . Str::plural($name) }}
            </p>
        </div>
        <a href="{{ route($name .'.create', $parameters) }}" class="btn btn-primary">
            New {{ ucfirst($name) }}
        </a>
    </div>
    
    @if(!$items->isEmpty())
        <div class="overflow-x-auto lg:overflow-x-visible">
            <table class="w-full bg-white @if(!$items->hasPages()) rounded-b-lg @endif shadow">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 text-left uppercase text-xs tracking-wider">
                        <th class="px-6 py-3 font-medium">ID</th>
                        @if($name === 'client')
                        <th class="px-6 py-3 font-medium">Name</th>
                        <th class="px-6 py-3 font-medium">Contact</th>
                        @elseif($name === 'patient')
                        <th class="px-6 py-3 font-medium">Client</th>
                        <th class="px-6 py-3 font-medium">Name</th>
                        @elseif($name === 'record')
                        <th class="px-6 py-3 font-medium">Client</th>
                        <th class="px-6 py-3 font-medium">Patient</th>
                        @endif
                        <th class="px-6 py-3 font-medium">Created</th>
                        <th class="px-6 py-3 font-medium">Updated</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="text-gray-800 text-sm">
                    @foreach ($items as $item)
                    <tr>
                        <td class="px-6 py-3">{{ $item->id }}</td>
                        @if($name === 'client')
                        <td class="px-6 py-3">
                            <div>{{ $item->name }}</div>
                            <div class="text-gray-500">{{ $item->reference }}</div>
                        </td>
                        <td class="px-6 py-3">
                            <div>{{ $item->email }}</div>
                            <div class="text-gray-500">{{ $item->phone }}</div>
                        </td>
                        @elseif($name === 'patient')
                        <td class="px-6 py-3">
                            <div>{{ $item->client->name }}</div>
                            <div class="text-gray-500">{{ $item->client->reference }}</div>
                        </td>
                        <td class="px-6 py-3">
                            <div>{{ $item->name }}</div>
                            <div class="text-gray-500">{{ $item->reference }}</div>
                        </td>
                        @elseif($name === 'record')
                        <td class="px-6 py-3">
                            <div>{{ $item->patient->client->name }}</div>
                            <div class="text-gray-500">{{ $item->patient->client->reference }}</div>
                        </td>
                        <td class="px-6 py-3">
                            <div>{{ $item->patient->name }}</div>
                            <div class="text-gray-500">{{ $item->patient->reference }}</div>
                        </td>
                        @endif
                        <td class="px-6 py-3">{{ $item->created_at->format('D j M, Y') }}</td>
                        <td class="px-6 py-3">{{ $item->updated_at->diffForHumans() }}</td>
                        <td class="px-6 py-3">
                            @if($name === 'client')
                                @include('partials.menu_client', ['client' => $item])
                            @elseif($name === 'patient')
                                @include('partials.menu_patient', ['patient' => $item])
                            @elseif($name === 'record')
                                @include('partials.menu_record', ['record' => $item])
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
        @if($items->hasPages())
        <div class="bg-gray-100 py-5 px-4 sm:px-6 rounded-b-lg shadow">
            {{ $items->links() }}
        </div>
        @endif
        @else
    
        @endif
</div>
