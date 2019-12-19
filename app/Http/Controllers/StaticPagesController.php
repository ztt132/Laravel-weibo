<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        $option = 'A';
       for($i=1;$i<=4;$i++) {
            echo $option++."<br>";
            echo sprintf('%03d',$i);
       }

       $data = explode(',','A,B,C');
       dump($data);
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

    public function about2()
    {
        return $this->error($this->display());
    }

    public function about3()
    {
        $sql = "select * from user a left join user_log b on a.id = b.uid group by add_time order by id DESC limit 10";
        $this->db_retail = $db;
        $result = $db->query($sql);
        dump($result);
    }
}
