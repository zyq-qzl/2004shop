<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /***
     * 加入购物车页面
     */
    public function index(){
    	return view('index.cart');
    }


    public function cartadd(){
        // $goods_id = $_request->input('goods_id');
        // echo "goods_id:".$goods_id;
    }
}


?>