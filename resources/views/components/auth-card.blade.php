<div class="flex items-center justify-center">

    <div class="w-full max-w-sm bg-white shadow-md p-5 rounded-lg border-t-4 border-primary-500">
        <h3 class="text-lg text-center text-gray-700 py-3">{{ __($title) }}</h3>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>