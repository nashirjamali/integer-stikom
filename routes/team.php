<?php

Route::name('team.')->group(function () {
    Route::group([
      
        'middleware'    => 'auth',
    
      ], function () {


        Route::get( 'team', 'TeamController@index' );
        Route::get( 'team/payments', 'TeamController@payments' );
        Route::get( 'team/submission', 'TeamController@submission' );
        Route::get( 'team/video', 'TeamController@video' );

        Route::resource('team/submission','Submission_teamController');


        // Route::get('team', function () {
        //     return View::make('team.dashboard-peserta');
        // })->name('dashboard-peserta');

        // Route::get('team/payments', function () {
        //     return View::make('team.payments');
        // })->name('payments');

        // Route::get('team/submission', function () {
        //     return View::make('team.submission');
        // })->name('submission');

        // Route::get('team/video', function () {
        //     return View::make('team.video');
        // })->name('video');
        
    });
});
