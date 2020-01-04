<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function init()
    {
        $this->is_login();
    }

    public function index()
    {
        echo '111';
    }

    public function test()
    {
        
    }

    public function is_login()
    {
        if($_SESSION['uid']) {
            return true;
        }else{
            return false;
        }

    }
}