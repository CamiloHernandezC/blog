<?php

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

Route::get('/boda','WeddingController@show')->name('wedding');
Route::get('/viajes','TravelsController@show')->name('travels');
Route::get('/viajes/mexico','TravelsController@mexico');
Route::post('/find_attendee', 'AttendeesController@find')->name('findAttendee');
Route::post('/cancel_attendee', 'AttendeesController@cancel')->name('cancelAttendee');
Route::post('/confirm_attendance', 'AttendeesController@confirmAttendance')->name('confirmAttendance');
Route::post('/assign_gift', 'GiftController@assignGift')->name('assignGift');

Route::get('/eventos/curso_asesoria_06112020', function () {
    return view('events');
});
