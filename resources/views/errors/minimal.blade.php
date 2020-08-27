@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg p-24 shadow text-center font-poppins text-gray-800 space-y-4">
    <div class="text-4xl">
        Oops...
    </div>

    <div class="flex items-center justify-center text-lg">
        <div class="border-r-2 border-gray-600 pr-3">
            @yield('code')
        </div>
    
        <div class="pl-3">
            @yield('message')
        </div>
    </div>

    <div>
        <a class="btn btn-primary inline-block" href="{{ url('/') }}">
            Go Home
        </a>
    </div>
</div>
@endsection