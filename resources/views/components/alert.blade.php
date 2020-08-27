<div x-data="{ show: true }" x-show="show" {{ $attributes->merge(['class' => 'bg-blue-100 border-t-2 border-blue-500 rounded-b text-blue-800 px-4 py-3 shadow', 'role' => 'alert']) }}>
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <div class="py-1">
                <svg class="w-6 h-6 text-blue-700 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
        @if($dismissable)
        <div>
            <svg x-on:click="show = false" class="w-6 h-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        @endif
    </div>
</div>
