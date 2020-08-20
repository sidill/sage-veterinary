@extends('layouts.app')

@section('header')
    <x-sub-header title="Clients" />
@endsection

@section('content')
    <div class="space-y-4">
        <livewire:contact-form />

    </div>
@endsection