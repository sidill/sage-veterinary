@extends('layouts.app')

@section('content')
<x-auth-card title="Reset Password">
    @if(session('status'))
    <x-alert>
        <p class="text-sm font-medium">{{ session('status') }}</p>
    </x-alert>
    @endif

    <form class="space-y-4" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>

            <div>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <x-error :message="$message" />
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection
