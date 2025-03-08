<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Categorys\CategoryController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Setting\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

route::get('admin/dashboard',[HomeController::class,'index'])
->middleware('auth','admin')
->name('admin.dashboard');


Route::middleware('auth')->group(function () {
    route::get('/dashboard/setting',[SettingController::class,'index'])->name('admin.dashboard.setting');
    
});

Route::controller(ProductController::class)
    ->group(function(){
        Route::get('/product', 'index')
            ->name('product.index');
            
        Route::post('/product', 'store')
            ->name('product.store');

    });


Route::get('/gategory', [CategoryController::class, 'index'])->name('category');


require __DIR__.'/auth.php';
