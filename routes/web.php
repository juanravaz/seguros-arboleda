<?php

use App\Http\Controllers\InsuranceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin/index');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {

    //RUTAS ADMINISTRATIVAS PARA LOS USUARIOS
    Route::get('users',[UserController::class,'index'])->name('admin.user.index');
    Route::get('users/create', [UserController::class,'create'])->name('admin.user.create');
    Route::post('users/store' , [UserController::class, 'store'])->name('admin.user.store');
    Route::get('users/{id}/edit',[UserController::class,'edit'])->name('admin.user.edit');
    Route::put('users/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('users/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');

    //RUTAS ADMINISTRATIVAS PARA LOS SEGUROS
    Route::get('/home/insurances', [\App\Http\Controllers\HomeInsuranceController::class , 'index'])->name('admin.homeinsurance.home');
    Route::get('/home/insurances/create', [\App\Http\Controllers\HomeInsuranceController::class,'create'])->name('admin.homeinsurance.create');
    Route::post('home/insurances/store' , [\App\Http\Controllers\HomeInsuranceController::class, 'store'])->name('admin.homeinsurance.store');

    Route::get('/home/insurances/edit/{id}', [\App\Http\Controllers\HomeInsuranceController::class,'edit'])->name('admin.homeinsurance.edit');
    Route::put('/home/insurances/update/', [\App\Http\Controllers\HomeInsuranceController::class,'update'])->name('admin.homeinsurance.update');

    Route::delete('/home/insurances/destroy/', [\App\Http\Controllers\HomeInsuranceController::class,'destroy'])->name('admin.homeinsurance.destroy');

});

Route::middleware(['auth', 'technician'])->group(function () {

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


