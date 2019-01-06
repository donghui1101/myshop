@extends('admin/common/index')
@section('content')
  	<div id="page-wrapper">
			<div class="main-page">
		       <div class="tables">
					<h3 class="title1">类别管理</h3>
					<div class="panel-body widget-shadow">
						<h4>浏览类别:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <th>类别名称</th>
								  <th>父类</th>
								  <th>操作</th>
								</tr>
							</thead>
							<tbody>
							@foreach($data as $k=>$v)	
								<tr>
								  <th scope="row">{{$v->cid}}</th>
								  <td>{{$v->cname}}</td>
								  <td>{{$v->pid}}</td>
								  <td>
								  	<form action="/admin/cates/{{$v->cid}}/edit" method="get" style="display:inline;">
								  	 <input type="submit" value="修改">
								  	</form>
								  	<div style="display:inline-block;width:10%"></div>
								  	<form action="/admin/cates/{{$v->cid}}" method="post" style="display:inline;">
								  	    {{csrf_field() }}
								  		{{ method_field('DELETE') }}
								  	 <input type="submit" value="删除">
								  	</form>
								  </td>
								</tr>
							@endforeach	
							</tbody>
						</table>
						<div align="center">
						{{ $data->links() }}
						</div>
					</div>
				<div class="row calender widget-shadow" style="display: none">
					<h4 class="title">Calender</h4>
					<div class="cal1">
						
					</div>
				</div>
			</div>
	</div>			
@endsection