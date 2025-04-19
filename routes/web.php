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


Route::get('/index', function () {
    return view('index');
})->name('index');


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('test', [TestController::class, 'index'])->name('test');





Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});









require __DIR__.'/auth.php';
require_once __DIR__.'/admin.php';
