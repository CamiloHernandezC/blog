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


Route::get('/blogs','BlogsController@show')->name('blogs');
Route::get('/blog/{blog}', 'BlogsController@blog')->name('blog');
Route::post('/blog/edit', 'BlogsController@editBlog')->name('editBlog');
Route::post('/{blog}/comment/', 'BlogsController@commentBlog')->name('commentBlog');
Route::post('/{comment}/reply/', 'BlogsController@replyComment')->name('replyComment');

Route::post('/insert-image', 'BlogsController@insertImage');
Route::post('/upload-image', 'BlogsController@uploadImage');
Route::post('/rotate-image', 'BlogsController@uploadImage');//TODO ROTATE AND CROP

Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');

Route::get('/viajes','TravelsController@show')->name('travels');
Route::get('/viajes/mexico','TravelsController@mexico');

Route::get('/boda','WeddingController@show')->name('wedding');
Route::post('/find_attendee', 'AttendeesController@find')->name('findAttendee');
Route::post('/cancel_attendee', 'AttendeesController@cancel')->name('cancelAttendee');
Route::post('/confirm_attendance', 'AttendeesController@confirmAttendance')->name('confirmAttendance');
Route::post('/assign_gift', 'GiftController@assignGift')->name('assignGift');

Route::get('/eventos/curso_asesoria_06112020', function () {
    return view('events');
});
