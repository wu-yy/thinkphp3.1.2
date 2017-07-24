<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/7/6
 * Time: 20:21
 */
class UserAction extends Action{
    public function index()
    {
        $m = M('user');
        $arr = $m->select();
        //var_dump($arr);
        $this->assign('data', $arr);
        $this->display();
    }

    public  function del()
    {
        $m=M('user');
        $id=$_GET['id'];
        $count=$m->where('id='.$id)->delete();
        if($count>0)
        {
            $this->success('数据删除成功！');
        }else{
            $this->error('数据删除！');
        }
    }

    /*
     * 显示修改页面
     */
    public  function modify()
    {
        $id=$_GET['id'];
        $m=M('user');
        $arr=$m->where('id='.$id)->find();
        $this->assign('data',$arr);
        $this->display();

    }

    public function update()
    {
        $m=M('user');
        $data['id']=$_POST['id'];
        $data['username']=$_POST['username'];
        $data['email']=$_POST['email'];
        $data['vip']=$_POST['vip'];

        $count=$m->save($data);
        if($count>0)
        {
            $this->success('数据修改成功','index'); //跳转页面
        }else
        {
            $this->error("修改失败！");
        }
    }

    /*
     * 添加页面
     *
     */
    public function  add()
    {
        $this->display();
    }
    public function create()
    {
        $m=M('user');
        $m->username=$_POST['username'];
        $m->email=$_POST['email'];
        $m->vip=$_POST['vip'];
        $m->password=$_POST['password'];
        $idNum=$m->add();
        if($idNum>0)
        {
            $this->success('数据添加成功','index');
        }else{
            $this->error("数据添加失败");
        }
    }

    /*
     * 编写search 方法 ，实现搜索
     */
    public function search()
    {
        //获取POST的数据,根据数据组装查询的条件,根据条件从数据库中获取数据然后返回给页面实例
        $m=M('user');
        if(isset($_POST['username'])&& $_POST['username']!=null) {
            $where['username'] = array('like', "%{$_POST['username']}%");
        }
        if(isset($_POST['vip'])&&$_POST['vip']!=null)
        {
            $where['vip']=array('eq',$_POST['vip']);
        }
        //$where['_logic']='or';
        $arr=$m->where($where)->select();
        $this->assign('data',$arr);
        $this->display('index');

    }


    /*
     * 利用order排序  、limit限制、field设置输出字段、检索成员信息
     */
    public function demo()
    {
        $m=M('user');
        //$arr=$m->order(array('id'=>'desc','vip'=>'asc'))->select();  //按照升序 asc  倒序 desc
        //$arr=$m->order(array('id'=>'desc','vip'=>'asc'))->limit(0,5)->select();//加入limit 方法 从第0条开始取出5条
        $arr=$m->order(array('id'=>'desc','vip'=>'asc'))->field('username as name,id')->select();//利用as换别名 ，仍然可以使用数组的方式 field(array('id','username'=>'name'))
        //$arr=$m->order(array('id'=>'desc','vip'=>'asc'))->field('id',true)->select();//获取除了id 的所有字段
        dump($arr);
        $this->show('abc');//$this->display();//由于没有 模板文件 show.html  所以这里可以调用show 方法


    }


}
?>