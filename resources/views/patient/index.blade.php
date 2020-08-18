@extends('layouts.app')

@section('header')
    <x-sub-header title="Patients" />
@endsection

@section('content')
    <x-table name="patient" :items="$patients" />
@endsection