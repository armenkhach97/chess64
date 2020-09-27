<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Customers;

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
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/user', 'App\Http\Controllers\AdminController@index1');
});
Route::middleware(['admin'])->group(function(){
    Route::get('/admin', 'App\Http\Controllers\AdminController@index');
});
