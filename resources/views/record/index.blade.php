@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" />
@endsection

@section('content')
    @if(session('status'))
    <x-alert class="mb-2">
        <p class="text-sm font-medium">{{ session('status') }}</p>
    </x-alert>
    @endif
    
    <x-table name="record" :items="$records" />
@endsection