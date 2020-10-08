<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods as G;
use DB;

class IndexController extends Controller
{
    //
    public function test(){
    	$user = DB::table('t')->first();
    	echo $user->t_name;
    }

    /**
     * 商品详情
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function detail(Request $request){
    	$goods_id = $request->get('goods_id');
    	// echo " goods_id: ". $goods_id;

    	$goods = G::find($goods_id);
    	//dd($goods);
    	
    	$u = "权志龙";
    	$data = [
    		'g'=>$goods,
    		'u'=>$u,
    	];


    	return view('goods.detail',$data);
    }


    /**
     * 商品列表
     * @return [type] [description]
     */
    public function list(){
    	$list = G::limit(10)->get();
    	return view('goods.index',['list'=>$list]);
    }
}
