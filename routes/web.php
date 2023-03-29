<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::resource('order', OrderController::class);
Route::resource('covid19', Covid19Controller::class);
Route::resource('product', ProductController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
