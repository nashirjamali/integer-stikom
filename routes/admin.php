<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::group([

        'middleware'    => ['auth','userRole','checkRole:admin,commite'],

        // 'middleware'    => 'auth',
    
      ], function () {

        Route::get('admin', function () {
            return redirect('/admin/list-tim');
        });

        Route::resource('admin/list-tim', 'Admin_ListTimController');
        
        Route::get('admin/admin-detail', function () {
            return View::make('admin.admin-detail');
        })->name('admin-detail');


        Route::resource('admin/admin-payment','Admin_PaymentController');

    });
});

Route::name('admin.')->group(function () {
    Route::group([

        'middleware'    => ['auth','userRole','checkRole:admin'],

        // 'middleware'    => 'auth',
    
      ], function () {


        Route::get('admin/admin-submission', function () {
            return View::make('admin.admin-submission');
        })->name('admin-submission');
        

    });
});
