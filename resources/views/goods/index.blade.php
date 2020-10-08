@foreach($list as $k=>$v)
<div>
	商品ID：{{$v->goods_id}}
	商品名称： {{$v->goods_name}}
</div>
@endforeach