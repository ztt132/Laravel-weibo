<?php

//后台模块
Route::group(['namespace'=>'admin'],function () {
    Route::get('index','IndexController@index');
});

 ?>
