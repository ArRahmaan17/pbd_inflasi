<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\User\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('news')
    ->controller(NewsController::class)
    ->name('news.')->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/create',  'create')->name('create');
        Route::post('/store',  'store')->name('store');
        Route::get('/load-limit',  'loadLimit')->name('load-limit');
        Route::get('/{slug?}',  'show')->name('show');
        Route::post('/{slug?}/comment',  'comment')->middleware(['auth'])->name('comment');
        Route::post('/asset-upload',  'assetUpload')->middleware(['auth'])->name('asset-upload');
        Route::post('/thumbnail-upload',  'thumbnailUpload')->middleware(['auth'])->name('thumbnail-upload');
    });
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'signup'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});
