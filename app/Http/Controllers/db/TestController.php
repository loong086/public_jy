<?php

namespace App\Http\Controllers\db;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Input;
use DB;

class TestController extends Controller
{
    //
    public function add()
    {
        $db = DB::table("back_admin");
        $result = $db -> insert([
            [
                "name" => "Loong",
                "age" => "18",
                "email" => "Loong0312@aliyun.com"
            ],
            [
                "name" => "oneoooicl",
                "age" => "18",
                "email" => "oneoooicl@outlook.com"
            ],
        ]);
    }
    public function del()
    {
        // ！！！删除默认是逻辑修改，所以大都不用
        $db = DB::table("back_admin");
        // 删除id 小于3的
        $result = $db->where("id","<","3")->delete();
        dd($result);
    }
    public function update()
    {
        $db = DB::table("back_admin");

        // 修改 id小于4的字段
        $result = $db -> where("id","<","4") -> update([
            "age" => "25",
        ]);

        // 修改id为1的字段(+?)不写第二个参数默认加1
        // $rst1 = $db -> where("id","=","1") ->increment("age",2);

        // 修改id为1的字段(-?)不写第二个参数默认减1
        // $rst1 = $db->where("id", "=", "1")->decrement("age", 2);
        dd($result);
    }
    public function select()
    {
        // 查询全部可以连写，多连写
        // $db = DB::table("back_admin");
        // 查询全部
        // $data = $db -> get();
        // return view("index",["data" => $data]);
        // dd($data);
        // 遍历全部
        // foreach ($data as $key => $value) {
        //     echo "id:{$value -> id}，名字是{$value -> name}，邮箱是{$value -> email}<br />";
        // }

        // 条件/多条件查询
        // $data = $db -> where("id",">","0") -> where("age","<","30") ->get();
        // dd($data); 

        // 条件/多条件,字段/多字段查询
        // $data = DB::table("back_admin")->where("id","1")->value("email","name");
        
        // 条件排序
        // $data = DB::table("back_admin")->orderBy("id","desc")->get();
        // dd($data);

        // 分页,limit(条数),offset(从？开始)
        $start = $_GET["start"];
        $size = $_GET["size"];
        $data  = DB::table("back_admin")->offset($start)->limit($size)->get();
        $callback = $_GET['callback'];
        echo $callback . '(' . json_encode($data) . ')';

        // $callback = $_GET['callback'];
        // echo $callback . '(' . json_encode($data) . ')';
        // exit;
        
        // print( "$callback('".json_encode($data)."')");  
        // return $callback. "(" . json_encode($data).")";
        // return response($callback . "('" . json_encode($data) . "')");
    }

    public function isql(){
        // 执行任意sql
        DB::statement("语句");
    }




    public function dd($ins){
        return $ins;
    }
}
