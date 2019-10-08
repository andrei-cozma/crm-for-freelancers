<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/create', 'ContactController@create');
Route::post('/contacts', 'ContactController@store');


Route::resources([
    'companies' => 'CompanyController',
    'recurrent-services' => 'RecurrentServiceController'
]);

Route::view('/tickets/create', 'tickets.create');
Route::post('/tickets', 'TicketController@store');
