<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController');
});

