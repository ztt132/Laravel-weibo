<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class StaticPagesController extends Controller
{

    public function home(Request $request)
    {
//        return response(['code'=>400,'message'=>'success']);
         return view('staticPages.home');
    }

    public function help(Request $request)
    {
        return view('staticPages.help');
    }

    public function about()
    {
        // $this->display();
        return view('staticPages.about');
    }

    public function test()
    {
//        Redis::set('ztt','xss');
        dd(Redis::get('zhangtaotao'));
    }



}






