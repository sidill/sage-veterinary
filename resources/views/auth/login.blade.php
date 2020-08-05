@extends('layouts.app')

@section('content')
<x-auth-card title="Welcome Back !">
    <form class="space-y-4" method="POST" action="{{ route('login') }}">
        @csrf
    
        <div>
            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
    
            <div>
                <input id="email" type="email" class="form-input w-full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                @error('email')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>
    
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
                <input id="password" type="password" class="form-input w-full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                @error('password')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>
    
        <div>
            <label class="inline-flex items-center" for="remember">
                <input class="form-checkbox cursor-pointer w-5 h-5" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="ml-2 form-label">{{ __('Remember Me') }}</span>
            </label>
        </div>
    
        <div>
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection
