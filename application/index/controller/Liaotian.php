<?php
namespace app\index\controller;

use app\index\controller\Common;
use app\index\model\Check;

class Liaotian extends Common
{
    public function index(){
        $sessionname=session('username');
        $this->assign('sessionname',$sessionname);
        return $this->fetch();
    }
}