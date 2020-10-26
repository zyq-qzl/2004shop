<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\LoginModel;
use phpDocumentor\Reflection\Location;

class LoginController extends Controller
{
    public function login()
    {
    	return view("index.login");
    }

    public function register(){
    	return view('index.register');
    }


    public function doRegister(Request $request)
    {
    	//echo "123";exit;
        $data = $request->except('_token','ppassword');
        $data['register_time'] = time();
        $data['ip'] = $request->getClientIp();
        $res = LoginModel::insert($data);
        if($res){
            echo "注册成功";
            return redirect("/index/login");
        }
       
    }


    public function doLogin()
    {
        $data = LoginModel::get();
        //dd($data);
        //echo $data;
        if($data){
            echo "登陆成功";
            return redirect("/index/home-index");
        }
    }
}