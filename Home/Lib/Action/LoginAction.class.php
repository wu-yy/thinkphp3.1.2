<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/23
 * Time: 18:14
 */
class LoginAction extends Action
{
    public function index()
    {
        $this->display();
    }

    //获取用户名和密码等 和数据库中进行比对，
    function do_login()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $code=$_POST['code']; //得到MD5加密的正确的验证码
        if($_SESSION['verify']!=md5($code))
        {
            $this->error('验证码错误');
        }
        $m=M('user');
        $where['username']=$username;
        $where['password']=$password;
        $count=$m->where($where)->count();
        if($count>0)//表示存在
        {
            $this->redirect('User/index');
        }else{
            $this->error('该用户不存在或者密码错误');
        }
    }

}




?>