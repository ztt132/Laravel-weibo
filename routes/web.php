<?php

Route::get('/',function (){
    return view('layouts.default');
});

Route::get('index','TestController@index');

Route::get('test',function (){
    $num = 10000000;
    $stime = microtime(true);
    for($i=1; $i<=$num; $i++) {

    }
    $etime = microtime(true);
    dd($etime - $stime);
});







