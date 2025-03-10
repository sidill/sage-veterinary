<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-poppins  bg-gradient-to-r from-blue-200 via-gray-300 to-indigo-200 flex flex-col h-screen">
    <div class="flex-none">
        <header class="container px-6 mx-auto">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 text-gray-800 py-2 px-1">
                <img class="w-10 h-10" src="{{ asset('img/logo.png') }}" />
                <span class="hidden lg:inline-block text-base font-bold">{{ config('app.name') }}</span>
            </a>
        </header>
    </div>

    <div class="flex-1">
        <div class="container px-6 mx-auto">
            <div class="flex lg:space-x-5 items-center">
                <div class="w-full lg:w-1/2 space-y-3">
                    <div class="text-2xl font-bold text-gray-700">
                        Animal health matters
                    </div>
                    <div class="text-gray-800">
                        Sage provides you with the best of services as well as products
                        when it comes to animal health. Consulations and routine check-ups,
                        disease diagnosis and treatment, vaccinations, home calls,
                        farm visits are all serives we offer. We also have the following
                        products pet feed, pet treats, veterinary drugs, pet wears and toys,
                        pet beds/blankets and kennels.
                    </div>
                    <div class="pt-5">
                        @auth
                            <a class="btn btn-primary" href="{{ route('home') }}">
                                Home
                            </a>
                        @else
                            <a class="btn btn-primary" href="{{ route('login') }}">
                                Login
                            </a>
                        @endauth
                    </div>
                </div>
                <div class="w-full lg:w-1/2 p-16">
                    <img class="" src="{{ asset('img/doggy.svg') }}" alt="Good doggy" />
                </div>
            </div>
    
        </div>
    </div>

    <div class="flex-none">
        <footer class="flex flex-col justify-between items-center px-6 py-2 bg-gray-800 sm:flex-row">
            <a href="#" class="text-lg font-bold text-gray-100 hover:text-gray-400">{{ config('app.name') }}</a>
            
            <p class="py-2 text-gray-100 sm:py-0">All rights reserved</p>
    
            <div class="flex -mx-2">
                <a href="#" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Linkden">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                        <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z"/>
                    </svg>
                </a>
    
                <a href="#" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Facebook">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                        <path d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z"/>
                    </svg>
                </a>
    
                <a href="https://twitter.com/urfinestvet" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Twitter">
                    <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                        <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z"/>
                    </svg>
                </a>
            </div>
        </footer>
    </div>
</body>
</html>

