<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\User\ChuongController;
use App\Http\Controllers\User\DanhMucController;
use App\Http\Controllers\User\DanhSachController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\SachController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('/book', SachController::class);
Route::get('book/{bookID}/{id}', [ChuongController::class, 'show'])->middleware(['auth']);
Route::get('listbook/', [DanhSachController::class, 'index']);
Route::get('listbook/{character}', [DanhSachController::class, 'listBookWithCharacter']);
Route::get('category/{id}', [DanhMucController::class, 'show']);
Route::get('category/{id}/{character}', [DanhMucController::class, 'filter']);

// MARK: - Admin
Route::group([
    'prefix' => 'admin',
], function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/book', BookController::class);
    Route::resource('/chapter', ChapterController::class);
    Route::resource('/account', AccountController::class);
})->middleware(['auth', 'admin']);

