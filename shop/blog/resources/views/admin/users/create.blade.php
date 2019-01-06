@extends('admin.common.index')
@section('content')
<div id="page-wrapper">
	<div class="main-page">
		    <div data-example-id="form-validation-states">
<!-- !!!重要js 勿动 -->
<div class="cal1" style="display: none;">
</div>

<!-- 显示验证错误信息 -->
@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)	
                <strong>警告! {{ $error }}</strong><br>
            @endforeach
        </ul>
    </div>
@endif




	<!-- main content start-->
			<div class="main-page">
				<div class="forms">					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>{{ $title or '添加用户' }} :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" action="/admin/users" method="post" enctype="multipart/form-data">
								{{ csrf_field() }} 
									<div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">管理员等级</label>
										<div class="col-sm-8">
											<select name="power" id="selector1" class="form-control1">
												<option value="1">客服级管理</option>
												<option value="2">主管级管理</option>
												<option value="3">Boss级管理</option>
											</select>
										</div>
									</div>

									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">用户名</label> 
										<div class="col-sm-9"> 
											<input type="name" class="form-control" id="inputEmail3" placeholder="" name="Adname" value="{{ old('Adname') }}"> 
										</div> 
									</div> 

									<div class="form-group"> 
										<label for="inputPassword3" class="col-sm-2 control-label">密码</label>
										<div class="col-sm-9"> 
											<input type="password" class="form-control" id="inputPassword3" placeholder="" name="password" value=""> 
										</div> 
									</div>
 
									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">手机号</label> 
										<div class="col-sm-9"> 
											<input type="name" class="form-control" id="inputEmail3" placeholder="" name="Phonenumber" value="{{ old('Phonenumber') }}"> 
										</div> 
									</div>

									<div class="form-group"> 
										<label for="inputEmail3" class="col-sm-2 control-label">头像</label> 
										<div class="col-sm-9"> 
											<input type="file" class="exampleInputFile" id="inputEmail3" placeholder="" name="head" value=""> 
										</div> 
									</div>

									<div class="form-group">
										<label for="radio" class="col-sm-2 control-label">性别</label>
										<div class="col-sm-8">
											<div class="radio-inline">
												<label><input type="radio" name="sex" value="m"> 男</label>
											</div>
											<div class="radio-inline">
												<label><input type="radio" name="sex" value="w"> 女</label>
											</div>
										</div>
									</div>

									<div class="col-sm-offset-2"> 
										<button type="submit" class="btn btn-default">点击添加</button> 
									</div> 
								</form> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>		
		<!--footer-->
@endsection