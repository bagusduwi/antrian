<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\CrudController;

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

Route::get('/', [DisplayController::class, 'index']);
Route::prefix('display')->group(function () {
    Route::get('antrian', [DisplayController::class, 'antrian']);
    Route::get('poli', [DisplayController::class, 'poli']);
});



Route::prefix('crud')->group(function () {
    Route::get('/', [CrudController::class, 'index']);
    Route::get('/create', [CrudController::class, 'create']);
    Route::post('/create', [CrudController::class, 'store']);
    Route::get('/edit/{id}', [CrudController::class, 'edit']);
    Route::put('/update/{id}', [CrudController::class, 'update']);
    Route::delete('/delete/{id}', [CrudController::class, 'destroy']);
});
