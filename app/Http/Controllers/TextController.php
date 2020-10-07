<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\t;

class TextController extends Controller
{
    //
    public function index(){
    	$arr = t::all();
    	return view('a.b',['arr'=>$arr]);
    	//echo "123";
    }

    public function add(){
    	return view('a.a');
    }

    public function create(Request $request){
    	//$t_name = $_POST['t_name'];
    	//$t_address = $_POST['t_address'];
    	// echo $t_address;die;
    	$arr = $request->except('_token');
    	$res = t::create($arr);
    	if($res){
    		return redirect("/index");
    	}
    }


   public function list(){

   }
}
