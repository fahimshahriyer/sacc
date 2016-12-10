<?php

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('account','Account\AccountController');
	Route::resource('payplan','Payplan\PayplanController');
    Route::resource('invoice','InvoiceController');

});
