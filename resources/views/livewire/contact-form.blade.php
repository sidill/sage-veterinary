<form wire:submit.prevent="save" action="{{ route('profile') }}" method="POST">
    @csrf
    <div class="bg-white rounded shadow p-5 space-y-8">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full mb-8 lg:w-1/3">
                <h3 class="form-heading">{{ __('Contact Information') }}</h3>
                <h5 class="form-sub-heading">{{ __('This give us way to reach in case of emergency') }}</h5>
            </div>
            <div class="w-full lg:w-2/3 space-y-2">
                <div>
                    <label class="form-label" for="name">Name</label>
                    <input wire:model="name" class="block form-input @error('name') is-invalid @enderror w-full max-w-md" id="name" type="text" name="name" autocomplete="name" />
                    @error('name')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="email">Email</label>
                    <input wire:model="email" class="block form-input @error('email') is-invalid @enderror w-full max-w-sm" id="email" type="text" name="email" autocomplete="email" />
                    @error('email')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="phone">Phone</label>
                    <input wire:model="phone" class="block form-input @error('phone') is-invalid @enderror w-full max-w-xs" id="phone" type="text" name="phone" autocomplete="tel-national" />
                    @error('phone')
                        <x-error :message="$message" />
                    @enderror
                </div>

                <div>
                    <span class="form-label">Notify me via</span>
                    <div>
                        <div>
                            <label class="inline-flex items-center">
                                <input wire:model="notify_via" type="checkbox" class="form-checkbox w-5 h-5 cursor-pointer text-gray-700" name="notify_via[]" value="database" />
                                <span class="ml-2">Dashboard</span>
                            </label>
                        </div>  
                        <div>
                            <label class="inline-flex items-center">
                                <input wire:model="notify_via" type="checkbox" class="form-checkbox w-5 h-5 cursor-pointer text-gray-700" name="notify_via[]" value="mail" />
                                <span class="ml-2">Mail</span>
                            </label>
                        </div>  
                        <div>
                            <label class="inline-flex items-center">
                                <input wire:model="notify_via" type="checkbox" class="form-checkbox w-5 h-5 cursor-pointer text-gray-700" name="notify_via[]" value="sms" />
                                <span class="ml-2">SMS</span>
                            </label>
                        </div>
                        @error('patient.species')
                            <x-error :message="$message" />
                        @enderror
                    </div>
                </div>

            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex justify-end items-center">
            <button wire:click="save" type="submit" class="btn btn-primary">
                Save
            </button>
        </div>
    </div>
</form>