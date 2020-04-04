<?php

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create');
Route::post('/contacts', 'ContactController@store');


Route::resources([
    'companies' => 'CompanyController',
    'recurrent-services' => 'RecurrentServiceController'
]);

Route::get('/tickets/create', 'TicketController@create');
Route::post('/tickets', 'TicketController@store');
