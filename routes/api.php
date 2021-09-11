<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/foto', [FotoController::class, 'index']);
Route::get('/foto/{id}', [FotoController::class, 'show']);
Route::post('/foto', [FotoController::class, 'create']);
Route::put('/foto/{id}', [FotoController::class, 'update']);
Route::delete('/foto/{id}', [FotoController::class, 'destroy']);