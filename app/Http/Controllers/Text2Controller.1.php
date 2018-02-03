<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class Text2Controller extends Controller
{
    //
    
    public function session(){
        if (isset($_GET['key'])) {
            Session::put("key", $_GET['key']);
            var_dump(Session::get("key"));
            var_dump(Session::has("over"));
        }
    }
}
