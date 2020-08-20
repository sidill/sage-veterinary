<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'verify' => true]);

Route::group(['middleware' => ['auth', '2fa']], function () {
    Route::get('home', 'HomeController')
        ->name('home');

    Route::get('profile', 'ProfileController')
        ->middleware(['verified', 'password.confirm'])
        ->name('profile');

    Route::post('password/change', 'Auth\ChangePasswordController')
        ->name('password.change');

    Route::resource('record', 'RecordController');

    Route::resource('client', 'ClientController');

    Route::resource('patient', 'PatientController');

    Route::get('security', 'Auth\PasswordSecurityController@showForm')
        ->name('security')
        ->middleware('password.confirm');
    Route::post('generate2faSecret', 'Auth\PasswordSecurityController@generate2faSecret')
        ->name('generate2faSecret');
    Route::post('2fa', 'Auth\PasswordSecurityController@enable2fa')
        ->name('enable2fa');
    Route::post('disable2fa', 'Auth\PasswordSecurityController@disable2fa')
        ->name('disable2fa');

    Route::post('2faVerify', function () {
        return redirect(url()->previous());
    })->name('2faVerify');
});
