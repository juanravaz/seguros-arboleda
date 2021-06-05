<?php

use App\Http\Controllers\CarInsuranceController;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InsuranceController;
use App\Models\CarInsurance;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('auth/{provider}', [App\Http\Controllers\Auth\SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
Route::get('auth/{provider}/callback', [App\Http\Controllers\Auth\SocialAuthController::class, 'handleProviderCallback']);

Auth::routes();

Route::get('/logueo', [App\Http\Controllers\WelcomeController::class, 'logueo'])->name('logueo');
Route::get('/registro', [App\Http\Controllers\WelcomeController::class, 'registro'])->name('registro');
Route::get('/carinsurance', [App\Http\Controllers\WelcomeController::class, 'carinsurance'])->name('carinsurance');
Route::get('/lifeinsurance', [App\Http\Controllers\WelcomeController::class, 'lifeinsurance'])->name('lifeinsurance');
Route::get('/homeinsurance', [App\Http\Controllers\WelcomeController::class, 'homeinsurance'])->name('homeinsurance');

Route::get('/carcreate', [App\Http\Controllers\WelcomeController::class, 'carcreate'])->name('carcreate');
Route::get('/homecreate', [App\Http\Controllers\WelcomeController::class, 'homecreate'])->name('homecreate');
Route::get('/lifecreate', [App\Http\Controllers\WelcomeController::class, 'lifecreate'])->name('lifecreate');

Route::get('cars/get/{brand}' ,  [App\Http\Controllers\WelcomeController::class, 'fetch'])->name('carmodels');

Route::middleware(['auth', 'admin'])->group(function () {

    //RUTAS ADMINISTRATIVAS PARA LOS USUARIOS
    Route::get('users',[UserController::class,'index'])->name('admin.user.index');
    Route::get('users/create', [UserController::class,'create'])->name('admin.user.create');
    Route::post('users/store' , [UserController::class, 'store'])->name('admin.user.store');
    Route::get('users/{id}/edit',[UserController::class,'edit'])->name('admin.user.edit');
    Route::put('users/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('users/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');

    //RUTAS ADMINISTRATIVAS PARA LOS SEGUROS

    //HOME INSURANCE
    Route::get('/home/insurances', [\App\Http\Controllers\HomeInsuranceController::class , 'index'])->name('admin.homeinsurance.home');
    Route::get('/home/insurances/create', [\App\Http\Controllers\HomeInsuranceController::class,'create'])->name('admin.homeinsurance.create');
    Route::post('home/insurances/store' , [\App\Http\Controllers\HomeInsuranceController::class, 'store'])->name('admin.homeinsurance.store');

    Route::get('/home/insurances/edit/{id}', [\App\Http\Controllers\HomeInsuranceController::class,'edit'])->name('admin.homeinsurance.edit');
    Route::put('/home/insurances/update/', [\App\Http\Controllers\HomeInsuranceController::class,'update'])->name('admin.homeinsurance.update');

    Route::delete('/home/insurances/destroy/', [\App\Http\Controllers\HomeInsuranceController::class,'destroy'])->name('admin.homeinsurance.destroy');

    //CAR INSURANCE
    Route::get('/car/insurances', [\App\Http\Controllers\CarInsuranceController::class , 'index'])->name('admin.carinsurance.home');
    Route::get('/car/insurances/create', [\App\Http\Controllers\CarInsuranceController::class,'create'])->name('admin.carinsurance.create');
    Route::post('car/insurances/store' , [\App\Http\Controllers\CarInsuranceController::class, 'store'])->name('admin.carinsurance.store');

    Route::get('/car/insurances/edit/{id}', [\App\Http\Controllers\CarInsuranceController::class,'edit'])->name('admin.carinsurance.edit');
    Route::put('/car/insurances/update/', [\App\Http\Controllers\CarInsuranceController::class,'update'])->name('admin.carinsurance.update');

    Route::delete('/car/insurances/destroy/', [\App\Http\Controllers\CarInsuranceController::class,'destroy'])->name('admin.carinsurance.destroy');

    //LIFE INSURANCE
    Route::get('/life/insurances', [\App\Http\Controllers\LifeInsuranceController::class , 'index'])->name('admin.lifeinsurance.home');
    Route::get('/life/insurances/create', [\App\Http\Controllers\LifeInsuranceController::class,'create'])->name('admin.lifeinsurance.create');
    Route::post('life/insurances/store' , [\App\Http\Controllers\LifeInsuranceController::class, 'store'])->name('admin.lifeinsurance.store');

    Route::get('/life/insurances/edit/{id}', [\App\Http\Controllers\LifeInsuranceController::class,'edit'])->name('admin.lifeinsurance.edit');
    Route::put('/life/insurances/update/', [\App\Http\Controllers\LifeInsuranceController::class,'update'])->name('admin.lifeinsurance.update');

    Route::delete('/life/insurances/destroy/', [\App\Http\Controllers\LifeInsuranceController::class,'destroy'])->name('admin.lifeinsurance.destroy');


    //REPORTS

    Route::get('/reports', [\App\Http\Controllers\ReportController::class , 'index'])->name('admin.report.home');
    Route::get('reports/create', [\App\Http\Controllers\ReportController::class,'create'])->name('admin.report.create');


    Route::get('/reports/edit/{id}', [\App\Http\Controllers\ReportController::class,'edit'])->name('admin.report.edit');
    Route::put('/reports/update/', [\App\Http\Controllers\ReportController::class,'update'])->name('admin.report.update');

    Route::delete('/reports/destroy/}', [\App\Http\Controllers\ReportController::class,'destroy'])->name('admin.report.destroy');
});

Route::middleware(['auth', 'technician'])->group(function () {
    Route::get('/reports/edit/{id}', [\App\Http\Controllers\ReportController::class,'edit'])->name('admin.report.edit');
    Route::put('/reports/update/', [\App\Http\Controllers\ReportImageController::class,'update'])->name('admin.report.update');
    Route::delete('/reports/images/destroy/', [\App\Http\Controllers\ReportImageController::class,'destroy'])->name('admin.image.destroy');

});

Route::middleware(['auth'])->group(function (){
    Route::get('/myInsurances', [\App\Http\Controllers\InsuranceController::class , 'allUserInsurances'])->name('admin.reports.myinsurances');
    Route::get('/myInsurances/invoice/{id}', [\App\Http\Controllers\InsuranceController::class,'invoice'])->name('admin.reports.invoice');
    Route::get('/reports', [\App\Http\Controllers\ReportController::class , 'index'])->name('admin.report.home');
    Route::get('report/create/{id}', [\App\Http\Controllers\ReportController::class,'create'])->name('admin.reports.create');
    Route::post('reports/store' , [\App\Http\Controllers\ReportController::class, 'store'])->name('admin.report.store');
    Route::get('reports/pdf/{id}' , [\App\Http\Controllers\ReportController::class, 'pdf'])->name('admin.report.pdf');
    Route::get('reports/pdf/print' , [\App\Http\Controllers\ReportController::class, 'print'])->name('admin.report.pdf.print');

    Route::get('/email/{id}', [\App\Http\Controllers\ReportController::class , 'email'])->name('admin.email');

});

Route::get('/paypal/pay', [\App\Http\Controllers\PaymentController::class,'payWithPayPal'])->name('paypalPay');
Route::get('/paypal/status', [\App\Http\Controllers\PaymentController::class,'payPalStatus']);
Route::get('/results',[\App\Http\Controllers\TestController::class,'results'])->name('results');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




