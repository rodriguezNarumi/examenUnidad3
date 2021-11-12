<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
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
/*Route::get('/personas', function () {
    return view('personas.index');
});
Route::get('personas/create', [PersonasController::class,'create']);*/
Route::resource('persona', PersonasController::class);
Route::resource('personas', PersonasController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
