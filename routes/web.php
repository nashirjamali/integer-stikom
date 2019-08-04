<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::resource('/', 'LandingPageController');
Route::post('/registerteam', 'LandingPageController@registerteam')->name('registerteam');


require('admin.php');
require('team.php');