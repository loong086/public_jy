<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //phpinfo
    public function test1(){
        $test = $_GET["test"];
        // return "uuu:"+$test;
        return '[{"se":"123"}]';
    }
}
