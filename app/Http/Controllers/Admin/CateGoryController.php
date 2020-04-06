<?php
namespace App\Http\Controller\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateGoryController extends Controller
{
    //递归实现
    public function getTree($data,$pid=0)
    {
        //数据结构是指相互之间存在的一种或多种关系的数据元素的集合和该集合中数据元素之间的关系
        $data = new Data();

        $redis = new Redis();
        $redis->setnx('上锁');
        //设置key过期时间
        $redis->expoire($key,'3600');

    }

    public function getShare($request)
    {
        $request->url;
    }


}
