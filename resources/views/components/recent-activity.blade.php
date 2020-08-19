<div class="bg-white rounded-lg">
    <div class="text-gray-600 font-semibold text-lg px-4 py-3">
        Recent Activity
    </div>
    @foreach ($activities as $activity)
        <div class="flex py-5 px-4 space-x-4 border-t border-gray-300">
            <div>
                @if($activity->description === 'created')
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-blue-500 w-6 h-6 bg-blue-100 rounded-full p-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                @elseif($activity->description === 'updated')
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-orange-500 w-6 h-6 bg-orange-100 rounded-full p-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                @elseif($activity->description === 'deleted')
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-red-500 w-6 h-6 bg-red-100 rounded-full p-1"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                @endif
            </div>
            <div>
                <div class="text-gray-700 text-sm">
                    <span class="font-medium">{{ $activity->causer->name }}</span>
                    {{ $activity->description }}
                    <span class="font-medium">{{ $activity->subject->description }}</span>
                </div>
                <div class="flex items-center space-x-1">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-500 w-3 h-3"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div class="text-gray-500 text-xs">{{ $activity->created_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>