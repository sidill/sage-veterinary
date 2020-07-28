<div class="bg-white">
    <div class="container px-6 mx-auto flex items-center justify-between">
        <div class="flex space-x-5 text-gray-600 text-sm">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 text-gray-800 py-2 px-1">
                <img class="w-10 h-10" src="{{ asset('img/logo.png') }}" />
                <span class="text-base font-bold">Sage Veterinary Services</span>
            </a>
            @auth
            <a href="{{ route('home') }}" class="flex items-center py-3 px-1 @if(request()->is('home')) border-b-2 border-primary-700 @endif">
                @if(request()->is('home'))
                <svg class="w-5 h-5 mr-2 text-primary-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                <span class="text-gray-700">Dashboard</span>
                @else
                <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                <span>Dashboard</span>
                @endif
            </a>
            <a href="{{ route('record.index') }}" class="flex items-center py-3 px-1 @if(request()->is('record*')) border-b-2 border-primary-700 @endif">
                @if(request()->is('record*'))
                <svg class="w-5 h-5 mr-2 text-primary-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                <span class="text-gray-700">Records</span>
                @else
                <svg class="w-5 h-5 mr-2 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                <span>Records</span>
                @endif
            </a>
            @endauth
        </div>
        <div>
            @guest
                <a class="text-gray-800 text-semibold px-5 py-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <div x-data="{ show: false }" class="relative flex items-center">
                    <button x-on:click="show = !show" id="navbarDropdown" class="focus:outline-none focus:shadow-outline rounded" role="button">
                        <svg class="w-5 h-5 text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
    
                    <div x-show="show" x-on:click.away="show = false" aria-labelledby="navbarDropdown" class="absolute right-0 top-0 mt-6 w-56 bg-white border border-gray-300 rounded shadow-md divide-y">
                        <a class="block p-4 text-center hover:bg-gray-100" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <svg class="block mx-auto w-16 h-16 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-gray-600 text-sm">{{ Auth::user()->name }}</span>
                            <span class="text-gray-500 text-xs">{{ Auth::user()->email }}</span>
                        </a>
                        <div>
                            <a class="block text-primary-600 hover:bg-gray-100 px-4 py-2" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                <span class="flex items-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path></svg>
                                    <span>{{ __('Logout') }}</span>
                                </span>
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</div>