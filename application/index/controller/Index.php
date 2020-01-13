<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use Request;
use app\index\model\Check;

class Index extends Controller
{
    public function index()
    {
       return $this->fetch();
    }
    public function login()
    {
        $islogin=new Check();
        if ($islogin->checklogin()===1){
            $this->success('你已经登陆了',url('index/liaotian/index'));
        }
        if (request()->isPost()){
            $db = db('jiang_admininfo');
            $name=input('post.txname');
            // 查询数据
            $list = $db->where('name',$name)->find();
            if ($list){
                session('username',$list['name']);
                session('userip_port',$islogin->getIp().':'.$_SERVER["SERVER_PORT"]);
                $this->success('登陆成功',url('liaotian/index'));
            }else{
                $this->error('登陆失败',url('index/login'));
            }
        }
        return $this->fetch();
    }
    public function reg()
    {
        if (Request::instance()->isPost()){
            $name=input('post.txname');
            $db = db('jiang_admininfo');
            // 查询数据
            $list = $db->where('name',$name)->value('name');
            if ($list){
                $this->error('有用户了没办法插入用户了');
            }else{
                // 插入记录
                $db->data(['name' => $name])->insert();
                $this->success('插入成功');
            }
        }
        return $this->fetch();
    }
    public function loginout(){
        if (session('username')){
            // 删除
            session('username', null);
            session('userip_port', null);
        }
        $this->success('退出成功',url('index/login'));
    }
}
