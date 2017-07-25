<?php

/*
 * 前台和后台公共的配置项
 */
return array(
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
    //'DB_DSN'=>'mysql://root:@localhost:3306/thu_activity';

);



?>