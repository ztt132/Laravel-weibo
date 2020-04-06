<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    private $file_path = '/Users/zhangtaotao/Code/weibo/a.txt';

    public function index(Request $request)
    {
        $data = [
            [
                'name'=>'技术1',
                'id'=>1,
                'pid'=>0
            ],
            [
                'name'=>'技术2',
                'id'=>2,
                'pid'=>0
            ],
            [
                'name'=>'技术3',
                'id'=>3,
                'pid'=>0
            ],
            [
                'name'=>'技术4',
                'id'=>4,
                'pid'=>1
            ],
        ];
        dd($this->getTree($data));
    }

    public function getTree($data, $pid=0)
    {
        $result  = [];
        foreach ($data as $key=>$value){
            if ($value['pid'] == $pid){
                $value['son'] = $this->getTree($data,$value['id']);
                $result[] = $value;
            }
        }
        return $result;
    }


    function run($id)
    {
        $i = $id;
        $geji = '["X1,X11,X13,X5,X9","X1,X11,X13,X6,X9","X1,X11,X13,X7,X9","X1,X11,X13,X8,X9","X11,X13,X2,X5,X9","X11,X13,X2,X6,X9","X11,X13,X2,X7,X9","X11,X13,X2,X8,X9","X11,X13,X3,X5,X9","X11,X13,X3,X6,X9","X11,X13,X3,X7,X9","X11,X13,X3,X8,X9","X11,X13,X4,X5,X9","X11,X13,X4,X6,X9","X11,X13,X4,X7,X9","X11,X13,X4,X8,X9","X1,X11,X14,X5,X9","X1,X11,X14,X6,X9","X1,X11,X14,X7,X9","X1,X11,X14,X8,X9","X11,X14,X2,X5,X9","X11,X14,X2,X6,X9","X11,X14,X2,X7,X9","X11,X14,X2,X8,X9","X11,X14,X3,X5,X9","X11,X14,X3,X6,X9","X11,X14,X3,X7,X9","X11,X14,X3,X8,X9","X11,X14,X4,X5,X9","X11,X14,X4,X6,X9","X11,X14,X4,X7,X9","X11,X14,X4,X8,X9","X1,X12,X13,X5,X9","X1,X12,X13,X6,X9","X1,X12,X13,X7,X9","X1,X12,X13,X8,X9","X12,X13,X2,X5,X9","X12,X13,X2,X6,X9","X12,X13,X2,X7,X9","X12,X13,X2,X8,X9","X12,X13,X3,X5,X9","X12,X13,X3,X6,X9","X12,X13,X3,X7,X9","X12,X13,X3,X8,X9","X12,X13,X4,X5,X9","X12,X13,X4,X6,X9","X12,X13,X4,X7,X9","X12,X13,X4,X8,X9","X1,X12,X14,X5,X9","X1,X12,X14,X6,X9","X1,X12,X14,X7,X9","X1,X12,X14,X8,X9","X12,X14,X2,X5,X9","X12,X14,X2,X6,X9","X12,X14,X2,X7,X9","X12,X14,X2,X8,X9","X12,X14,X3,X5,X9","X12,X14,X3,X6,X9","X12,X14,X3,X7,X9","X12,X14,X3,X8,X9","X12,X14,X4,X5,X9","X12,X14,X4,X6,X9","X12,X14,X4,X7,X9","X12,X14,X4,X8,X9","X1,X10,X11,X13,X5","X1,X10,X11,X13,X6","X1,X10,X11,X13,X7","X1,X10,X11,X13,X8","X10,X11,X13,X2,X5","X10,X11,X13,X2,X6","X10,X11,X13,X2,X7","X10,X11,X13,X2,X8","X10,X11,X13,X3,X5","X10,X11,X13,X3,X6","X10,X11,X13,X3,X7","X10,X11,X13,X3,X8","X10,X11,X13,X4,X5","X10,X11,X13,X4,X6","X10,X11,X13,X4,X7","X10,X11,X13,X4,X8","X1,X10,X11,X14,X5","X1,X10,X11,X14,X6","X1,X10,X11,X14,X7","X1,X10,X11,X14,X8","X10,X11,X14,X2,X5","X10,X11,X14,X2,X6","X10,X11,X14,X2,X7","X10,X11,X14,X2,X8","X10,X11,X14,X3,X5","X10,X11,X14,X3,X6","X10,X11,X14,X3,X7","X10,X11,X14,X3,X8","X10,X11,X14,X4,X5","X10,X11,X14,X4,X6","X10,X11,X14,X4,X7","X10,X11,X14,X4,X8","X1,X10,X12,X13,X5","X1,X10,X12,X13,X6","X1,X10,X12,X13,X7","X1,X10,X12,X13,X8","X10,X12,X13,X2,X5","X10,X12,X13,X2,X6","X10,X12,X13,X2,X7","X10,X12,X13,X2,X8","X10,X12,X13,X3,X5","X10,X12,X13,X3,X6","X10,X12,X13,X3,X7","X10,X12,X13,X3,X8","X10,X12,X13,X4,X5","X10,X12,X13,X4,X6","X10,X12,X13,X4,X7","X10,X12,X13,X4,X8","X1,X10,X12,X14,X5","X1,X10,X12,X14,X6","X1,X10,X12,X14,X7","X1,X10,X12,X14,X8","X10,X12,X14,X2,X5","X10,X12,X14,X2,X6","X10,X12,X14,X2,X7","X10,X12,X14,X2,X8","X10,X12,X14,X3,X5","X10,X12,X14,X3,X6","X10,X12,X14,X3,X7","X10,X12,X14,X3,X8","X10,X12,X14,X4,X5","X10,X12,X14,X4,X6","X10,X12,X14,X4,X7","X10,X12,X14,X4,X8"]';

        $sggls = '{"X1":"0.200","X2":"0.200","X3":"0.500","X4":"0.400","X5":"0.500","X6":"0.600","X7":"0.700","X8":"0.800","X9":"0.700","X10":"0.002","X11":"0.004","X12":"0.100","X13":"0.800","X14":"0.200"}';
        $allgeji =array_chunk(json_decode($geji,true),2);
        $newgeji = $allgeji[$i];
        $sggls =json_decode($sggls,true);

        // dump($geji);exit;


        $res = $this->NewCalculateProbability($newgeji,$sggls);
        //print_r($res);
        file_put_contents($this->file_path,serialize($res));


    }

    function NewCalculateProbability($geji,$sggls)
    {
        /*foreach ($geji as $key => $value) {
            $geji[$key] = implode(',',array_keys($value));
        }*/
        $oldData = file_get_contents($this->file_path);
        //print_r(unserialize($oldData));exit;
        $myoldData = unserialize($oldData);
        //print_r($myoldData);
        // dump($myoldData);exit;
        $n = count($geji);$r = [];
        if($myoldData){
            array_push($r,$myoldData);
        }

        for($i = 0; $i < $n;$i++)
        {
            $r[] = [1,'-'.$geji[$i]];
        }

        $h = [];
        $c ='1';
        for($j = 1; $j < $n;$j++)
        {
            if($j <=1){
         //       print_r($r[$j]);
         //       print_r($r[$j-1]);
          //      exit;
                $h[$j] = $this->combine_array($r[$j],$r[$j-1],$c);
            }else{
                $h[$j] = $this->combine_array($h[$j-1],$r[$j],$c);
                unset($h[$j-1]);
            }
        }

        unset($n);unset($geji);unset($i);unset($r);
        //echo $j;
        //print_r($h[$j-1]);exit;
        return $h[$j-1];

    }

    function combine_array($a,$b,$c){
        $l = [];$nb = count($b);
        if(!$a){ return $b;};
        if(!$b){ return $a;};
        //不去重
        foreach ($a as $k1 => $v1) {
            foreach ($b as $k2 => $v2) {
                if($v1 ==1){$v1 ='';}
                if($v2 ==1){$v2 ='';}
                //内存计算每次都从内存中读取$c,改从数据库中或者磁盘中读取
        $cstr = file_get_contents($this->file_path);
                $mycstr = unserialize($cstr);
                if($mycstr){
                $c = $mycstr."|".$v1.$v2;

                }else{
                    $c .="|".$v1.$v2;
                }
                file_put_contents($this->file_path,serialize($c));


            }
        }
        //print_r($c);
        //unset($a);unset($b);
        //print_r(array_filter(explode("|",$c)));exit;
        return array_filter(explode("|",$c));


        foreach($a as $av)
        {
            if($av == 1){
                for($k = 0;$k < $nb;$k++)
                {
                    $l[] = $b[$k];
                }
            }else{
                $aminus = strpos($av,'-');
                $av_ids =  explode(',',str_replace('-','',$av));
                for($k =0;$k < $nb;$k++){
                    //去除重复的事件
                    $bminus = strpos($b[$k],'-');
                    $b_ids =  explode(',',str_replace('-','',$b[$k]));
                    $rres = $this->repeat_remove($av_ids,$b_ids);
                    if(($aminus === false) && ($bminus === false)){
                        $l[] = $rres;
                    }else if(($aminus === false) || ($bminus === false)){
                        $l[] = '-'.$rres;
                    }else{
                        $l[] = $rres;
                    }
                }
            }
        }

        unset($a);unset($b);unset($rres);unset($av_ids);
        unset($b_ids);unset($aminus);unset($bminus);
        unset($k);unset($nb);
        return $l;
    }

    //去除重复事件
     function repeat_remove($a,$b){
        if($a[0] == '1'){return implode(',',$b);};
        if($b[0] == '1'){return implode(',',$a);};
        $res = [];
        $c = array_intersect($a, $b);
        foreach ($b as $key => $value) {
            if(in_array($value,$c)){
                unset($b[$key]);
            }
        }
        $res = array_merge($a,$b);
        unset($a);unset($b);unset($c);
        return implode(',',$res);
    }

    //B站的源码

}
