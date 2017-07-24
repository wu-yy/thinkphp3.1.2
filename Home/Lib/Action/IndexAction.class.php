<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index2()
    {
        //这样一个文件是在主入口文件index.php调用的，所以当前路径是 index.php 主入口文件坐在的路径
        $this->display('./Public/error.html');//应该补齐后缀，否则发生错误

    }
    public function  index3()
    {

        $this->display('./Public/error.html','UTF-8');//添加输出的编码方式
    }

    public function index4()
    {
        $content=$this->fetch('User:index');
        $this->show($content);
    }

    public function index(){
	//echo "hello world!";
        //通过display 输出
        $m=M('user');
        $arr=$m->select();
        //var_dump($arr);
        $this->assign('data','THU');
        $this->assign('data1',$arr);

        //查找数据
        $a2=$m->find(2);
       // var_dump($a2);
        $a3=$m->where('id=2')->getField('username');
       // var_dump($a3);


        //创建数据
        //$m3=M('user');
        //$m3->id=4;
        //$m3->username='清华';
        //$m3->password='123456';
        //$m3->add();  //返回值是新增的id号


        //删除数据
        //$m4=M('user');
       // $m4->where('id=3')->delete();
       // $m4->delete(2);//删除第二条数据  返回值是受影响行数

        //更新数据
        //$m5=M('user');
        //$data5['id']=2;
        //$data5['username']='清华';
        //$m5->save($data5);   //返回值是受影响行数



        $this->display();
    }

    public function show2()
    {
        //数据库的查询

        $this->display();
    }

    //变量的输出
    public function output()
    {
        //标量输出
        $this->assign('data','清华大学');
        $arr=array('Tsinghua1','Tsinghua2');
        $this->assign('arr',$arr);
        import('ORG.My.Test');//需要使用import引入文件类
        $obj=new Test;
        $this->assign('obj',$obj);

        $con='123';
        $this->assign('con',$con);

        $a =array('清华','爱','北京');
        $this->assign('a',$a);



        $this->display();

    }
     /*
      * 模板的使用技巧
      */
    public  function model()
    {

        $this->display();
    }
    public  function next()
    {
        $this->display();
    }

    /*
     * 控制器的模块和操作
     */
    function _before_shouye() //前置方法,这种对于登录并不是最优的
    {
        //做判断，如果用户没有登录，跳转到登录页面
        if(!isset($_SESSION['username'])|| $_SESSION['username']=='') //用户没有登录
        {
            $this->redirect('Login/index');
        }
    }

    public function shouye()
    {
        $m=M('city');
       $arr= $m->select();
        $this->assign('list',$arr);
        $this->display();
    }

    public function _after_shouye()//后置方法
    {
        echo "<script>alert('欢迎访问！')</script>";
    }


}