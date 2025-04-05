<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Setting\SettingController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('test', [TestController::class, 'index'])->name('test');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});


Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});










require __DIR__.'/auth.php';
