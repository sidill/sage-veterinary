@extends('layouts.app')

@section('header')
    <x-sub-header title="Clients" />
@endsection

@section('content')
    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="bg-white rounded shadow p-5 space-y-8">
            <div class="flex flex-col lg:flex-row">
                <div class="w-full mb-8 lg:w-1/3">
                    <h3 class="form-heading">{{ __('Client Information') }}</h3>
                    <h5 class="form-sub-heading">{{ __('This give us detail of the person who brought the pet') }}</h5>
                </div>
                <div class="w-full lg:w-2/3 space-y-2">
                    <div>
                        <label class="form-label" for="client['reference']">Client ID</label>
                        <input class="block form-input @error('client.reference') is-invalid @enderror w-full max-w-xs" id="client['reference']" type="text" name="client[reference]" value="{{ $client->reference }}" />
                        @error('client.reference')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['name']">Client Name</label>
                        <input class="block form-input @error('client.name') is-invalid @enderror w-full max-w-md" id="client['name']" type="text" name="client[name]" value="{{ $client->name }}" />
                        @error('client.name')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['address']">Client Address</label>
                        <input class="block form-input @error('client.address') is-invalid @enderror w-full max-w-md" id="client['address']" type="text" name="client[address]" value="{{ $client->address }}" />
                        @error('client.address')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['phone']">Client Phone</label>
                        <input class="block form-input @error('client.phone') is-invalid @enderror w-full max-w-xs" id="client['phone']" type="text" name="client[phone]" value="{{ $client->phone }}" />
                        @error('client.phone')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="client['email']">Client Email</label>
                        <input class="block form-input @error('client.email') is-invalid @enderror w-full max-w-sm" id="client['email']" type="text" name="client[email]" value="{{ $client->email }}" />
                        @error('client.email')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                </div>
            </div>
            <div class="border-t"></div>
            <div class="flex justify-end items-center space-x-4">
                <button class="btn btn-primary" name="action" value="save-and-edit">
                    Save & Continue Editing
                </button>
                <button type="submit" class="btn btn-primary" name="action" value="save">
                    Save
                </button>
            </div>
        </div>
    </form>
@endsection