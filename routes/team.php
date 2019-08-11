<?php

Route::name('team.')->group(function () {
    Route::group([
      

        'middleware'    => ['auth','checkRole:team'],
    
      ], function () {


        Route::get( 'team', 'TeamController@index' )->name('team');
        Route::put( 'team/update/{id}', 'TeamController@update')->name('participants.update');
        Route::get( 'team/payments', 'TeamController@payments' );
        Route::get( 'team/submission', 'TeamController@submission' );
        Route::get( 'team/video', 'TeamController@video' );
        Route::post( 'team/video/store', 'TeamController@videostore' )->name('video.store');
        Route::get( 'team/setting', 'TeamController@setting')->name('setting.index');
        Route::put( 'team/setting/store', 'TeamController@settingstore' )->name('setting.store');

        Route::resource('team/submission','Submission_teamController');
        
        
    });
});
