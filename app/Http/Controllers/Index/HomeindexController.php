<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeindexController extends Controller
{
    public function home(){
        return view("index.Home-index");
    }
}
