<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	/*
	   后台首页显示控制器
	*/
    public function index()
    {
    	return view('admin/common/index');
    }
}
