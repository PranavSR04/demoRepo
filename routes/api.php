<?php


use App\Http\Controllers\ContractsController;
use App\Http\Controllers\RolesController;

use App\Http\Controllers\ExperionTablesController;

use App\Http\Controllers\UserController;
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

Route::post('/insertRole', [RolesController::class, 'insertRole']);
Route::get('/role/details', [RolesController::class, 'getRole']);

Route::post('/insert/ExperionData', [ExperionTablesController::class,'store']);
Route::post('/generate/ExperionData', [ExperionTablesController::class,'generateRandomData']);

Route::get('/display/ExperionData/{id}',[ExperionTablesController::class,'show']);


Route::post('/insertUser',[UserController::class,'create']);
Route::post('/insertContract',[ContractsController::class,'create']);
Route::get('/list/users',[ContractsController::class,'getUsers']);
