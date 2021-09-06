<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NagradaController;
use App\Http\Controllers\BazniController;
use App\Http\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});
Route::post('/register',[RegisterController::class,'register']);
Route::post('/login',[RegisterController::class,'login']);

Route::middleware('auth:api')->group(function () {
  Route::resource('nagradas',NagradaController::class);
  
});
Route::post('/dodaj',[NagradaController::class,'dodajNagradu']);
Route::get('/nagrada',[NagradaController::class,'listaNagrada']);
Route::delete('/obrisi/{id}',[NagradaController::class,'obrisiNagradu']);
Route::get('/nagrada/{naziv}',[NagradaController::class,'vidiNagradu']);
Route::put('/nagrada/{id}',[NagradaController::class,'izmena']);

