<?php

Route::name('team.')->group(function () {
    Route::group([
      
        'middleware'    => 'auth',
    
      ], function () {


        Route::get( 'team', 'TeamController@index' );
        Route::get( 'team/payments', 'TeamController@payments' );
        Route::get( 'team/submission', 'TeamController@submission' );
        Route::get( 'team/video', 'TeamController@video' );

    });
});
