<?php

namespace app\index\controller;
use app\index\model\Check;
use think\Controller;

class Common extends Controller
{
    public function initialize()
    {
        $islogin=new Check();
        $islogin_status=$islogin->checklogin();
        if ($islogin_status===2){
            $this->error('请先登录！',url('index/login'));
        }
    }
}