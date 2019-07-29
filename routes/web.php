<?php
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


require('admin.php');
require('team.php');