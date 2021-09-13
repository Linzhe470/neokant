<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/google198c15353f62bb77.html', function () {
    return view('google198c15353f62bb77');
});

// Route::get('/sitemap.xml', function () {
//     return view('sitemap.xml');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
