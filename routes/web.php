<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCarController;
use App\Http\Controllers\AdminGaraController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCardController;
use App\Http\Controllers\AdminDiscountController;
use App\Http\Controllers\AdminGPLXController;
use App\Http\Controllers\AdminRenralController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');

Route::prefix('/car')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('car');
    Route::get('/single', [CarController::class, 'indexcar'])->name('single')->middleware(['auth', 'verified']);
    
});
Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');
Route::get('/rent', [RentController::class, 'index'])->name('rent');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/blog1', [BlogController::class, 'index'])->name('blog');



// ADMIN///////////////////////////////////////////////////

// Categoris
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class,'index'] )->name('categories.index');

    Route::get('/create', [CategoryController::class,'create'] )->name('categories.create');

    Route::post('/store', [CategoryController::class,'store'] )->name('categories.store');

    Route::get('/edit/{id}', [CategoryController::class,'edit'] )->name('categories.edit');

    Route::post('/update/{id}', [CategoryController::class,'update'] )->name('categories.update');

    Route::get('/delete/{id}', [CategoryController::class,'delete'] )->name('categories.delete');

    
});

// Cars
Route::prefix('cars')->group(function () {
    Route::get('/', [AdminCarController::class,'index'] )->name('car.index');
    Route::get('/create', [AdminCarController::class,'create'] )->name('car.create');  
});

// Garas
Route::prefix('garas')->group(function () {
    Route::get('/', [AdminGaraController::class,'index'] )->name('gara.index');
    Route::get('/create', [AdminGaraController::class,'create'] )->name('gara.create'); 
});

// Blog
Route::prefix('blog')->group(function () {
    Route::get('/', [AdminBlogController::class,'index'] )->name('blog.index');
    Route::get('/create', [AdminBlogController::class,'create'] )->name('blog.create'); 
});

// Discount
Route::prefix('discount')->group(function () {
    Route::get('/', [AdminDiscountController::class,'index'] )->name('discount.index');

});

// User
Route::prefix('user')->group(function () {
    Route::get('/', [AdminUserController::class,'index'] )->name('user.index');

});

// GPLX
Route::prefix('gplx')->group(function () {
    Route::get('/', [AdminGPLXController::class,'index'] )->name('gplx.index');

});

// Card
Route::prefix('card')->group(function () {
    Route::get('/', [AdminCardController::class,'index'] )->name('card.index');

});

// Renral
Route::prefix('renral')->group(function () {
    Route::get('/', [AdminRenralController::class,'index'] )->name('renral.index');

});


Auth::routes(['verify'=> true]);


