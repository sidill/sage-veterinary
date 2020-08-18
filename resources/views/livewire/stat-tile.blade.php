<div class="bg-white shadow rounded-lg px-5 py-4">
    <div class="flex items-center justify-between">
        <div>
            <div class="text-gray-600 font-semibold">Month to Date</div>
            <div class="text-3xl text-gray-800">{{ $current }}</div>
        </div>
        <div class="text-right">
            <div class="text-gray-600 font-semibold">Total {{ ucfirst(Str::plural($name))}}</div>
            <div class="text-3xl text-gray-800">{{ $all }}</div>
        </div>
    </div>

    <div class="flex items-center justify-between border-t border-gray-300 pt-3">
        <div>
            @if($current === $previous)
                <span class="text-sm text-gray-700">No Change</span>
            @elseif($current > $previous)
            <div class="flex items-center space-x-2">
                <svg class="w-5 h-5 inline-block text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                <span class="text-sm text-gray-700">{{ $previous }} Last Month</span>
            </div>
            @else
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 inline-block text-red-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>
                    <span class="text-sm text-gray-700">{{ $previous }} Last Month</span>
                </div>
            @endif
        </div>
        <div>
            <a href="{{ route($name . '.index') }}" class="flex items-center space-x-2 bg-gray-100 hover:bg-gray-200 py-1 px-2 rounded-full">
                <span class="text-xs font-medium text-gray-700">More</span>
                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-gray-600 w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</div>
