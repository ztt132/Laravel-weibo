<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticPagesController extends Controller
{
    public function home(Request $request)
    {
        
    }

    public function sortCount()
    {
        $data = [1,2,22,11,1,8,22,6,9];
        $left = count($data);

    }

    public function help()
    {
        return view('staticPages/help');
    }

    public function about()
    {
        // $this->display();
        return view('staticPages/about');
    }

    //投票控制器
    public function about2()
    {
        $data = $_GET['user_id'];
        if($data){
            return '123';
        }

    }

    public function about3()
    {
        Db::start();
        $map = [];
        for($i=1;$i<=10000;$i++) {
            $data = [
                'name' => $i,
                'nickname' => 'nickname'.$i,
                'img_url' => 'img_url'.$i,
            ];

           $map[] = Db::table('zd_shop')->insert($data);
        }
        if(!empty($map) && count($map)>=10000){
            dump('插入成功');
            Db::commit();
        }else{
            Db::rollback();
        }
    }

    public static function getOne($id){
        
    }
}

//unset 只会取消引用 不回销毁空间
dump($_SERVER['SERVER_ADDR']);//服务端IP
dump($_SERVER['SERVER_NAME']);
dump($_SERVER['REQUEST_TIME']);
dump($_SERVER['QUERY_STRING']);
dump($_SERVER['REMOTE_ADDR']);//客户端IP
dump($_SERVER['REQUEST_URI']);
dump($_SERVER['HTTP_USER_AGENT']);






