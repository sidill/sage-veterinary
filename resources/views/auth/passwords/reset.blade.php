@extends('layouts.app')

@section('content')
<x-auth-card title="Reset Password">
    <form method="POST" action="{{ route('password.update') }}" class="space-y-2">
        @csrf
    
        <input type="hidden" name="token" value="{{ $token }}">

        <div>
            <label for="email" class="text-sm text-gray-800">{{ __('E-Mail Address') }}</label>

            <div>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ $email }}" required autocomplete="email" autofocus>

                @error('email')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>

        <div>
            <label for="password" class="form-label">{{ __('Password') }}</label>

            <div>
                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>

        <div>
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

            <div>
                <input id="password-confirm" type="password" class="form-input @error('password-confirm') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                @error('password-confirm')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection
