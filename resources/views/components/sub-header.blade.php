<div class="bg-white border-t border-gray-300">
    <div class="container px-6 mx-auto flex items-center justify-between">
        <h3 class="text-gray-700 font-light py-4">{{ __($title) }}</h3>
        @if($route)
        <a href="{{ $route }}" class="bg-primary-800 hover:bg-primary-700 transition ease-in-out text-white font-semibold py-2 px-5 rounded flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
            <span>New {{ __($model) }}</span>
        </a>
        @endif
    </div>
</div>