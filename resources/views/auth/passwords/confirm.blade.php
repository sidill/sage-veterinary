@extends('layouts.app')

@section('content')
<x-auth-card title="Confirm Password">
    <form class="space-y-4" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="text-gray-700 text-xs">{{ __('Please confirm your password before continuing.') }}</div>

        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="form-label">{{ __('Password') }}</label>


                @if (Route::has('password.request'))
                <a class="text-xs text-gray-600 hover:text-gray-700 hover:underline" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
    
            <div>
                <input id="password" type="password" class="form-input w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" autofocus>
    
                @error('password')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Confirm Password') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection
