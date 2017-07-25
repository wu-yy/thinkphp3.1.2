<?php
$arr=include './config.php';
$arr2=array(
	//'配置项'=>'配置值'
    'URL_CASE_INSENSITIVE'=>true,  //URL 不区分大小写

    //'DB_DSN'=>'mysql://root:@localhost:3306/thu_activity';
    //开启调试功能的page_trace 功能 一种非常好的调试方式
    //1. 在主入口文件中开启debug模式
    'SHOW_PAGE_TRACE'=>true,
    //'TMPL_TEMPLATE_SUFFIX'=>'.tpl', //后缀名默认 html可以修改成tpl后缀
    //'TMPL_FILE_DEPR'=>'_',//修改模板的目录层次，不采用'/'模式，一般不做这方面的修改

    //'DEFAULT_THEME'=>'',//设置默认的模板主题my
    //'TMPL_DETECT_THEME'=>true,//自动侦测模板主题,还需要罗列出支持的模板列表
    //'THEME_LIST'=>'your,my',//支持的模板列表
);
return array_merge($arr,$arr2);
?>