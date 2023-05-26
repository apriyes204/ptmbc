<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Admin\AssetController;
// use App\Http\Controllers\Admin\EmployeeController;
// use App\Http\Controllers\Admin\DepartemenController;
// use App\Http\Controllers\Admin\TypeAssetController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')
->middleware(['auth', 'admin'])
->namespace('App\Http\Controllers\Admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('Dashboard');
        Route::resource('/karyawan', 'EmployeeController');
        Route::resource('/departemen', 'DepartemenController');
        Route::resource('/asset', 'AssetController');
        Route::resource('/type', 'TypeAssetController');
    });

Route::get('/', function () {
    return view('welcome');
    // return redirect()->route('Dashboard');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
