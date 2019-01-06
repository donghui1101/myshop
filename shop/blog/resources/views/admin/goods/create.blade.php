@extends('admin/common/index')
@section('content')
   <div id="page-wrapper">
			<div class="main-page">
		       <div class="tables">
					<h3 class="title1">商品添加</h3>
					<div class="panel-body widget-shadow">
						<form action="/admin/goods" method="post">
							{{csrf_field()}}
							<div class="form-title ">
							<h4>商品添加:</h4>
							</div>
								<div class="form-group"> 
									<label>商品名称</label> 
									    <input type="text" class="form-control" name="gname" placeholder="此处填写商品名称">
							    </div>
							     <div class="form-group"> 
							      	<label for="exampleInputPassword1">商品标题</label> 
							      	   <input type="text" class="form-control" name="title" placeholder="标题"> 
							     </div> 
							     <div class="form-group"> 
							       	  <label >商品图片</label>
							       	      <input type="file" name="gpicture" > 
							     </div>
					     		<div class="form-group"> 
						       	  <label>商品定价</label>
						       	      <input type="text"  name="price" class="form-control" placeholder="此处填写商品价格"> 
						       	</div>
					       		<div class="form-group"> 
						       	  <label>商品状态</label>
						       	      <input type="radio" name="status" value="1" checked> 新品
									  <input type="radio" name="status" value="2"> 上架
									  <input type="radio" name="status" value="3"> 下架
						       	</div>
						       	<div class="form-group"> 
							       	  <label>商品库存</label>
						       	      <input type="number"  name="stock" class="form-control" id="fun" placeholder="库存">
						       	</div>
					       		<div class="form-group"> 
						       	  <label>生产日期</label>
						       	      <input type="date"  name="PD" class="form-control" placeholder="填写商品生产日期">
						       	</div>
					       	  	<div class="form-group"> 
						       	  <label>保质日期</label>
						       	      <input type="text"  name="ED" class="form-control">
						       	</div>
					       		<div class="form-group"> 
						       	  <label>商品产地</label>
						       	      <input type="text"  name="source" class="form-control">
						       	</div>
						       	<div class="form-group"> 
						       	  <label>重量</label>
						       	      <input type="text"  name="weight" class="form-control">
						       	</div>
						       	<div class="form-group"> 
						       	  <label>生产许可编号</label>
						       	      <input type="text"  name="PLN" class="form-control">
						       	</div>
						       	<div class="form-group"> 
							       	  <label>商品介绍</label>
							       	    <textarea name="describe" class="form-control">商品简介</textarea>
						       	</div>
					       	<div class="row  widget-shadow">
						       	<div class="form-title">
									<h4>商品口味栏:</h4>
								</div>
						       	<div class="form-three widget-shadow">
								<div data-example-id="form-validation-states-with-icons">
									  <div class="form-group">
									    <label class="control-label">口味{1}</label>
									    <input type="text" class="form-control" name="taste1"  aria-describedby="inputSuccess2Status">
									    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
									  <div class="form-group ">
									    <label class="control-label">口味{2}</label>
									    <input type="text" name="taste2" class="form-control" aria-describedby="inputWarning2Status">
									    <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
									    <span id="inputWarning2Status" class="sr-only">(warning)</span></div>
									  <div class="form-group">
									    <label class="control-label">口味{3}</label>
									    <input type="text" name="taste3" class="form-control" aria-describedby="inputError2Status">
									    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
									    <span id="inputError2Status" class="sr-only">(error)</span></div>
									  <div class="form-group">
									    <label class="control-label">口味{4}</label>
									      <input type="text" name="taste4" class="form-control" aria-describedby="inputGroupSuccess1Status">
									    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
									    <span id="inputGroupSuccess1Status" class="sr-only">(success)</span></div>
									</div>
							</div>
						</div>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>商品副图添加:</h4>
							</div>
							<div class="form-body">
							<!-- 加载编辑器的容器 -->
							    <script id="container" name="content" type="text/plain">
						        上传商品的多张展示图片
						    	</script>
							</div>
					</div>	
					<div class="form-grids row  data-example-id="basic-forms">
						  <div align="center"> 
						  <input type="submit" class="btn btn-default" value="提交">
						  <input type="submit" class="btn btn-default" value="返回" >
						  </div>
					</div>

						</form>						
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
	<script type="text/javascript">
			$('#fun').blur(function(){
					var n = $(this).val();
                   n = n > 0 ? n : 0;
                   	$(this).val(n);

			}).click(function(){
					var n = $(this).val();
                   n = n > 0 ? n : 0;
                   	$(this).val(n);

			})
	</script>
	 <!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container',{toolbars:[ 
 								['fullscreen', 'undo', 'redo','simpleupload','insertimage']
			]});
    </script>
@endsection
