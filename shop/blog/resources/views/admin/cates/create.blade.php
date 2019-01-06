@extends('admin/common/index')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		    <div data-example-id="form-validation-states">
		  <form action="/admin/cates" method="post" >
		  	{{ csrf_field() }}
		  	 <div class="form-group has-warning">
		  	 <label class="control-label" for="inputWarning1">所属类别</label>
		      <select class="form-control" name="pid">
				  <option value="0">顶级分类</option>
				  @foreach($data as $k=>$v)
				  <option value="{{$v->cid}}">{{$v->cname}}</option>
				  @endforeach
			</select>
			 <span id="helpBlock2" class="help-block">**如果添加的分类不属于任何一个分类则位顶级分类</span>
		  </div>	
		    <div class="form-group has-success">
		      <label class="control-label" for="inputSuccess1">类别名称</label>
		      <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2" name="cname">
		      <span id="helpBlock2" class="help-block">**输入要添加的类别</span>
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