@extends('admin/common/index')
@section('content')
  	<div id="page-wrapper">
			<div class="main-page">
		       <div class="tables">
					<h3 class="title1">商品管理</h3>
					<div class="panel-body widget-shadow">
						<h4>浏览类别:</h4>
						<table class="table">
							<thead>
								<tr>
								  <th>#</th>
								  <th>商品名称</th>
								  <th>商品描述</th>
								  <th>图片</th>
								  <th>商品状态</th>
								  <th>商品定价</th>
								  <th>操作</th>
								</tr>
							</thead>
							<tbody>	
								<tr>
								  <th scope="row"></th>
								</tr>
							</tbody>
						</table>
						<div align="center">
						
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