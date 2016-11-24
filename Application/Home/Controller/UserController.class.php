<?php 
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{

    /*
    **登录
    */
    public function  login()
    {
        //和注册一样分为2个逻辑，一个是没有post数据，显示登录页面，另一个进入程序
        if(IS_POST){
            $user =D('user');
            $shuju = $user ->create();
            $userInfo = $user ->where(array('phone' => $shuju['phone_num'],'password' =>$userInfo['pwd']))->find();
            if($userInfo){
                //持久化数据
                echo 11;die;
                session('id' , $userInfo['id']);
                session('name' , $userInfo['name']);
                //跳转
                $this ->redirect('Index/index');
            }else{
                echo "用户名或密码错误";
            }
        }else{ 
            $this ->display();
        }
    }



    /**
     * 注册
     */
    
    public function register()
    {
        // $user = new \Model\UserModel();
        // if(IS_POST){
        //     $shuju = $user -> create();
        //     $shuju['add_time'] = time();
        //     if($user->add($shuju)){
        //         $this -> success('注册成功,请登录邮箱激活账号',U('login'),1);
        //     }else{
        //         $this -> error('注册失败',U('register'),1);
        //     }
        // }else{
            $this -> display();
        // }
    }


    public function center()
    {
        $this ->display();

    }

    public function detail()
    {
        $this ->display();
    }

    public function wallet()
    {
        $this ->display();
    }

    public function income()
    {
        $this ->display();
    }

    public function myAD()
    {
        $this ->display();
    }


    

    public function information()
    {
        $this ->display();
    }

    public function recharge()
    {
        $this ->display();
    }

    public function walletDetail()
    {
        $this ->display();
    }

    public function incomeDetail()
    {
        $this ->display();
    }

    public function interest()
    {
        $this ->display();
    }









}




















 ?>