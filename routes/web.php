<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', 'HomeController')->name('home');

    Route::get('profile', 'ProfileController')->name('profile');
    
    Route::resource('record', 'RecordController')->middleware('verified');
    
    Route::resource('client', 'ClientController')->middleware('verified');
    
    Route::resource('patient', 'PatientController')->middleware('verified');
});

