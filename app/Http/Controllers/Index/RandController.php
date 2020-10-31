<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandController extends Controller
{
    public function index(){
        return view("index.rand");
    }

    /**
     * 练习
     *
     * @return void
     */
    public function start(){
        $rand = mt_rand(1,10);
        // $prize = 0;
        //echo $rand;
        if($rand == 6){
            echo "一等奖";
        }else if($rand == 5){
            echo "二等奖";
        }else{
            echo "谢谢惠顾";
        }

        $data = [
            'error' => 0,
            'msg' => 'OK',
            'data' => [
                'rand' => $rand,
            ]
        ];
        //return $data; 

    }


    /**
     * 开始抽奖
     *
     * @param Type $var
     * @return void
     */
    public function addRand()
    {
        //判断登录
        $uid = session()->get('uid');
        if(empty($uid)){
            $response = [
                'error' => '40003',
                'msg' => '未登录',
            ];
            return $response;
        }
        $rand = mt_rand(1,10000);
        //echo $rand;
        $level = 0;
        if($rand>=1 && $rand<=10){
            //一等奖
        }elseif($rand>=11  && $rand<=30){
            //二等奖
            $level = 2;
        }elseif($rand>=31 && $rand<=60){
            //三等奖
            $level = 3;
        }

        //记录抽奖信息
        $prize_data = [
            'uid' => $uid,
            'level' => $level,
            'add_time' => time()
        ];
        
    }
}
