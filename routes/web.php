<?php

use App\Http\Controllers\ControllerServicios;
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
    return view('inicio');
});


Route::get('inicio', [ ControllerServicios::class, 'inicio' ]);

Route::post('GuardarCiudades', [ \App\Http\Controllers\ControllerServicios::class, 'GuardarCiudades' ])->name('GuardarCiudades');
Route::post('GuardarClientes', [ \App\Http\Controllers\ControllerServicios::class, 'GuardarClientes' ])->name('GuardarClientes');
Route::post('GuardarOrders', [ \App\Http\Controllers\ControllerServicios::class, 'GuardarOrders' ])->name('GuardarOrders');
Route::post('GuardarProductos', [ \App\Http\Controllers\ControllerServicios::class, 'GuardarProductos' ])->name('GuardarProductos');
Route::post('GuardarDetails', [ \App\Http\Controllers\ControllerServicios::class, 'GuardarDetails' ])->name('GuardarDetails');