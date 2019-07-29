<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin', function () {
//     return View::make('admin.layouts');
// });

// Route::group('team',function(){
//     Route::get('layout',function(){
//         return View::make('team.layout');
//     });

// });

Route::name('team.')->group(function () {
    Route::get('team', function () {
        return View::make('team.dashboard-peserta');
    })->name('dashboard-peserta');
    Route::get('team/submission', function () {
        return View::make('team.submission');
    })->name('submission');
});

Route::name('admin.')->group(function () {
    Route::get('admin', function () {
        return View::make('admin.dashboard-admin');
    })->name('dashboard-admin');
});
