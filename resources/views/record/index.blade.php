@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" model="Record" :route="route('record.create')" />
@endsection

@section('content')
    record.index template
@endsection