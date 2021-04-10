<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/projets', 'App\Http\Controllers\ProjetsController@index')->name('projets.index');

Route::get('/postProjet', 'App\Http\Controllers\ProjetsController@create')->name('projets.create');
Route::get('/postClient', 'App\Http\Controllers\ClientsController@create')->name('clients.create');


Route::get('/clients', 'App\Http\Controllers\ClientsController@index')->name('clients.index');

Route::post('/projects', 'App\Http\Controllers\ProjetsController@store');

Route::post('/clients', 'App\Http\Controllers\ClientsController@store');



Route::get('/projets/edit/{id}', 'App\Http\Controllers\ProjetsController@edit')->name('projet.edit'); 
Route::put('/projets/{id}', 'App\Http\Controllers\ProjetsController@update');


Route::get('/clients/edit/{id}', 'App\Http\Controllers\ClientsController@edit')->name('client.edit'); 
Route::put('/clients/{id}', 'App\Http\Controllers\ClientsController@update');