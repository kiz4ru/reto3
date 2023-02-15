<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');

Route::get('empleados/create', [EmpleadosController::class, 'create'])->name('empleados.create');

Route::post('empleados/store', [EmpleadosController::class, 'store'])->name('empleados.store');

Route::get('empleados/{id}', [EmpleadosController::class, 'show'])->name('empleados.show');

Route::get('empleados/{id}/edit', [EmpleadosController::class, 'edit'])->name('empleados.edit');

Route::put('empleados/{id}', [EmpleadosController::class, 'update'])->name('empleados.update');

Route::delete('empleados/{id}', [EmpleadosController::class, 'destroy'])->name('empleados.destroy');