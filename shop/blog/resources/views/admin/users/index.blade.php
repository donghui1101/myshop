@extends('admin.common.index')
@section('content')
<div id="page-wrapper">
  <div class="main-page">
        <div data-example-id="form-validation-states">
    <!-- 
        ###  js特效代码  勿动
     -->
    <div class="cal1" style="display: none;">
    </div>

    <!-- 用户列表 -->
    <div class="panel-body widget-shadow">
                        <h4 class="form-title">{{ $title }}</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>管理员</th>
                                  <th>权限</th>
                                  <th>性别</th>
                                  <th>手机号</th>
                                  <th>头像</th>
                                  <th>操作</th>
                                </tr>
                            </thead>
                            @foreach($data as $k=>$v)
                            <tbody>
                                <tr>
                                  <th scope="row">{{ $v->id }}</th>
                                  <td>{{ $v->Adname }}</td>
                                  <td>
                                    @if ($v->power==1) 客服级管理
                                    @elseif ($v->power==2 )主管级管理
                                    @elseif ($v->power==3 )boss级管理
                                    @endif
                                  </td>
                                  <td>
                                    @if ($v->sex=='w')女
                                    @elseif ($v->sex=='m')男
                                    @endif
                                  </td>
                                  <td>{{ $v->Phonenumber }}</td>
                                  <td>
                                        <img src="{{$v->head}}" width="40">
                                  </td>
                                  <td>
                                    <a href="/admin/users/{{ $v->id }}/edit" class="btn btn-info">修改</a>
                                    <form style="display: inline-block;" method="post" action="/admin/users/{{ $v->id }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="删除"  class="btn btn-danger">
                                    </form>
                                  </td>
                                </tr>
                                
                            </tbody>
                            @endforeach

                        </table>
                        <div class="text-center">
                            {{ $data->links() }}
                        </div>
                    </div>
               </div>
             </div>
            </div>        

@endsection