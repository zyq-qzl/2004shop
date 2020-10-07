<table>
	<tr>
		<td>ID</td>
		<td>昵称</td>
		<td>地址</td>
		<td>操作</td>
	</tr>
	@foreach ($arr as $v)
	<tr>
		<td>{{$v->t_id}}</td>
		<td>{{$v->t_name}}</td>
		<td>{{$v->t_address}}</td>
		<td><a href="">删除</a>
			<a href="">修改</a>
		</td>
	</tr>
	@endforeach
</table>