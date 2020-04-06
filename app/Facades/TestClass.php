<?php


namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TestClass extends Facade
{
    protected static function getFacadeAccessor()
    {
       return 'test';
    }

    public function do(){
        $num = 10000000;
        $stime = microtime(true);
        for($i=1; $i<=$num; $i++) {

        }
        $etime = microtime(true);
        dd($etime - $stime);
    }
}
