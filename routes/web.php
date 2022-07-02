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
  Route::get('/create', CreateController::class)->name('create-material');
  Route::get('/', IndexController::class)->name('list-material');
  Route::post('/', StoreController::class)->name('store-material');
  Route::get('/{material}', ShowController::class)->name('view-material');
  Route::patch('/{material}', UpdateController::class)->name('update-material');
  Route::get('/{material}/edit', EditController::class)->name('edit-material');
  Route::delete('/', DestroyController::class)->name('destroy-material');
});

Route::namespace('Category')->prefix('categories')->group(function () {
  Route::delete('/index', DestroyController::class)->name('destroy-category');
  Route::get('/index', IndexController::class)->name('list-category');
  Route::post('/index', StoreController::class)->name('store-category');
  Route::patch('/{category}', UpdateController::class)->name('update-category');
  Route::get('/{category}/edit', EditController::class)->name('edit-category');
  Route::get('/create-category', CreateController::class)->name('create-category');
});

Route::namespace('Tag')->prefix('tags')->group(function () {
  Route::delete('/index', DestroyController::class)->name('destroy-tag');
  Route::get('/index', IndexController::class)->name('list-tag');
  Route::post('/index', StoreController::class)->name('store-tag');
  Route::patch('/{tag}', UpdateController::class)->name('update-tag');
  Route::get('/{tag}/edit', EditController::class)->name('edit-tag');
  Route::get('/create-tag', CreateController::class)->name('create-tag');

  Route::post('/append/{material}', TagToMaterialController::class)->name('append-tag-to-material');
  Route::delete('/unbind/{material}', RemoveTagToMaterialController::class)->name('unbind-tag-from-material');
});

Route::namespace('Link')->prefix('links')->group(function () {
  Route::patch('/index', UpdateController::class)->name('update-link');
  Route::post('/index/{materialId}', StoreController::class)->name('store-link');
  Route::delete('/', DestroyController::class)->name('destroy-link');
});
