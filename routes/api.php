<?php

use App\Http\Controllers\API\AssetsController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\LocationsController;
use App\Http\Controllers\API\MaintenanceController;
use App\Http\Controllers\API\ManufacturerController;
use App\Http\Controllers\API\ModelsController;
use App\Http\Controllers\API\SuppliersController;
use App\Http\Controllers\API\TeknisiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// route::apiResource('models', ModelsController::class);
// route::apiResource('assets',AssetsController::class);
// route::apiResource('categories',CategoriesController::class);
// route::apiResource('suppliers',SuppliersController::class);
// route::apiResource('maintenance',MaintenanceController::class);
// route::apiResource('manufacturer',ManufacturerController::class);
// route::apiResource('teknisi',TeknisiController::class);
// route::apiResource('locations',[LocationsController::class]);
Route::get('locations', [LocationsController::class, 'index']);
Route::post('locations', [LocationsController::class, 'store']);
Route::get('locations/{id}', [LocationsController::class, 'show']);
Route::put('locations/{id}', [LocationsController::class, 'update']);
Route::delete('locations/{id}', [LocationsController::class, 'destroy']);
Route::get('teknisi', [TeknisiController::class, 'index']);
Route::post('teknisi', [TeknisiController::class, 'store']);
Route::get('teknisi/{id}', [TeknisiController::class, 'show']);
Route::put('teknisi/{id}', [TeknisiController::class, 'update']);
Route::delete('teknisi/{id}', [TeknisiController::class, 'destroy']);
Route::get('suppliers', [SuppliersController::class, 'index']);
Route::post('suppliers', [SuppliersController::class, 'store']);
Route::get('suppliers/{id}', [SuppliersController::class, 'show']);
Route::put('suppliers/{id}', [SuppliersController::class, 'update']);
Route::delete('suppliers/{id}', [SuppliersController::class, 'destroy']);
Route::get('categories', [CategoriesController::class,'index']);
Route::post('categories', [CategoriesController::class, 'store']);
Route::get('categories/{id}', [CategoriesController::class, 'show']);
Route::put('categories/{id}', [CategoriesController::class, 'update']);

Route::delete('manufacturer/{id}', [manufacturerController::class, 'destroy']);
Route::get('manufacturer/{search?}', [ManufacturerController::class,'index']);
Route::post('manufacturer', [ManufacturerController::class, 'store']);
Route::get('manufacturer/{id}', [ManufacturerController::class, 'show']);
Route::put('manufacturer/{id}', [ManufacturerController::class, 'update']);
Route::delete('manufacturer/{id}', [ManufacturerController::class, 'destroy']);