<?php

use Illuminate\Support\Facades\Route;

Route::name('team.')->group(function () {
    Route::group([
      

        'middleware'    => ['auth','checkRole:team'],
    
      ], function () {


        Route::get( 'team', 'TeamController@index' )->name('team');
        Route::post( 'team/store/', 'TeamController@store')->name('participants.store');
        Route::put( 'team/update/{id}', 'TeamController@update')->name('participants.update');
        Route::get( 'team/payments', 'TeamController@payments' );
        Route::get( 'team/submission', 'TeamController@submission' );
        Route::get( 'team/video', 'TeamController@video' );
        Route::post( 'team/video/store', 'TeamController@videostore' )->name('video.store');
        Route::get( 'team/setting', 'TeamController@setting')->name('setting.index');
        Route::put( 'team/setting/store', 'TeamController@settingstore' )->name('setting.store');

        Route::resource('team/submission','Submission_teamController');
        Route::resource('team/payments','PaymentController');

        Route::delete('/team/destroy/{id}', 'TeamController@destroy')->name('participants.destroy'); 

        
        Route::get('/team/hapus/{id}', 'TeamController@hapus');


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
