<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Hash;
use App\Http\Requests\UsersStore;

class UsersController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //添加模板
        $users = Users::paginate(3);
        return view('admin.users.index',['title'=>'用户列表','data'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载用户视图
        return view('admin.users.create',['title'=>'添加用户']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStore $request)
    {   

        if($request->hasFile('head')){
            $profile = $request->file('head');
            $name=date('YhmHis').rand(1000,9999).'.'.$profile->extension();
            $img = $profile->storeAs('head',$name); //执行上传
            
         }else{
            dd('请选择文件');
         }

        // 接收数据
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        //添加数据
        $users = new Users;
        $users->power = $data['power'];
        $users->Adname = $data['Adname'];
        $users->password = $data['password'];
        $users->Phonenumber = $data['Phonenumber'];
        $users->head = '/uploads/'.$img;
        $users->sex = $data['sex'];
        $res = $users->save();

        if($res){
            // echo "<script>alert('添加成功')</script>";
            return redirect('admin/users')->with('success', '添加成功');
        }else{
             return back()->with('error', '添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Users::find($id);
        return view('admin.users.edit',['title'=>'修改用户','data'=>$data]);
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
        

        //验证字段
        $this->validate($request, [
            'power'=>'required',
            'Adname'=>'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            // 'password'=>'required|regex:/^[\w]{6,18}$/',
            'Phonenumber'=>'required|regex:/^1{1}[3-9]{1}[0-9]{9}$/',
            'head'=>'required',
            'sex'=>'required',
            ],[
                'power.required'=>'请选择管理级别',
                'Adname.required'=>'姓名必填',
                'Adname.regex'=>'用户名格式不正确',
                // 'password.required'=>'密码必填',
                // 'password.regex'=>'密码格式不正确',
                'Phonenumber.required'=>'电话必填',
                'Phonenumber.regex'=>'电话格式不正确',
                'head.required'=>'请上传头像',
                'sex.required'=>'性别必填',

            ]);

        if($request->hasFile('head')){
            $profile = $request->file('head');
            $name=date('YhmHis').rand(1000,9999).'.'.$profile->extension();
            $img = $profile->storeAs('head',$name); //执行上传
            
         }else{
            dd('请选择文件');
         }

        // 接收数据
        $data = $request->except(['_token']);
        // $data['password'] = Hash::make($data['password']);

        //添加数据
        $users = Users::find($id);
        $users->power = $data['power'];
        $users->Adname = $data['Adname'];
        // $users->password = $data['password'];
        $users->Phonenumber = $data['Phonenumber'];
        $users->head = '/uploads/'.$img;
        $users->sex = $data['sex'];
        $res = $users->save();

        if($res){
            // echo "<script>alert('添加成功')</script>";
            return redirect('admin/users')->with('success', '修改成功');
        }else{
             return back()->with('error', '修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $users = Users::find($id);
        $res = $users->delete();
        
        if($res){
            return redirect('admin/users')->with('success', '删除成功');
        }else{
             return back()->with('error', '删除失败');
        }
    }
}
