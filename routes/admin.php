<?php

Route::name('admin.')->group(function () {
    Route::group([

        'middleware'    => ['auth','userRole','checkRole:admin,commite'],

        // 'middleware'    => 'auth',
    
      ], function () {

        Route::get('admin', function () {
            return View::make('admin.dashboard-admin');
        })->name('dashboard-admin');

        Route::get('admin/list-tim', function () {
            return View::make('admin.list-tim');
        })->name('list-tim');
        
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
