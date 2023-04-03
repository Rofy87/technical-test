<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\InspectionController;
use \App\Http\Controllers\GradeController;
use \App\Http\Controllers\FarmController;
use \App\Http\Controllers\TurbineController;
use \App\Http\Controllers\ComponentTypeController;
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
//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('inspections', InspectionController::class)->only([
    'index', 'show'
]);
Route::apiResource('turbines', TurbineController::class)->only([
    'index', 'show'
]);
Route::get('grades', [GradeController::class, 'index']);
Route::get('farms', [FarmController::class, 'index']);
Route::get('component_types', [ComponentTypeController::class, 'index']);
