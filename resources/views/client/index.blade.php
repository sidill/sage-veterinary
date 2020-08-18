@extends('layouts.app')

@section('header')
    <x-sub-header title="Clients" />
@endsection

@section('content')
    <x-table name="client" :items="$clients" />
@endsection