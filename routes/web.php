<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCarController;




Route::get('/', function () {
    return view('front.index');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class,'index'] )->name('categories.index');

    Route::get('/create', [CategoryController::class,'create'] )->name('categories.create');

    Route::post('/store', [CategoryController::class,'store'] )->name('categories.store');

    Route::get('/edit/{id}', [CategoryController::class,'edit'] )->name('categories.edit');

    Route::post('/update/{id}', [CategoryController::class,'update'] )->name('categories.update');

    Route::get('/delete/{id}', [CategoryController::class,'delete'] )->name('categories.delete');

    
});

Route::prefix('cars')->group(function () {
    Route::get('/', [AdminCarController::class,'index'] )->name('car.index');
    Route::get('/create', [AdminCarController::class,'create'] )->name('car.create');


       
});

