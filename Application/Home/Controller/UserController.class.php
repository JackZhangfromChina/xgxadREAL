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

    public function sendMsg()
    {
        $flag = 0; 
        $params='';//要post的数据 
        $verify = rand(123456, 999999);//获取随机验证码        

        //以下信息自己填以下
        $mobile='15062287392';//手机号
        $argv = array( 
            'name'=>'15062287392',     //必填参数。用户账号
            'pwd'=>'2D7AB508512A64959DC458EAFDD9',     //必填参数。（web平台：基本资料中的接口密码）
            'content'=>'短信验证码为：'.$verify.'，请勿将验证码提供给他人。',   //必填参数。发送内容（1-500 个汉字）UTF-8编码
            'mobile'=>$mobile,   //必填参数。手机号码。多个以英文逗号隔开
            'stime'=>'',   //可选参数。发送时间，填写时已填写的时间发送，不填时为当前时间发送
            'sign'=> "【Star星享】",    //必填参数。用户签名。
            'type'=>'pt',  //必填参数。固定值 pt
            'extno'=>''    //可选参数，扩展码，用户定义扩展码，只能为数字
        ); 
        print_r($argv);exit;
        //构造要post的字符串 
        //echo $argv['content'];
        foreach ($argv as $key=>$value) { 
            if ($flag!=0) { 
                $params .= "&"; 
                $flag = 1; 
            } 
            $params.= $key."="; $params.= urlencode($value);// urlencode($value); 
            $flag = 1; 
        } 
        $url = "http://web.1xinxi.cn/asmx/smsservice.aspx?".$params; //提交的url地址
        $con= substr( file_get_contents($url), 0, 1 );  //获取信息发送后的状态
        
        if($con == '0'){
            echo "<script>alert('发送成功!');</script>";
        }else{
            echo "<script>alert('发送失败!');history.back();</script>";
        }
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