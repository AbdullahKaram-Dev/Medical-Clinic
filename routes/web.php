<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'Admin','prefix'=>'admin','namespace'=>'BackEnd'],function (){

    Route::get('home','HomePageAdminController')->name('dashboard.home');

});











/* ['register'=>false] by define this route you can ignore route register */
Auth::routes();

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController');
});



