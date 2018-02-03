<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // 指定表
    protected $table = "back_admin";
    // 定义主键
    protected $primaryKey = "id";
    // 定义禁止操作时间falase
    public $timestamps = false;
    // 定义允许插入的字段
    protected $fillable = ["id","name","age","email"];
}
