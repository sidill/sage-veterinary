<div class="flex items-center justify-center mt-10">
    <div class="w-full max-w-sm bg-white shadow-md p-5 rounded border-t-4 border-primary-700">
        <h3 class="text-lg text-center text-gray-700 py-3">{{ __($title) }}</h3>
        <div>
            {{ $slot }}
        </div>
    </div>
</div>