<?php

use Illuminate\Support\Facades\Route;
define('paginate',15);
Route::pattern('id','[0-9+]');

Route::group(['middleware'=>'Admin','prefix'=>'admin','namespace'=>'BackEnd'],function (){

    Route::get('home','HomePageAdminController')->name('dashboard.home');
    Route::get('all-doctors','DoctorController')->name('show-all-doctors');
    Route::get('add/new/doctor','DoctorController@addNewDoctorForm')->name('add-doctor-form');
    Route::post('add/new/doctor','DoctorController@addNewDoctor')->name('add-doctor');
    Route::get('delete/doctor/{id}','DoctorController@deleteDoctor')->name('delete-doctor');
    Route::get('edit/doctor/{id}','DoctorController@editDoctor')->name('edit-doctor');
    Route::post('update/doctor/{id}','DoctorController@updateDoctor')->name('update-doctor');
    Route::get('all-departments','DepartmentController')->name('show-all-departments');
    Route::get('delete/department/{id}','DepartmentController@deleteDepartment')->name('delete-department');
    Route::get('edit/department/{id}','DepartmentController@editDepartment')->name('edit-department');
    Route::post('update/department/{id}','DepartmentController@updateDepartment')->name('update-department');
    Route::get('add/new/department','DepartmentController@addNewDepartmentForm')->name('add-department-form');
    Route::post('add/new/department','DepartmentController@addNewDepartment')->name('add-department');
    Route::get('all-doctors/department/{id}','DepartmentController@showDoctorDepartment')->name('doctors-department');
    Route::get('add/new/gallery','GalleryController@index')->name('add-gallery-form');
    Route::post('upload/gallery','GalleryController@upload')->name('gallery-upload');
    Route::get('show/gallery','GalleryController@show')->name('gallery-show');
    Route::get('delete/gallery/{id}','GalleryController@deleteGallery')->name('gallery-delete');
    Route::get('change/gallery/status/{id}','GalleryController@changeStatus')->name('change-status');
    Route::get('add/new/post','BlogController@addNewPostForm')->name('add-post-form');
    Route::post('add/new/post','BlogController@addNewPost')->name('add-post');
    Route::get('all-posts','BlogController')->name('show-all-posts');
    Route::get('delete/post/{id}','BlogController@deletePost')->name('delete-post');
    Route::get('edit/post/{id}','BlogController@editPost')->name('edit-post');
    Route::post('update/post/{id}','BlogController@updatePost')->name('update-post');
    Route::get('add/about-us-information','AboutController@addAboutForm')->name('add-about-information');
    Route::post('about-us-information','AboutController@addInformationAbout')->name('add-information');
    Route::get('about-us-information/show','AboutController')->name('show-information');
    Route::get('about-us-information/delete/{id}','AboutController@delete')->name('delete-information');
    Route::get('edit/information-about-us/{id}','AboutController@editAbout')->name('edit-about');
    Route::post('update/about/{id}','AboutController@updateAbout')->name('update-about');

});











/*['register'=>false] by define this route you can ignore route register */
Auth::routes();

Route::group(['namespace'=>'FrontEnd'],function (){

    Route::get('/','HomePageController')->name('site.home');
});



