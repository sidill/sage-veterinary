@extends('layouts.app')

@section('content')
<x-auth-card title="Two Factor Authentication">
    <form class="space-y-4" method="POST" action="{{ route('2faVerify') }}">
        @csrf

        <div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="text-gray-700 text-xs">{{ __('Enter the pin from Google Authenticator to access your account') }}</div>

        <div>
            <label for="one_time_password" class="form-label">{{ __('One Time Password') }}</label>

            <div>
                <input id="one_time_password" type="password" class="form-input @if($errors->any()) is-invalid @endif" name="one_time_password" required autofocus>

                @if($errors->any())
                    <div class="invalid-feedback" role="alert">
                        <strong class="text-xs text-red-600">{{ $errors->first() }}</strong>
                    </div>
                @endif
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary w-full">
                {{ __('Authenticate') }}
            </button>
        </div>
    </form>
</x-auth-card>
@endsection