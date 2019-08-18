<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::resource('/', 'LandingPageController');
Route::post('/register-team', 'LandingPageController@registerteam')->name('register-team');


require('admin.php');
require('team.php');