<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaticPagesController extends Controller
{
    public function home()
    {
        $option = 'A';
       for($i=1;$i<=4;$i++) {
            echo $option++."<br>";
            echo sprintf('%05d',$i);
       }

       $data = explode(',','A,B,C');
       dump($data);

       $info = Db::table('zd_shop')->get();
       foreach($info as $val) {
            echo $info->telphone;
       }
       dump($info);
       //mysql 数据结构优化
       //整型可以存储int数据类型，
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
