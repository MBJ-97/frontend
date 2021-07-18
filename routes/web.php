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


Route::get('/', 'PublicController@welcome');

Route::get('/createbusiness', 'BusinessController@create_business');

Route::post('/storebusiness', 'BusinessController@store_business');

Route::get('/signupbusiness', 'BusinessController@signup_business');

Route::post('/processsignup', 'BusinessController@processs_signup');

Route::get('/signupsuccess', 'BusinessController@signup_success'); 

Route::get('/businessLogin', 'LoginController@showBusinessUserLoginForm');

Route::post('/login/businessuser', 'LoginController@businessUserLogin');

Route::get('/business/dashboard', 'BusinessController@dashboard')->middleware('auth:businessuser'); // HAVE TO SET LOGOUT LINK IN LOGIN CONTR

Route::get('/logout', 'LoginController@logout');


