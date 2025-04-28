<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//admin
Route::group(['prefix' => 'admin/' , 'middleware' => ['auth','admin']], function(){

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


route::get('admin/dashboard',[HomeController::class,'index'])
->middleware('auth','admin')
->name('admin.dashboard');


Route::controller(ProfileController::class)
->name('admin.profile.')
->prefix('profile')
->group(function(){
    Route::get('edit', 'edit')->name('edit');
    Route::patch('update', 'update')->name('update');
    Route::delete('destroy', 'destroy')->name('destroy');
    Route::post('store', 'imageStore')->name('image.store');
});

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

        
Route::controller(UserController::class)
->prefix('dashboard/user')
->name('admin.user.')
->group(function () {
    Route::get('users', 'index')->name('index');
    Route::post('store', 'store')->name('store');
    Route::post('edit', 'edit')->name('edit');
    Route::post('update', 'update')->name('update');
    Route::post('delete', 'delete')->name('delete');
    Route::post('destroy', 'destroy')->name('destroy');

    Route::post('delete-users', 'delete_users')->name('deletes');
  
});

Route::middleware('auth')->group(function () {
    route::get('/dashboard/setting',[SettingController::class,'index'])->name('admin.dashboard.setting');
    
});


// Route::controller(ProductController::class)
// // ->middleware('auth')
// ->name('admin.')
// ->group(function () {
//     Route::get('product', 'index')->name('product.index');
//     Route::post('product/store', 'store')->name('product.store'); // Added proper naming & structure
//     Route::post('product/edit', 'edit')->name('product.edit'); // Added proper naming & structure
//     Route::post('product/update', 'update')->name('product.update'); // Added proper naming & structure
//     Route::post('product/delete', 'delete')->name('product.delete'); // Added proper naming & structure
//     Route::post('product/destroy', 'destroy')->name('product.destroy'); // Added proper naming & structure
// });

Route::controller(CategoryController::class)
->name('admin.')
->group(function () {
    Route::get('category', 'index')->name('category.index');
    Route::post('category/store', 'store')->name('category.store'); // Added proper naming & structure
    Route::post('category/edit', 'edit')->name('category.edit'); // Added proper naming & structure
    Route::post('category/update', 'update')->name('category.update'); // Added proper naming & structure
    Route::post('category/delete', 'delete')->name('category.delete'); // Added proper naming & structure
    Route::post('category/destroy', 'destroy')->name('category.destroy'); // Added proper naming & structure
});
Route::post('/category/get', [CategoryController::class, 'getCategory']);
Route::get('/categories', [CategoryController::class, 'getCategories'])->name('categories.get');


// ---------------------------------------- Sey
Route::controller(ProductController::class)
->name('admin.')
->group(function () {
    Route::get('product', 'index')->name('product.index');
    Route::get('/product/create', 'create')->name('product.create');
    Route::post('/product/store', 'store')->name('product.store');
    Route::delete('/product/{id}', 'destroy')->name('product.destroy');
    Route::get('product/{id}', 'show');
    Route::get('/product/edit', 'edit')->name('product.edit');
    Route::post('/product/update', 'update')->name('product.update');
    Route::delete('/product/{id}', 'destroy')->name('product.destroy');
    Route::post('product/destroy', 'destroy')->name('product.delete-multiple'); // Added proper naming & structure
});


Route::controller(MessageController::class)
->name('message.')
->group(function () {
    Route::get('message', 'index')->name('index');
  
});

Route::controller(SupplierController::class)
->name('admin.')
->group(function()
{
    Route::get('suppliers', 'index')->name('supplier.index');
});


});




