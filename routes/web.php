<?php

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

/*(optional?) si pasa de la ruta raíz entonces busca la ruta que se pone en el navegador en el routes js*/

Route::get('/{optional?}', function () {
    return view('app');
})->name('basepath');
