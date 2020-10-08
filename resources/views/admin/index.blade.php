<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>用户</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<table class="table">
	<caption>用户列表</caption>
   <thead>
      <tr>
         <th>ID</th>
         <th>用户名</th>
         <th>邮箱</th>
         <th>密码</th>
         <th>操作</th>
      </tr>
   </thead>
   @foreach($arr as $v)
   <tbody>
      <tr>
         <td>{{$v->u_id}}</td>
         <td>{{$v->u_name}}</td>
         <td>{{$v->email}}</td>
         <td>{{$v->password}}</td>
         <td><a href="">删除</a>
            <a href="">修改</a>
         </td>
      </tr>
   </tbody>
   @endforeach
</table>

</body>
</html>