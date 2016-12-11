<?php

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('account','Account\AccountController');
	Route::resource('payplan','Payplan\PayplanController');
    /**
     * Invoice Route
     */
    Route::resource('invoice','Invoice\InvoiceController');

});
