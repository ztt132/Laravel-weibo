<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserProfileController extends Controller
{

    public function __construct()
    {

    }
    //
    public function show($array, $count,$i, $value, &$returnData)
    {
        if ($i >= $count) {
            return [];
        }
        $i++;

        foreach ($array as $val) {
            if ($i < $count) {
                getData($array, $count, $i , $value . '' . $val, $returnData);
            }
            if ($i <= $count) {
                if ($i == $count) {
                    $returnData[] = $value . '' . $val;
                }
            }
        }
    }

    public function list()
    {

    }
}
