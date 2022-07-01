<?php

use App\Models\Book;
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

Route::namespace('Material')->group(function () {
  Route::get('/', IndexController::class)->name('list-material');
  Route::post('/', StoreController::class)->name('store-material');
  Route::post('/{id}', UpdateController::class)->name('update-material');
  Route::get('/{material}/edit', EditController::class)->name('edit-material');
  Route::get('/create-material', CreateController::class)->name('create-material');
  Route::delete('/', DestroyController::class)->name('destroy-material');
});
