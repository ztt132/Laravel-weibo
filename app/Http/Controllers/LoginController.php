<?php

namespace App\Http\Controllers;

use App\JwtAuth\JwtToken;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view('staticPages.login');
    }

    //登录
    public function login(Request $request)
    {
        if(Request::isMethod('post')) {
            $user_data = Request::all();
            //登录验证
            $user = JwtToken::verifyToken(1);

            dd($user_data);
        }else{
            return view('staticPages.login');
        }

    }

}
