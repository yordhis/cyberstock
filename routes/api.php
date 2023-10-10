<?php

use App\Http\Controllers\{
    CategorieController,
    MarkController,
    ProductController
};
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

Route::resource('categories', CategorieController::class)->names('api.categories');
Route::resource('marks', MarkController::class)->names('api.marks');

Route::get('getProduct/{barcode}', [ProductController::class, 'getProduct'])->name('api.products');
Route::get('getProducts', [ProductController::class, 'getProducts'])->name('api.products');
Route::resource('products', ProductController::class)->names('api.products');
// Route::get('categories', [CategorieController::class, 'index'])->name('api.categories');
// Route::post('categories', [CategorieController::class, 'store'])->name('api.categories');
// Route::get('marks', [MarkController::class, 'index'])->name('api.marks');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
