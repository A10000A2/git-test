<?php

namespace app\controller;

use think\facade\Db;

class DataTest
{

    public  function  index(){
        $student =   Db::name('student')->select();
        return json($student);
    }

    public  function  oneStudent(){
        $student = Db::name('student')->find(1);
        return json($student);
    }

    public  function  orStudent(){
        $student = Db::name('student')->find(2);
        return json($student);
    }

    public  function  tStudent(){
        $student = Db::name('student')->find(3);
        return json($student);
    }

    public  function  fStudent(){
        $student = Db::name('student')->find(4);
        return json($student);
    }

}