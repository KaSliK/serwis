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
*//*
Route::get('/', function () {
    return view('backend.dashboard');
});*/

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/', 'BackendController@index')->name('dashboard');
    Route::get('/dashboard', 'BackendController@index');
    Route::get('/example', 'BackendController@example')->name('example');
    Route::get('/mails', 'BackendController@mails')->name('mails');
    Route::get('/media', 'BackendController@media')->name('media');
    Route::get('/subpages', 'BackendController@subpages')->name('subpages');
    Route::resource('examples', 'ExampleController');
    Route::resource('clients', 'ClientController');
    Route::resource('items', 'ItemController');
    Route::resource('repairs', 'RepairController');
    Route::resource('photos', 'PhotoController');
    Route::resource('contact_details', 'ContactDetailsController');
    Route::get('/example/{id}/gallery', 'BackendController@examplePhotos')->name('examplePhotos');


    Route::get('/logout1', [Laravel\Fortify\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])->name('logout1');

});


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('backend.dashboard');
})->name('dashboard');

