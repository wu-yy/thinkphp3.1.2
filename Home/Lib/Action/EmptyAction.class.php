<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/24
 * Time: 20:25
 */

class EmptyAction extends Action
{
    function  index()
    {
        $m=M('city');
        $arr= $m->select();
        $this->assign('list',$arr);
        $name=MODULE_NAME;
        $this->display("City:$name");
    }
}


?>