<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cates;

class IndexController extends Controller
{
    /*
	   前台首页控制器
    */

    public function index()
    {
        $data =Cates::get();
        return view('home.common.index',['data'=>$data]);

    }

}
