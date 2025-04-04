<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


route::get('admin/dashboard',[HomeController::class,'index'])
->middleware('auth','admin')
->name('admin.dashboard');


Route::controller(UserController::class)
->middleware('auth')
->prefix('admin/')
->name('user.')
->group(function () {
    Route::get('users', 'index')->name('index');
    Route::post('users', 'store')->name('store');
    Route::post('edit', 'edit')->name('edit');
    Route::post('update', 'update')->name('update');
    Route::post('delete', 'delete')->name('delete');
    Route::post('destroy', 'destroy')->name('destroy');
  
});


Route::middleware('auth')->group(function () {
    route::get('/dashboard/setting',[SettingController::class,'index'])->name('admin.dashboard.setting');
    
});


Route::controller(CategoryController::class)
->middleware('auth')
->group(function () {
    Route::get('category', 'index')->name('category.index');
    Route::post('category/store', 'store')->name('category.store'); // Added proper naming & structure
    Route::post('category/edit', 'edit')->name('category.edit'); // Added proper naming & structure
    Route::post('category/update', 'update')->name('category.update'); // Added proper naming & structure
    Route::post('category/delete', 'delete')->name('category.delete'); // Added proper naming & structure
    Route::post('category/destroy', 'destroy')->name('category.destroy'); // Added proper naming & structure
});



Route::controller(MessageController::class)
->middleware('auth')
->name('message.')
->group(function () {
    Route::get('message', 'index')->name('index');
  
});



Route::controller(SupplierController::class)
->middleware('auth')
->name('supplier.')
->group(function () {
    Route::get('supplier', 'index')->name('index');
  
});



Route::controller(ProductController::class)
    ->group(function(){
        Route::get('/product', 'index')
            ->name('product.index');
            
        Route::post('/product', 'store')
            ->name('product.store');

});
