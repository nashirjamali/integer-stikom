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
        Route::resource('admin/submission', 'Admin_SubmissionController');
        Route::resource('admin/admin-payment','Admin_PaymentController');

    });
});

Route::name('admin.')->group(function () {
    Route::group([

        'middleware'    => ['auth','userRole','checkRole:admin'],

        // 'middleware'    => 'auth',
    
      ], function () {


        Route::resource('admin/commite', 'CreateCommite');
        Route::resource('admin/delete', 'DeleteFile');

    });
});
