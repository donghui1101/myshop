@extends('admin/common/index')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		    <div data-example-id="form-validation-states">
		  <form action="/admin/cates/{{$data->cid}}" method="post" >
		  	{{csrf_field()}}
		  	{{method_field('PUT')}}
		  	 <div class="form-group has-warning">
		  	 <label class="control-label" for="inputWarning1">所属类别</label>
		      <select class="form-control" name="pid">
				 
				  <option value="{{$data->cid}}">{{$data->cname}}</option>
				 
			</select>
			 <span id="helpBlock2" class="help-block">**修改所属分类</span>
		  </div>	
		    <div class="form-group has-success">
		      <label class="control-label" for="inputSuccess1">类别名称</label>
		      <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" name="cname" value="">
		      <span id="helpBlock2" class="help-block">**修改类别名称</span>
		  </div>
		 

		  <div align="center">
		  	   <input class="btn btn-default" type="submit" value="提交">
		  	   <div style="display:inline-block; width:100px;height:80px"></div>
		  	   <input type="submit" class="btn btn-default" value="重置">
		  </div>
		  </form>
		</div>
	</div>
</div>
<div class="row calender widget-shadow" style="display: none">
	<h4 class="title">Calender</h4>
		<div class="cal1"></div>
</div>			
@endsection