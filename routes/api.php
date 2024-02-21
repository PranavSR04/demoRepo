<?php

use App\Http\Controllers\ExperionTablesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/insert/ExperionData', [ExperionTablesController::class,'store']);
Route::post('/generate/ExperionData', [ExperionTablesController::class,'generateRandomData']);

Route::get('/display/ExperionData/{id}',[ExperionTablesController::class,'show']);