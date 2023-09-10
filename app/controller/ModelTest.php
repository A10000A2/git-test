<?php

namespace app\controller;

use app\model\Student;

class ModelTest
{

    public function  index(){
        $student = Student::select();
        return json($student);
    }

}