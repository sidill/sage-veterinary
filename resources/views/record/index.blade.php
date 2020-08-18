@extends('layouts.app')

@section('header')
    <x-sub-header title="Records" />
@endsection

@section('content')
    <x-table name="record" :items="$records" />
@endsection