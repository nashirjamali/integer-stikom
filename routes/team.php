<?php

Route::name('team.')->group(function () {
    Route::group([

        // 'middleware'    => ['auth','checkRole:Admin'],
        // 'namespace'     => 'Frontend'
    
      ], function () {

        Route::get('team', function () {
            return View::make('team.dashboard-peserta');
        })->name('dashboard-peserta');
        
        Route::get('team/submission', function () {
            return View::make('team.submission');
        })->name('submission');
        
    });
});
