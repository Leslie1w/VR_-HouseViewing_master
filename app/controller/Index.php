<?php

namespace app\controller;

use think\facade\View;
use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        // 模板输出
        return View::fetch('index');
    }
}
