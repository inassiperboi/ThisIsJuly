<?php

use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "\web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard/tambah', 'App\Http\Controllers\FormController@showForm');
Route::post('/dashboard/tambah', 'App\Http\Controllers\FormController@processForm');
Route::post('/home/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::get('/home/{id}', [App\Http\Controllers\PesanController::class, 'index']);
Route::get('/checkout', [App\Http\Controllers\PesanController::class, 'checkout']);
Route::delete('/checkout/{id}', [App\Http\Controllers\PesanController::class, 'delete']);
Route::get('/konfirmasi-check-out', [App\Http\Controllers\PesanController::class, 'konfirmasi']);
Fortify::loginView(function () {
    return view('auth.login');
});
Fortify::registerView(function () {
    return view('auth.register');
});
Route::get('/footer', function () {
    return view('footer');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('admin');
Route::delete('/dashboard/{id}', 'App\Http\Controllers\ItemController@destroy');
Route::get('/dashboard/edit/{id}', 'App\Http\Controllers\ItemController@edit');
Route::post('/dashboard/edit/{id}', 'App\Http\Controllers\ItemController@update');

