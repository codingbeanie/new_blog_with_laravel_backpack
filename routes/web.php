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
    return view('front.layouts.app');
});
Route::post('/contact/submit','Admin\ContactCrudController@submit')->name('contact.submit');
Route::get('/portfolio-details/{id}','Admin\PortfolioCrudController@details')->name('portfolio.details');