<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <title>Index</title>
    <script>
        function jump() {
            window.location="/test/index.php/Index/add";
        }

    </script>
</head>
<body>
<center>
<form action="/test/index.php/Index/search" method="post">
    用户名:<input type="text" name="username"/></br>
    vip用户: <input type="radio" name="vip" value="1"/>是 <input type="radio" name="vip" value="0"/>否 <br>
    <input type="submit" value="搜索"/>
</form>
</center>
<table border="1" width="500" align="center">
<tr><th>id</th>
    <th>username</th>
    <th>email</th>
    <th>vip</th>
    <th>操作</th>
</tr>
</table>
<center>
<button onclick="jump()">
    添加用户
</button>
</center>
</body>
</html>
</html>