<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientsController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	//return view
	 Route::get('1st-vaccination', function () {return view('pages.tables-1st');})->name('table');
	 Route::get('2nd-vaccination', function () {return view('pages.tables-2nd');})->name('tables');
	 Route::get('1st-vaccination/registration1st', function () {return view('pages.Registration-1st');})->name('registration1st');
	 Route::get('2nd-vaccination/registration2nd', function () {return view('pages.Registration-2nd');})->name('registration2nd');
	 Route::get('1st-vaccination/defferal1st', function () {return view('pages.Deferral-1st');})->name('deferral1st');
	 Route::get('2nd-vaccination/defferal2nd', function () {return view('pages.Deferral-2nd');})->name('deferral2nd');
	 Route::get('1st-vaccination/vaccination1st', function () {return view('pages.Vaccination-1st');})->name('vaccination1st');
	 Route::get('2nd-vaccination/vaccination2nd', function () {return view('pages.Vaccination-2nd');})->name('vaccination2nd');
	 //get list
	 Route::get('1st-vaccination/list', [PatientsController::class, 'getPatient1st'])->name('patient1st.list');
	 Route::get('2nd-vaccination/list', [PatientsController::class, 'getPatient2nd'])->name('patient2nd.list');
	 Route::get('1st-vaccination/registartion1st/list', [PatientsController::class, 'getRegister1st'])->name('register1st.list');
	 Route::get('2nd-vaccination/registartion2nd/list', [PatientsController::class, 'getRegister2nd'])->name('register2nd.list');
	 Route::get('1st-vaccination/defferal1st/list', [PatientsController::class, 'getDeferral1st'])->name('deferral1st.list');
	 Route::get('2nd-vaccination/defferal2nd/list', [PatientsController::class, 'getDeferral2nd'])->name('deferral2nd.list');
	 Route::get('1st-vaccination/vaccination1st/list', [PatientsController::class, 'getVaccination1st'])->name('vaccination1st.list');
	 Route::get('2nd-vaccination/vaccination2nd/list', [PatientsController::class, 'getVaccination2nd'])->name('vaccination2nd.list');
	 //update
	 Route::post('1st-vaccination/registration1st/update', [PatientsController::class, 'RegistrationUpdate'])->name('reg1stupdate');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

