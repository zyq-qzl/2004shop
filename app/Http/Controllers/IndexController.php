<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods as G;
use Illuminate\Support\Facades\Redis;
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


    public function redis1(){
        $key = 'namel';
        $name1 = Redis::get($key);
        var_dump($name1);
    }


    public function redis2(){
        Redis::set('qzl',"权志龙");
        $e = Redis::get('qzl');
        echo $e;
    }


    public function redis3(){
        $num = Redis::incr('count');
        echo $num;
    }



    public function api1(){
        //$api_url = "https://github.com/login/oauth/access_token";
        echo "124";
    }


    public function weather()
    {
        $url = "https://devapi.qweather.com/v7/weather/now?location=101010700&key=542c4b7d5b304dfc9580ba60aa2d3644";

    }



    public function guzzle()
    {
        $url = "https://devapi.qweather.com/v7/weather/now?location=101010700&key=542c4b7d5b304dfc9580ba60aa2d3644";
        $client = new Client();
    }
}
