<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //获取用户数据
    public function get()
    {
        $data = ['山茶花润肤油','肥皂','水果'];
        dump($data);
    }
}
