@extends('layouts.app')

@section('content')
<x-auth-card title="Reset Password">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form class="space-y-4" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label for="email" class="text-sm text-gray-800">{{ __('E-Mail Address') }}</label>

            <div>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit" class="bg-primary-800 hover:bg-primary-700 transition ease-in-out text-white font-semibold py-2 px-5 rounded w-full">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection
