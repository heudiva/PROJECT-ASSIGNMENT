<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
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

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware('auth','admin')->name('admin.dashboard');
route::get('/dashboard/home',[HomeController::class,'main'])->name('admin.dashboard.main');

route::get('/dashboard/setting',[SettingController::class,'index'])->name('admin.dashboard.setting');

route::get('/admin/blog/menu',[BlogController::class,'menu'])->name('admin.blog.menu');
Route::get('/admin/blog/menu/create', [BlogController::class, 'create'])->name('admin.blog.menu.create');

Route::prefix('/admin')->name('admin.blog.menu.')->group(function () {
    route::controller(BlogController::class)->group(function(){
        route::post('/blog/menu/store', 'store')->name('store');
        route::get('/blog/menu/{id}', 'edit')->name('edit');
        route::put('/blog/menu/{id}', 'update')->name('update');
        route::get('admin/blog/menu/{id}', 'destroy')->name('destroy');
    });
});




route::get('/wk-blog',[BlogController::class,'index'])->name('blog');
route::get('/admin/blog/article',[BlogController::class,'article'])->name('admin.blog.article');
Route::get('/admin/blog/article/create', [BlogController::class, 'article_create'])->name('admin.blog.article.create');

Route::prefix('/admin')->name('admin.blog.article.')->group(function () {
    route::controller(BlogController::class)->group(function(){
        route::post('/blog/article/store', 'store_article')->name('store');
        route::get('/blog/article/{id}', 'edit_article')->name('edit');
        route::put('/blog/article/{id}', 'update_article')->name('update');
        route::delete('admin/article/blog/{id}', 'destroy_article');
    });
});








Route::prefix('/student')->group(function () {
    route::controller(StudentController::class)->group(function(){
        route::get('/all-student', 'index')->name('students');
        route::get('/student-detail', 'student_detail')->name('studentd');
        route::post('/student/store', 'store')->name('student.store');
        route::get('/student/{id}', 'edit')->name('student.edit');
        route::put('/student/{id}', 'update')->name('admin.student.update');
        route::delete('admin/student/{id}', 'destroy')->name('admin.student.destroy');


        
    });
});



Route::post('login', [AuthenticatedSessionController::class, 'store']);
route::get('/student/login', [StudentController::class,'login'])->name('student.login');
