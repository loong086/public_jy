<?php

namespace App\Http\Controllers\cs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// 引入Input
use Input;
use DB;

class TsController extends Controller
{
    //
    public function ins()
    {   
        dd(Input::all());
        // echo Input::get("id","1000") . "<br />";
        // dd(Input::get("id"));
    }
    public function dd($i){
        echo $i;
    }
    public function add(){
        echo phpinfo();
    }
}
