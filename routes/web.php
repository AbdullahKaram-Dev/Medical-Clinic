<?php

use Illuminate\Support\Facades\Route;
//['register'=>false]


Auth::routes();

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController');
});
