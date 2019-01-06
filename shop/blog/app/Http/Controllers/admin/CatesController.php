<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Cates;

class CatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
         商品类别管理控制器
    */

    public function countData()
    {
        $data = Cates::orderBy('cid','path','asc')->get();
        foreach($data as $k=>$v){
           $sum = substr_count($v->path,',');
            $v->cname = str_repeat('|----',$sum).$v->cname;
        }
        return $data;
    }

    public function getData()
    {
       $data = Cates::select()->paginate(10);
        foreach($data as $k=>$v){
           $sum = substr_count($v->path,',');
            $v->cname = str_repeat('|----',$sum).$v->cname;
        }
       return $data;
    }

    public function getOneData($id){

    	 $data = Cates::where('cid',$id)->first();
    	 return $data;
    }

    public function index()
    {
       $data = $this->getData(); 
       return view('admin/cates/index',['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function create()
    {
         $data = $this->countData();

         return view('/admin/cates/create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $pid = $data['pid'];
        if($pid == 0){
        	$data['path'] = '0,';
        }else{
        $aa = Cates::where('cid',$pid)->first();
        $data['path'] =$aa->path.$pid.',';
		}
		$res =Cates::insert($data);
        return redirect('/admin/cates/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         echo '闯出国界线了！！！';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
    	$data =$this->getOneData($id);
        return view('admin/cates/edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only('cname');
        try{
        $res = Cates::where('cid',$id)->update($data);
        }catch(\Exception $e){
        	return '删除失败';
        }
        return redirect('/admin/cates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = Cates::where('pid',$id)->first();
 
        if(empty($data->cid)){
        	 Cates::where('cid',$id)->delete();
        }else{
        	return '该类下有子类，不能删除！';
        }
        return redirect('/admin/cates');
    }
}
