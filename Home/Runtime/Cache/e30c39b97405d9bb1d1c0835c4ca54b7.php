<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <title>Index</title>
    <script>
        function jump() {
            window.location="__URL__/add";
        }

    </script>
</head>
<body>
<center>
<form action="__URL__/search" method="post">
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
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($vo["id"]); ?></td>
    <td><?php echo ($vo["username"]); ?></td>
    <td><?php echo ($vo["email"]); ?></td>
    <td><?php echo ($vo["vip"]); ?></td>
    <td><a href="__URL__/del/id/<?php echo ($vo["id"]); ?>">删除</a>|<a href="__URL__/modify/id/<?php echo ($vo["id"]); ?>">修改</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<center>
<button onclick="jump()">
    添加用户
</button>
</center>
</body>
</html>
</html>