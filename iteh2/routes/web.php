<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReceptController;
use App\Models\Recept;

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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',[ReceptController::class,'index'])->name('dashboard');
});

Route::get('/recept',[ReceptController::class,'add']);
Route::post('/recept',[ReceptController::class,'create']);

Route::get('/recept/{recept}',[ReceptController::class,'edit']);
Route::post('/recept/{recept}',[ReceptController::class,'update']);
