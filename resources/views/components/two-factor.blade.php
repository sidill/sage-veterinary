<div class="bg-white rounded shadow p-5 space-y-8">
    <div class="flex flex-col lg:flex-row">
        <div class="w-full mb-8 lg:w-1/3 pr-6">
            <h3 class="form-heading">{{ __('Two Factor Authentication') }}</h3>
            <h5 class="form-sub-heading">{{ __('Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials') }}</h5>
        </div>
        <div class="w-full lg:w-2/3 space-y-2">
            <div class="space-y-2 text-gray-700">
                <p>To Enable Two Factor Authentication on your Account, you need to do following steps:</p>
                <ol class="pl-12 list-decimal text-sm">
                    <li>Click on Generate Secret Button , To Generate a Unique secret QR code for your profile</li>
                    <li>Verify the OTP from Google Authenticator Mobile App</li>
                </ol>
            </div>

            <div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>

            <div>
                @if(!$user->passwordSecurity)
                    <form method="POST" action="{{ route('generate2faSecret') }}">
                        @csrf
                        <div>
                            <button type="submit" class="btn btn-primary">
                                Generate Secret Key to Enable 2FA
                            </button>
                        </div>
                    </form>
                @elseif(!$user->passwordSecurity->google2fa_enable)
                <div>
                    <div class="text-gray-800 font-semibold">1. Scan this barcode with your Google Authenticator App:</div>
                    <img src="{{ $google2faUrl }}" alt="QR Code">
                    <br/>
                    <div class="text-gray-800 font-semibold">2. Enter the pin code to Enable 2FA</div>
                    <br/>

                    <form class="space-y-2" method="POST" action="{{ route('enable2fa') }}">
                        @csrf

                        <div>
                            <label class="form-label" for="verify_code">Authenticator Code</label>
                            <input class="block form-input @error('verify_code') is-invalid @enderror w-full max-w-xs" id="verify_code" type="password" name="verify_code" required autocomplete="off" />
                            @error('verify_code')
                                <x-error :message="$message" />
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">
                                Enable 2FA
                            </button>
                        </div>
                    </form>
                </div>
                @elseif($user->passwordSecurity->google2fa_enable)
                <div class="space-y-2">
                    <x-alert type='success'>
                        <span></span>
                        <p class="text-sm font-medium">2FA is Currently <strong>Enabled</strong> for your account.</p>
                    </x-alert>

                    <p class="text-gray-700">If you are looking to disable Two Factor Authentication. Please confirm your password and Click Disable 2FA Button.</p>
                    
                    <form class="space-y-2" method="POST" action="{{ route('disable2fa') }}">
                        @csrf
                        <div>
                            <label class="form-label" for="current_password">Current Password</label>
                            <input class="block form-input @error('current_password') is-invalid @enderror w-full max-w-sm" id="current_password" type="password" name="current_password" required autocomplete="current-password" />
                            @error('current_password')
                                <x-error :message="$message" />
                            @enderror
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">
                                Disable 2FA
                            </button>
                        </div>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>