<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    /**
     * [regist description]渲染注册页面
     * @return [type] [description]
     */
    public function regist()
    {
    	return view('user.regist');
    }



    public function doRegist(Request $request)
    {
    	$data = $request->except('_token',"ppwd");
    	//dd($data);
    	$res = UserModel::insert($data);
    	if($res){
    		return redirect("/user/login")->with('注册成功跳转登录页面');
    	}
    }


    /**
     * [login description]渲染登陆页面
     * @return [type] [description]
     */
    public function login()
    {
    	return view('user.login');
    }



    public function doLogin()
    {
    	$data = [
    		['user'=>$user],
    		['email'=>$email],
    		['pwd'=>$pwd]
    	];
    	$data = UserModel::find();
    	$res = 
    }

}
