<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    //
    public function test(){
    	$user = DB::table('t')->first();
    	echo $user->t_name;
    }
}
