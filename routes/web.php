<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\CheckoutContreller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::get('/testimonial',[HomeController::class,'tesmonial'])->name('testimonial');
Route::get('/travelpackage',[HomeController::class,'travelpackage'])->name('travelpackage');
Route::get('/visa',[HomeController::class,'visa'])->name('visa');
Route::get('/passport',[HomeController::class,'passport'])->name('passport');
Route::get('/checkout', [CheckoutContreller::class, 'index'])->name('checkout');
Route::get('check-out/success',[CheckoutContreller::class,'success'])->name('checkout-success');


Route::prefix('admin')
->middleware(['auth','admin'])
->group(function () {
    Route::get('/', [DashboardController::class,'index'])
    ->name('dashboard');

    Route::resource('travel-package', TravelPackageController::class);

    Route::resource('gallery',GalleryController::class);
    Route::resource('transaction',TransactionController::class);
    
    
    
});

Auth::routes(['verify'=>true]);
