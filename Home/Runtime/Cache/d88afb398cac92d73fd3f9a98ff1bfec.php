<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify</title>
    <script>
        window.onload=function () {
            if(<?php echo ($data["vip"]); ?>==0)
            {
                document.getElementsByName('vip')[0].checked='checked';
            }else
            {
                document.getElementsByName('vip')[1].checked='checked';
            }
        }

    </script>
</head>
<form action="__URL__/update" method="post">
    <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/>
    姓名：<input type="text" name='username' value="<?php echo ($data["username"]); ?>"/></br>
    邮箱：<input type="text" name='email' value="<?php echo ($data["email"]); ?>"/></br>
    是否是VIP:否<input type='radio' name='vip' value='0'> 是<input type="radio" name="vip" value="1"/></br>
    <input type="submit" value="提交修改"/>
</form>
</body>
</html>