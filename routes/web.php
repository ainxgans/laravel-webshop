<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimoniController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::prefix('product')->group(function () {
    Route::get('/', [HomeController::class, 'allproduct'])->name('product.all');
    Route::get('/{id}', [HomeController::class, 'detail'])->name('product.detail');
});
Route::get('/testimoni',[TestimoniController::class, 'index']);