<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;
use Illuminate\Support\Facades\Redis;

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

    	$data = $request->except('_token');

        //表单验证
        //$validate = validator::make(Request()->all(),[],[]);
        $validate = $request->validate([
            'user' => 'required | min:2',
            'email' => 'required | email',
            'phone' => 'required | digits:11',
            'pwd' => 'required | confirmed | min:3',
        ],[
            'user.required'=>'用户名不得为空',
            'user.min'=>'用户名至少2个字符',
            'email.required'=>'邮箱不得为空',
            'email.email'=>'邮箱格式必须正确',
            'phone.required' => '手机号不得为空',
            'phone.digits' => '手机号必须是11位',
            'pwd.required' => '密码不得为空',
            'pwd.min' => '密码最少为3个字符',
            'pwd.confirmed' => '确认密码和密码不一致',
        ]);

        unset($data['password_confirmation']);

        //得到当前用户的真实ip
        $data['ip'] = $request->getClientIp();
        //echo $ip;exit;

        //生成密码
        //$data['pwd'] = password_hash($data['pwd'],PASSWORD_BCRYPT);
        $pwd = password_hash($request->post('pwd'),PASSWORD_BCRYPT);
        //echo $data['pwd'];die;
        

        //入库
        $data = [
            'user' => $request->post('user'),
            'phone' => $request->post('phone'),
            'email' => $request->post('email'),
            'pwd' => $pwd,
            //注册时间
            'reg_time'=>time()
        ]; 

    	//dd($data);
    	$res = UserModel::insert($data);
    	if($res){
    		return redirect("/user/login")->with('msg','注册成功跳转登录页面');
    	}else{
            return redirect('user/regist')->with('msg','注册失败');
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



    public function doLogin(Request $request)
    {
    	$user = $request->input('user');
    	$pwd = $request->input('pwd');
         // $data = $request->except('_token');

        

        // if(substr_count($data['user'],'@') > 0){
        //     $where = ['email'=>$data['user']];
        // }else if(strlen($data[user]) == 11){
        //     $where = ['phone'=>$data['user']];
        // }else{
        //     $where = ['user'=>$data['user']];
        // }
    	

    	$data = UserModel::where(['user'=>$user])
    		->orwhere(['email'=>$user])
    		->orwhere(['phone'=>$user])
    		->first();
    	//echo $data;
    
        if(empty($data)){
            die('用户不存在');
        }
        //验证密码
        $pwd = password_verify($pwd,$data->pwd);
        // echo $pwd;exit;


        //密码不正确 记录错误次数
        $key = 'login：count'.$user;
        //检测用户是否已被锁定
        $count = Redis::get($key);
        // echo $count;
        if(!$count>5){
            echo "输入密码次数太多，该用户已被锁定";
        }
        if(!$pwd){
            //密码不正确，记录错误次数
            $count = Redis::incr($key);
            echo "密码错误次数".$count;die;
        }
      
        if($pwd==true){
            return redirect('list')->with('msg','登录成功');
        }else{
            return redirect('user/login')->with('msg','您输入的账号或密码有错误');
        }


        //测试使用，打印出用户剩余的时间
        //dd(Redis::TTL("login_time:".$res['uid']));
        
    }

}
