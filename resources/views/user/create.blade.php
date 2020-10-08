<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>登录</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form class="form-horizontal" role="form" action="{{'/user/store'}}" method="post">
	@csrf
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">用户名</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="firstname" name="u_name" 
				   placeholder="请输入用户名">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">邮箱</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lastname" name="email" 
				   placeholder="请输入邮箱">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">密码</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="lastname" name="password"
				   placeholder="请输入邮箱">
		</div>
	</div>


	<!-- <div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">注册时间</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lastname" name="reg_time"
				   placeholder="注册时间">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">最后登录时间</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lastname" name="last_name"
				   placeholder="最后登录时间">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">最后登陆IP</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lastname" name="reg_time"
				   placeholder="最后登陆IP">
		</div>
	</div>
	<div class="form-group">
		<label for="lastname" class="col-sm-2 control-label">最后登陆次数</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lastname" name="reg_time"
				   placeholder="最后登陆次数">
		</div>
	</div> -->


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">登录</button>
		</div>
	</div>
</form>

</body>
</html>