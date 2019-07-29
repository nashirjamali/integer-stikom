<?php

Route::name('admin.')->group(function () {
    Route::group([

        // 'middleware'    => ['auth','checkRole:Admin'],

        // 'middleware'    => 'auth',
    
      ], function () {

        Route::get('admin', function () {
            return View::make('admin.dashboard-admin');
        })->name('dashboard-admin');

    });
});
