@extends('layouts.app')

@section('header')
    <x-sub-header title="Dashboard" />
@endsection

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    <livewire:stat-tile name="client" />

    <livewire:stat-tile name="patient" />

    <livewire:stat-tile name="record" />

</div>

<div class="mt-4">
    <x-recent-activity :activities="$activities" />
</div>
@endsection

