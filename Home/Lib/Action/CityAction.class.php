<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/24
 * Time: 19:56
 */
class CityAction extends Action
{
    function bj()
    {
        $oi=new IndexAction(); //调用其他模块下面的方法
        $oi->shouye();
    }

    function sh()
    {
        $oi=new IndexAction();
        $oi->shouye();
    }

    function gz()
    {
        $oi=new IndexAction();
        $oi->shouye();
    }
    /*
     * 空方法
     */
    function _empty($name)
    {
       $this->show( "$name 不存在 <a href='__APP__/Index/shouye'>返回首页</a>");
    }


}