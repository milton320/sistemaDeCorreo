<?php

use App\Http\Controllers\DerivaController;
use App\Http\Controllers\ExternoController;
use App\Http\Controllers\ResponsableController;
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
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** ROUTES DE PERSONAL */
Route::get('/personal', function () {
    return view('personal.index');
});

/** ROUTES DE EXTERNO */
Route::resource('/externo', ExternoController::class)->withTrashed();


/** ROUTES DE DERIVAOD */

Route::resource('/derivado', DerivaController::class)->withTrashed();

/** ROUTES DE DERIVAOD */

Route::resource('/responsable', ResponsableController::class)->withTrashed();

