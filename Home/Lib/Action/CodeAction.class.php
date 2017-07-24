<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/23
 * Time: 18:14 加入验证码处理模块
 */
class CodeAction extends Action
{

    public function code()//用来处理验正码
    {
        import('ORG.Util.Image');
        Image::buildImageVerify();
    }
}




?>