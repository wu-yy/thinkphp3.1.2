<?php
return array(
	//'配置项'=>'配置值'
    //在这里对Home 应用进行配置
    //'URL_PATHINFO_DEPR'=>'-'   //修改分隔符

    //修改左右定界符
    'TMPL_L_DELIM'=>'<{',
    'TMPL_R_DELIM'=>'}>',

    //db 的类型
    'DB_TYPE'=>'mysql',  //设置数据库类型
    'DB_HOST'=>'localhost',  //设置主机名
    'DB_NAME'=>'thu_activity', //设置数据库名
    'DB_USER'=>'root',   //设置用户名
    'DB_PWD'=>'wuyy1314',  //设置密码
    'DB_PORT'=>'3306',   //设置端口号
    'DB_PREFIX'=>'test_' ,//建立表的时候在给表前缀

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


);
?>