<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
	<form action="{{url('login')}}" method="post">
		<table>
			<tr>
				<td>用户名</td>
				<td><input type="text" name="user" placeholder="用户名/Email/手机号"></td>
			</tr>
			<tr>
				<td>密 码</td>
				<td><input type="password" name="pwd" placeholder="请输入密码"></td>
			</tr>
			<tr>
				<td><input type="submit" value="登录"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>