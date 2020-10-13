<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	@if ($errors->any()) 
	<div class="alert alert-danger"> 
	<ul>
		@foreach ($errors->all() as $error) 
			<li>{{ $error }}</li>
		@endforeach
			</ul> 
	</div>
	@endif
	
	{{session('msg')}}

	<form action="{{url('/user/doRegist')}}" method="post">
		@csrf
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user" placeholder="请输入用户名"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" placeholder="请输入邮箱"></td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><input type="text" name="phone" placeholder="请输入手机号"></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" name="pwd" placeholder="请输入密码"></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" name="pwd_confirmation" placeholder="请输入确认密码"></td>
			</tr>
			<tr>
				<td><input type="submit" value="注册"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>