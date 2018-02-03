<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TxtController extends Controller
{
    //
    public function insa()
    {
        return phpinfo();
    }
}
