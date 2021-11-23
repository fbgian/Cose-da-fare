<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitoController;

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

Route::get('/', 'App\Http\Controllers\SitoController@home');
Route::get('/dafare', 'App\Http\Controllers\SitoController@getDafare');

Route::get('/vue', function () {
    return view('vue');
});
