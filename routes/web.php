<?php

use Illuminate\Support\Facades\Route;
define('paginate',15);
/*Route::pattern('id','[0-9+]');*/

Route::group(['middleware'=>'Admin','prefix'=>'admin','namespace'=>'BackEnd'],function (){

    Route::get('home','HomePageAdminController')->name('dashboard.home');
    Route::get('all-doctors','DoctorController')->name('show-all-doctors');
    Route::get('add/new/doctor','DoctorController@addNewDoctorForm')->name('add-doctor-form');
    Route::post('add/new/doctor','DoctorController@addNewDoctor')->name('add-doctor');
    Route::get('delete/doctor/{users:name}','DoctorController@deleteDoctor')->name('delete-doctor');
    Route::get('edit/doctor/{users:name}','DoctorController@editDoctor')->name('edit-doctor');
    Route::post('update/doctor/{users:name}','DoctorController@updateDoctor')->name('update-doctor');

});











/*['register'=>false] by define this route you can ignore route register */
Auth::routes();

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController')->name('site.home');
});



