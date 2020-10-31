<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
use App\Model\FavModel;

class IndexController extends Controller
{
	protected $uid;
	public function __construct()
	{
		$this->uid = session()->get('uid');
		//var_dump($this->uid);exit;
	}


	public function Index()
	{
	return view('index.index');
	}


	/**
	 * 商品详情
	 * @return void
	 */
	public function item(Request $request)
	{
		$goods_id = $request->get('id');
		//echo "goods_id:".$goods_id;exit;    
		$goods = GoodsModel::find($goods_id);
		return view('index.item',['goods'=>$goods]);
	}


	/**
	 * 商品列表
	 * @return void
	 */
	public function list(){
		$list = GoodsModel::limit(10)->get();
		return view('index.list',['list'=>$list]);
	}


	/**
	 * 商品收藏
	 */
	public function fav(Request $request){
		$id = $request->get('id');
		echo $id;
		$data = [
			'goods_id' => $id,
			'uid' => $uid
		];
	}

}