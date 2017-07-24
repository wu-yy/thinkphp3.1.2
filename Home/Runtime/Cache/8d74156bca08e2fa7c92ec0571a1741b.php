<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>输出变量</title>
</head>
<body>
<?php echo ($data); ?><br>
<?php echo (md5($arr[0])); ?><br>
<?php echo ($obj->name); ?><br>
<?php echo ($_GET['name']); ?><br>
<?php echo (THINK_VERSION); ?><br>

<?php if($con == "123"): ?>编程
    <?php else: ?>
    哈哈<?php endif; ?>

<?php if($con == "124"): ?>男人是泥巴做的
    <?php elseif($con == "123"): ?>
    只有编程才能快乐
    <?php else: ?>
    成年<?php endif; ?>

<table border="1" width="500">
    <?php $__FOR_START_16798__=10;$__FOR_END_16798__=00;for($j=$__FOR_START_16798__;$j > $__FOR_END_16798__;$j+=-2){ ?><tr><td><?php echo ($j); ?>hh</td></tr><?php } ?>

</table>

<?php $__FOR_START_17535__=0;$__FOR_END_17535__=3;for($j=$__FOR_START_17535__;$j < $__FOR_END_17535__;$j+=1){ echo ($a[$j]); ?><br><?php } ?>

<?php if(is_array($a)): foreach($a as $k=>$v): echo ($k); ?>---<?php echo ($v); ?><br><?php endforeach; endif; ?>

</body>
</html>