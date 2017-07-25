<?php
$arr=include './config.php';
$arr2=array(
	//'配置项'=>'配置值'
    //在这里对Home 应用进行配置
    //'URL_PATHINFO_DEPR'=>'-'   //修改分隔符
    'URL_CASE_INSENSITIVE'=>true,  //URL 不区分大小写
    //开启调试功能的page_trace 功能 一种非常好的调试方式
    //1. 在主入口文件中开启debug模式
    'SHOW_PAGE_TRACE'=>true,
    //'TMPL_TEMPLATE_SUFFIX'=>'.tpl', //后缀名默认 html可以修改成tpl后缀
    //'TMPL_FILE_DEPR'=>'_',//修改模板的目录层次，不采用'/'模式，一般不做这方面的修改

    //'DEFAULT_THEME'=>'',//设置默认的模板主题my
    //'TMPL_DETECT_THEME'=>true,//自动侦测模板主题,还需要罗列出支持的模板列表
    //'THEME_LIST'=>'your,my',//支持的模板列表
    'TMPL_PARSE_STRING'=>array('__CSS__'=>__ROOT__.'/Public/Css',
        '__JS__'=>__ROOT__.'/Public/Js'),//添加自己定制的全局变量模板

    'URL_ROUTER_ON'=>true,//开启路由支持
    'URL_ROUTE_RULES'=>array(
        'my'=>'Index/index',//静态路由
        ':id/:num'=>'Index/index' ,//动态路由，其中id、num表示传进的参数，可以通过$_GET['id']获得
        'my/:num'=>'Index/index',
        '/^year\/(\d{4})\/(\d{2})\/(\d{2})/'=>'Index/index?year=:1&month=:2&date=:3',

    ),//配置路由规则

);
return array_merge($arr,$arr2);
?>