<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <title>登录</title>
    <link  rel="stylesheet" type="text/css" href="__CSS__/basic.css" />
    <script src="__JS__/basic.js"></script>
</head>
<body>

    <form action="__URL__/do_login" method="post" name="myForm">
        用户名： <input type="text" name="username"/><br>
         密 码:   <input type="password" name="password" /><br>
        验证码： <input type="text" name="code"/>
     <img src="__APP__/Code/code" onclick="this.src=this.src+'?'+Math.random()"/>
    </br/>
   <img src="__PUBLIC__/Images/login.gif" onclick="sub()"/>
    </form>
</body>
</html>