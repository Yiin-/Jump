<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('{url}', function () {
    return view('welcome');
})->where('url', '(?=.*)((?!crud).)*');

Route::group(['prefix' => 'crud'], function () {
    Route::resource('time', 'TimeController');
    Route::resource('reservation', 'ReservationController');
    Route::resource('payment', 'PaymentController');
});
