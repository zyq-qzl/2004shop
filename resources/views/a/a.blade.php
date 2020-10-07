<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="{{url('create')}}" method="post">
		@csrf
		<table>
			<tr>
				<td>名字</td>
				<td><input type="text" name="t_name"></td>
			</tr>
			<tr>
				<td>地址</td>
				<td><input type="text" name="t_address"></td>
			</tr>
			<tr>
				<td><input type="submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
	
</body>
</html>