<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontend\UserArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard/user', function () {
    return view('frontend.foto');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(UserArticleController::class)->group(function(){
    Route::get('user/article', 'index')->name('article');
    Route::get('');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    });

    Route::controller(ArtikelController::class)->group(function(){
        Route::get('/artikel', 'index')->name('admin.artikel');
    });


    Route::controller(CategoryController::class)->group(function(){
        Route::get('kategori','index')->name('kategori.index');
        Route::post('kategori/store','store')->name('kategori.store');
        Route::put('kategori/update','update')->name('kategori.update');
        Route::delete('kategori/delete','delete')->name('kategori.delete');
    });
});

require __DIR__.'/auth.php';
