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

/** ROUTES DE EXTERNO */
Route::resource('/externo', ExternoController::class);


/** ROUTES DE DERIVAOD */

Route::resource('/derivado', DerivaController::class);
