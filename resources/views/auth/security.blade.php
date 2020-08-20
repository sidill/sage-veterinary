@extends('layouts.app')

@section('content')
<div class="space-y-4">
    <x-password-form />

    <x-two-factor :user="$user" :google2faUrl="$google2faUrl" />
</div>
@endsection