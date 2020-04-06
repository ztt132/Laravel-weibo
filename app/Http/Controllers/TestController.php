<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;
use App\Goods;
use App\Facades\TestClass;

class TestController extends Controller
{
    public function index()
    {
        app('TestClass')->do();
        app('Test')->do();
    }

    public function get()
    {
        dd('222');
    }

    //加密
    public function encode()
    {
        $orders = new Order();
        $orders->get();
    }

    //解密
    public function decode()
    {

    }

    public function testMain()
    {
        $data = [2,1,3,4,66,44,22,11,67,90];
        //冒泡排序
        $arr = $this->bubbleSort($data);
        //快速排序
        // $arr = $this->quickSort($data);

        dump($arr);
    }

    // 算法练习
    #冒泡排序
    public function bubbleSort($data)
    {
        $count = count($data);
        if($count <= 0) return false;
        for($i=0; $i<=$count; $i++) {
            for($j=$count-1; $j>$i; $j--) {
                if($data[$j-1] > $data[$j]) {
                    $temp = $data[$j-1];
                    $data[$j-1] = $data[$j];
                    $data[$j] = $temp;
                }
            }
        }
        return $data;
    }

    #快速排序
    public function quickSort($data)
    {
        $count = count($data);
        if($count < 2) return $data;

        $key = $data[0];
        $left_arr = $right_arr = [];



        for($i=1; $i<$count; $i++) {
            if($data[$i] < $key)
                $left_arr[] = $data[$i];
            else
                $right_arr[] = $data[$i];
        }

        $left_arr = $this->quickSort($left_arr);
        $right_arr = $this->quickSort($right_arr);


        return array_merge($left_arr,array($key),$right_arr);
    }

    public function socketIO()
    {

    }
}
