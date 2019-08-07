<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::resource('/', 'LandingPageController');
Route::post('/register', 'LandingPageController@registerteam')->name('register-team');


require('admin.php');
require('team.php');