<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return '主页';
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;

    }



}
