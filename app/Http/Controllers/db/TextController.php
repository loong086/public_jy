<?php

namespace App\Http\Controllers\db;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//引入
use DB;
use Input;
use App\Home\Member;

class TextController extends Controller
{
    public function add(){
        // 实例化
        $model = new Member();
        // 赋值
        $model -> name = $_GET["name"];
        $model -> age = $_GET["age"];
        $model -> email = $_GET["email"];
        // 操作
        $result = $model -> save();
        $cik = $_GET["cik"];
        echo "$cik(" . $result . ")";
    }

    public function select(){
        // if (isset($_REQUEST["of"])) {
        // }else {
            $data = Member::all();
        // }
        $cik = $_REQUEST["cik"];
        echo "$cik(".json_encode($data).")";                   

        // $cik = $_GET["cik"];
        // echo "$cik(" . $_REQUEST["name"] . ")";
    }

    public function pg(){
        $data = Member::paginate(5);
        $cik = $_REQUEST['cik'];
        echo "$cik(".json_encode($data).")";
    }

    public function upload(){
        $cik = $_REQUEST['cik'];
        echo "$cik(". $_FILES["photo"]["name"] .")";
    }


    public function page(){
        $data = Member::Paginate(3);
        if (isset($_REQUEST["callback"])) {
            $callback = $_REQUEST['callback'];
            echo "$callback(" . json_encode(compact("data")) . ")";
        }else {
            echo json_encode(compact("data"));
        }
        
        
    }
}
