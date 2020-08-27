@extends('layouts.app')

@section('content')
<x-auth-card title="Verify Your Email Address">
    <div class="space-y-2">
        <div>
            @if(session('resent'))
                <x-alert>
                    <p class="text-sm font-medium">{{ __('A fresh verification link has been sent to your email address.') }}</p>
                </x-alert>
            @endif
        </div>
    
        <div class="text-gray-700 text-xs">{{ __('Before proceeding, please check your email for a verification link. If you did not receive the email, request a new one.') }}</div>
    
        <div>
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-primary w-full">{{ __('Click Here To Request Another') }}</button>
            </form>
        </div>
    </div>
</x-auth-card>
@endsection
