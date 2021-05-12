<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin/index');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('users',[UserController::class,'index'])->name('admin.user.index');
    Route::get('users/create', [UserController::class,'create'])->name('admin.user.create');
    Route::post('users/store' , [UserController::class, 'store'])->name('admin.user.store');
    Route::get('users/{id}/edit',[UserController::class,'edit'])->name('admin.user.edit');
    Route::put('users/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('users/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');
});

Route::middleware(['auth', 'technician'])->group(function () {

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
