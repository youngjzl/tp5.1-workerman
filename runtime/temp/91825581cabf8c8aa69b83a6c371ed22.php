<?php /*a:1:{s:88:"D:\jzl\ruanjian\phpstudy\PHPTutorial\wwww\tp5\application\index\view\liaotian\index.html";i:1578900861;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>聊天室</title>
    <link rel="stylesheet" type="text/css" href="/static/css/qq.css" />
</head>
<body>
<a href="<?php echo url('index/loginout'); ?>">点击我退出聊天系统</a>
<input type="text" id="txname" readonly value="<?php echo htmlentities($sessionname); ?>">
<input type="text" id="send_ipport" readonly value="">
<input type="text" id="receive_ipport" readonly value="">
<div class="qqBox">
    <div class="BoxHead">
        <div class="headImg">
            <img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/6.jpg"/>
        </div>
        <div class="internetName">90后大叔</div>
    </div>
    <div class="context">
        <div class="conLeft">
            <ul id="listusers">

            </ul>
        </div>
        <div class="conRight">
            <div class="Righthead">
                <div class="headName">赵鹏</div>
                <div class="headConfig">
                    <ul>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_06.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_08.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_10.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_12.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="RightCont">
                <ul class="newsList">

                </ul>
            </div>
            <div class="RightFoot">
                <div class="emjon">
                    <ul>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_02.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_05.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_07.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_12.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_14.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_16.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_20.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_23.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_25.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_30.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_31.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_33.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_37.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_38.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_40.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_45.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_47.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_48.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_52.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_54.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/em_55.jpg"/></li>
                    </ul>
                </div>
                <div class="footTop">
                    <ul>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_31.jpg"/></li>
                        <li class="ExP"><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_33.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_35.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_37.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_39.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_41.jpg" alt="" /></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_43.jpg"/></li>
                        <li><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_45.jpg"/></li>
                    </ul>
                </div>
                <div class="inputBox">
                    <textarea id="dope" style="width: 99%;height: 75px; border: none;outline: none;" name="" rows="" cols=""></textarea>
                    <button onclick="send()">发送(s)</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script>
    //创建一个socket实例
    var socket = null; //初始为null
    var isLogin = false; //是否登录到服务器上


    //定义一个连服务的函数
    function connectServer(){
        var username = document.getElementById('txname').value;
        if (username == ''){
            alert('用户id必填');
        }

        socket = new WebSocket("ws://www.test.com:1234");//连接服务端
        socket.onopen = function() {
            socket.send('login:' + username);//打开服务端
        };
        socket.onmessage = function(e) {
            var getMsg = e.data;
            if(/^notice:success$/.test(getMsg)){    //服务器验证通过
                isLogin = true;
            }else if(/^usering:/.test(getMsg)){    //接收当前人的ip+端口
                getMsg = getMsg.replace('usering:','');
                $('#send_ipport').val(getMsg);
            }else if(/^users:/.test(getMsg)){ //显示当前已登录用户
                getMsg = getMsg.replace('users:','');
                getMsg= eval('('+getMsg+')');

                //在线用户组装html
                var listusers = document.getElementById('listusers');
                listusers.innerHTML = '';//清空
                var lishtml='';//清空
                for(var key in getMsg){
                    lishtml+='<li onclick="is_select(&quot;'+key+'&quot;)" >';//存储ip+端口
                    lishtml+='<div class="liLeft"><img src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/20170926103645_19.jpg"/></div>';
                    lishtml+='<div class="liRight">';
                    lishtml+='<span  class="intername">'+getMsg[key]+'</span>';//当前用户名
                    lishtml+='<span class="infor">[流泪]</span>';
                    lishtml+='</div>';
                    lishtml+='</li>';
                    listusers.innerHTML = lishtml;
                }
            }else if(/^msg:/.test(getMsg)){ //发送普通消息
                getMsg=getMsg.replace('msg:','');
                getMsg= eval('('+getMsg+')');
                var answer='';
                answer+='<li>'+
                    '<div class="nesHead">'+getMsg['ipportmsg']+'</div>'+//接受者的用户名
                    '<div class="news"><img class="jiao" src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/jiao.jpg">'+getMsg['msg']+'</div>'+//接收者的消息
                    '</li>';
                $('.newsList').append(answer);
            }
        }
        socket.onclose = function(){
            isLogin = false;
        }
    }
    connectServer();//加载页面时就链接上


    //发送消息
    function send(){
        if (!isLogin){
            alert('请先通过服务器验证');
        }

        var msg = document.getElementById('dope').value;
        socket.send('msg:' + msg); //发送消息到服务端

        var toUserIPP = $('#receive_ipport').val(); //接收者的ip和端口
        var send_ipport = $('#send_ipport').val();//发送者的ip和端口

        var data={ipport:send_ipport, msg: msg,receiveipport:toUserIPP};
        data=JSON.stringify(data);
        socket.send('chat:'+data);//chat:<10.211.55.2:50543>:message----组装数据的格式发给服务端

        //把发送的消息增加到当前页面
        var answer='';
        answer+='<li>'+
            '<div class="answerHead">'+'<?php echo htmlentities($sessionname); ?>'+'</div>'+
            '<div class="answers"><img class="jiao" src="https://www.17sucai.com/preview/1/2017-10-11/talk/img/jiao.jpg">'+msg+'</div>'+
            '</li>';
        $('.newsList').append(answer);
    }

    //选中在线人数把ip+端口号添加到receive_ipport中准备发送
    function is_select(ipport) {
        $('#receive_ipport').val(ipport);
    }
</script>
</body>
</html>