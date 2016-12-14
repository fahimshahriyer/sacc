<?php

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('account','Account\AccountController');
    Route::resource('fee','Fee\FeeController');
	Route::resource('payplan','Payplan\PayplanController');
    /**
     * Invoice Route
     */
    Route::resource('invoice','Invoice\InvoiceController');

});
