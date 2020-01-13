<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/1/9 0009
 * Time: 10:30
 */

namespace app\index\controller;

use think\facade\Env;
use think\worker\Server;
use think\Db;
use think\Session;

class Worker extends Server
{
    protected $host = '127.0.0.1';
    protected $port = 1234;
    protected $option = [
        'count'		=> 4,
        'name'		=> 'think'
    ];
    public $clients = []; //保存客户端信息

    /**
     * 同步登录用户列表
     */
    function syncUsers()
    {
        $users = 'users:'.json_encode(array_column($this->clients,'name','ipp')); //准备发送用户在线的数据
        foreach($this->clients as $ip=>$client){
            $client['conn']->send($users);
        }

    }

    //发送消息
    public function onMessage($connection, $data)
    {
        if(preg_match('/^login:(\w{3,20})/i',$data,$result)){ //代表是客户端认证
            $connection->send('notice:success'); //验证成功消息
            $ip = $connection->getRemoteIp();
            $port = $connection->getRemotePort();

            if(is_array($this->clients) &&!array_key_exists($ip.':'.$port, $this->clients)){ //必须是之前没有注册过
                $this->clients[$ip.':'.$port] = ['ipp'=>$ip.':'.$port,'name'=>$result[1],'conn'=>$connection]; //把新用户保存起来
                //当前登录人
                $ipport=$ip .':'.$port;
//                echo $ipport.'==>' .$result[1] .'--login' . PHP_EOL; //这是为了演示,控制台打印信息
                $connection->send('usering:'.$ipport);
                // 更新在线用户数据
                $this->syncUsers();
            }
        }elseif (preg_match('/^chat:/',$data,$msgset)){//建立两边通讯发送消息
            echo $data.PHP_EOL;
            $msgset=json_decode(str_replace('chat:','', $data),true);
            $ipp = $msgset['ipport'];
            $msg = $msgset['msg'];

            if (array_key_exists($ipp,$this->clients)){ //如果有这个用户
                db('jiang_liaotian_value')->data(
                    array(
                        'send_id'=>$ipp,
                        'receive_id'=>$msgset['receiveipport'],
                        'sed_time'=>time(),
                        'content'=>$msg
                    )
                )->insert();
                //就发送普通消息（消息+用户名）
                $this->clients[$msgset['receiveipport']]['conn']->send('msg:'.json_encode(array('msg'=>$msg,'ipportmsg'=>$this->clients[$connection->getRemoteIp().':'.$connection->getRemotePort()]['name'])));
            }
        }
    }

    //客户端关闭
    public function onClose($connection)
    {
        unset($this->clients[$connection->getRemoteIp().':'.$connection->getRemotePort()]);
        //即退出登录，也需要更新用户列表数据
        $this->syncUsers();
        echo "connection closed\n";
    }

}