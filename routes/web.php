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

Route::get('/', 'EmailController@index');

Route::get('/mail-data', 'EmailController@dataEmail');

Route::get('/send-mail', 'EmailController@send');

Route::get('/send-product-mail', 'EmailController@sendProductEmail');