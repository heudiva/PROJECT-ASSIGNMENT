<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Setting\SettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;

Route::get('/s', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    return view('test');
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
