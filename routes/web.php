<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WallController;
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

Route::get('/wall', [WallController::class, 'index'])->middleware(['auth'])->name('wall');
Route::post('/wall', [WallController::class, 'create'])->middleware(['auth'])->name('post_create');
Route::get('/updatePost/{id_post}', [WallController::class, 'update'])->middleware(['auth'])->name('post_update');
Route::get('/deletePost/{id_post}', [WallController::class, 'delete'])->middleware(['auth'])->name('post_delete');
Route::post('/savePost', [WallController::class, 'save'])->middleware(['auth'])->name('post_save');
Route::get('/plop', function () {
    echo 'plop';
})->name('plop');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
