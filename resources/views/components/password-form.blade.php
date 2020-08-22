<form action="{{ route('password.change') }}" method="POST">
    @csrf
    <div class="bg-white rounded shadow p-5 space-y-8">
        <div class="flex flex-col lg:flex-row">
            <div class="w-full mb-8 lg:w-1/3">
                <h3 class="form-heading">{{ __('Password') }}</h3>
                <h5 class="form-sub-heading">{{ __('Ensure your account is using a long random password to stay secure') }}</h5>
            </div>
            <div class="w-full lg:w-2/3 space-y-2">
                <div>
                    <label class="form-label" for="current_password">Current Password</label>
                    <input class="block form-input @error('current_password') is-invalid @enderror w-full max-w-sm" id="current_password" type="password" name="current_password" required autocomplete="current-password" />
                    @error('current_password')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="new_password">New Password</label>
                    <input class="block form-input @error('new_password') is-invalid @enderror w-full max-w-sm" id="new_password" type="password" name="new_password" required autocomplete="new-password" />
                    @error('new_password')
                        <x-error :message="$message" />
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="confirm_password">Current Password</label>
                    <input class="block form-input @error('confirm_password') is-invalid @enderror w-full max-w-sm" id="confirm_password" type="password" name="new_password_confirmation" required autocomplete="new-password" />
                </div>
            </div>
        </div>
        <div class="border-t"></div>
        <div class="flex justify-end items-center">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>
    </div>
</form>