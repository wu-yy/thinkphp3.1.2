<?php
//1.确定应用名称   Home 前台应用  Admin 后台应用

	define('APP_NAME','Home');
	//2.确定应用路径
	define('APP_PATH','./Home/');
    //3. 开启调试模式
    define('APP_DEBUG',true);
	//4.应用核心文件
	require './ThinkPHP/ThinkPHP.php';  // 如果出现错误，立即抛出错误，这是与include 的区别


?>