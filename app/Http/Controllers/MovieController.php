<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MovieModel;

class MovieController extends Controller
{
    public function movie()
    {
        $list = MovieModel::select();
        return view("a.movie",['list'=>$list]);
    }

    public function add(Request $request)
    {
       
    }
}
