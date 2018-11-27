<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    return view('/work/index');
});
Route::get('/spec',function(){
    return view('/work/spec');
});
Route::resource('admin/reel','ReelController');
Route::resource('admin/line','LineController');
Route::resource('admin/rod','RodController');
Route::resource('admin/hook','HookController');
Route::resource('admin/img','ImageController');
Route::resource('admin/photo','PhotoController');