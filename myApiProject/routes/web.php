<?php

use App\Http\Controllers\myRoutes;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/hi', function () {
    return view('welcome');
});

Route::get('/', [myRoutes::class, 'index'])->name('index');
Route::get('/cliente/{id}', [myRoutes::class, 'cliente']);

Route::controller(ClientController::class)->group(function () {

Route::get('/Clients', 'index')->name('clients.index');

Route::get('/Clients/create', 'create')->name('clients.create');

Route::get('/Clients/{id}', 'show')->name('clients.show');

Route::post('/Clients', 'store')->name('clients.store');

Route::get('/Clients/{id}/edit', 'edit')->name('clients.edit');

Route::put('/Clients/{id}', 'update')->name('clients.update');

Route::delete('/Clients/{id}', 'destroy')->name('clients.destroy');

});



