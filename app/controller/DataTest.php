<?php

namespace app\controller;

use think\facade\Db;

class DataTest
{

    public  function  index(){
        $student =   Db::name('student')->select();
        return json($student);
    }

}