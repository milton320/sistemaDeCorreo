<?php

use App\Http\Controllers\DerivaController;
use App\Http\Controllers\ExternoController;
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
    return view('welcome');
});
/** ROUTES DE PERSONAL */
Route::get('/personal', function () {
    return view('personal.index');
});
Route::get('/crear', function () {
    return view('personal.create');
});

/** ROUTES DE EXTERNO */
Route::resource('/externo', ExternoController::class);


Route::get('/crearExterno', function () {
    return view('externo.create');
});
Route::get('/externo/{id}/derivar', [ ExternoController::class, 'derivar'] )->name('externo.derivar');

/** ROUTES DE DERIVAOD */

Route::resource('/derivado', DerivaController::class);
