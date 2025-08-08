<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class , 'index'])->name('index');
        Route::get('/show/{category}' , [CategoryController::class , 'show'])->name('show');
        Route::get('/create', [CategoryController::class , 'create'])->name('create');
        Route::post('/store', [CategoryController::class , 'store'])->name('store');
        Route::get('/edit/{category}', [CategoryController::class , 'edit'])->name('edit');
        Route::put('/update/{category}', [CategoryController::class , 'update'])->name('update');
        Route::delete('/destroy/{category}', [CategoryController::class , 'destroy'])->name('delete');
    });



    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', [PostController::class , 'index'])->name('index');
        Route::get('/show/{post}' , [PostController::class , 'show'])->name('show');
        Route::get('/create', [PostController::class , 'create'])->name('create');
        Route::post('/store', [PostController::class , 'store'])->name('store');
        Route::get('/edit/{post}', [PostController::class , 'edit'])->name('edit');
        Route::put('/update/{post}', [PostController::class , 'update'])->name('update');
        Route::delete('/destroy/{post}', [PostController::class , 'destroy'])->name('delete');
    });
});
