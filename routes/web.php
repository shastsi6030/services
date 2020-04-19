<?php

use Illuminate\Support\Facades\Route;

//resources Routes

Route::resource('app/cmsadmin/admin/sliders','SliderController');
Route::resource('app/cmsadmin/admin/aboutus','AboutUsController');



Route::get('/','IndexController@main');
Route::get('/admin','ServiceController@admin');
Route::post('ajax/{method}','AjaxController@main');
Auth::routes();

Route::get('app/cmsadmin/admin', 'HomeController@index')->name('home');
