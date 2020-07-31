<div class="bg-white border-t border-gray-300">
    <div class="container px-6 mx-auto flex items-center justify-between">
        <h3 class="text-gray-700 font-light py-4">{{ __($title) }}</h3>
        @if($route)
        <a href="{{ $route }}" class="bg-primary-800 hover:bg-primary-700 transition ease-in-out text-white font-semibold py-2 px-5 rounded flex items-center">
            <span>{{ __($label) }}</span>
        </a>
        @endif
    </div>
</div>