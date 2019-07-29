<?php

Route::name('admin.')->group(function () {
    Route::group([

        // 'middleware'    => ['auth','checkRole:Admin'],
        // 'namespace'     => 'Frontend'
    
      ], function () {

        Route::get('admin', function () {
            return View::make('admin.dashboard-admin');
        })->name('dashboard-admin');

    });
});
