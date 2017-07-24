<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
    <title>Index</title>
</head>
<body bgcolor="#ffe4c4">
  <h1>hello <?php echo ($data); ?></h1>

    <?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>-----<?php echo ($vo["username"]); ?>--------<?php echo ($vo["password"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>
</html>