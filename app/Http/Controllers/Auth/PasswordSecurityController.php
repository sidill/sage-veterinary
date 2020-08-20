<?php

namespace App\Http\Controllers\Auth;

use App\PasswordSecurity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PasswordSecurityController extends Controller
{
    public function showForm(Request $request)
    {
        /** @var \App\User */
        $user = auth()->user();

        $google2faUrl = '';
        if ($user->passwordSecurity()->exists()) {
            $google2fa = app('pragmarx.google2fa');
            $google2faUrl = $google2fa->getQRCodeInline(
                config('app.name'),
                $user->email,
                $user->passwordSecurity->google2fa_secret
            );
        }

        return view('auth.security', compact('user', 'google2faUrl'));
    }

    public function generate2faSecret(Request $request)
    {
        $user = auth()->user();

        $google2fa = app('pragmarx.google2fa');

        PasswordSecurity::query()->create([
            'user_id' => $user->id,
            'google2fa_enable' => false,
            'google2fa_secret' => $google2fa->generateSecretKey(),
        ]);

        return redirect()->route('security')->with('success', 'Secret Key is generated, Please verify Code to Enable 2A');
    }

    public function enable2fa(Request $request)
    {
        /** @var \App\User */
        $user = auth()->user();

        $google2fa = app('pragmarx.google2fa');
        $secret = $request->input('verify_code');
        $valid = $google2fa->verifyKey($user->passwordSecurity->google2fa_secret, $secret);
        if ($valid) {
            $user->passwordSecurity->google2fa_enable = true;
            $user->passwordSecurity->save();
            return redirect()->route('security')->with('success', '2FA is Enabled Successfully');
        }

        return redirect()->route('security')->with('error', 'Invalid Verification Code, Please try again');
    }

    public function disable2fa(Request $request)
    {
        $user = auth()->user();

        if(!(Hash::check($request->get('current_password'), $user->getAuthPassword()))) {
            return redirect()->back()->with('error', 'Your password does not match with your account pasword. Please try again');
        }

        $validatedData = $request->validate([
            'current_password' => 'required'
        ]);

        $user->passwordSecurity->google2fa_enable = false;
        $user->passwordSecurity->save();

        return redirect()->route('security')->with('success', '2FA is now Disabled');
    }
}
