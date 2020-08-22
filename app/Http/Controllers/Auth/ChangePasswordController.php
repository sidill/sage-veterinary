<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ChangePasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        /** @var \App\User */
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'different:current_password', 'confirmed'],
        ]);

        $validator->after(function ($validator) use ($request, $user) {
            if(!Hash::check($request->current_password, $user->getAuthPassword())) {
                $validator->errors()->add('current_password', 'Invalid Password');
            }
        });

        $validator->validate();

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        Auth::logoutOtherDevices($request->new_password);

        return back()->with('status', 'Password Changed');
    }
}
