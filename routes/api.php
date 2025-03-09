<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\MenController;
use App\Models\Product;
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

// API route for fetching homepage products
Route::get('/homepage', [HomepageController::class, 'index']);
Route::get('/men', [MenController::class, 'index']);

Route::get('/homepage', function () {
    return response()->json([
        'newArrivals' => Product::where('is_new', true)->get(),
        'topSelling' => Product::where('is_sale', true)->get(),
    ]);
});
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
