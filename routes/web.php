<?php

use App\Http\Controllers\{
    DashboardController,
    LoginController,
    ProductController,
    UserController
};
use Illuminate\Support\Facades\Route;

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

Route::resource('dashboard', DashboardController::class)->names('admin.dashboards');
Route::resource('user', UserController::class)->names('admin.users');
Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
Route::resource('login', LoginController::class)->names('admin.logins');
Route::get('products', [ProductController::class, 'index'])->name('admin.products');
// Route::resource('products', ProductController::class)->names('admin.products');
