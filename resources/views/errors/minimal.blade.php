@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg p-24 shadow text-center font-poppins text-gray-800">
    <div class="text-4xl">
        Oops...
    </div>
    <div class="text-2xl">
        @yield('code')
    </div>

    <div class="text-lg">
        @yield('message')
    </div>

    <div class="pt-5">
        <a class="btn btn-primary inline-block" href="{{ url('/') }}">
            Go Home
        </a>
    </div>
</div>
@endsection