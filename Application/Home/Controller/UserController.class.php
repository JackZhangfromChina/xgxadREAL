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
            $user =M('user');
            //dump($user);die;
            $shuju = $user ->create();
            //dump($_POST);die;
            $userInfo = $user ->where(array('telephone' => $shuju['telephone'],'password' =>md5($shuju['password'])))->find();
            //dump($userInfo);die;
            if($userInfo){
                //持久化数据
                //echo 11;die;
                session('id' , $userInfo['id']);
                session('nickname' , $userInfo['nickname']);
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
        $user = M('user');

         if(IS_POST){
             $shuju = $user ->create();
             $shuju['add_time'] = time();
             $shuju['interest'] = implode(" " ,$this ->doAjax());
             $shuju['password'] = md5($shuju['password']);
             //dump($shuju);die;
             if($_POST['capture'] ==$_SESSION['verify']){
             if($user->add($shuju)){
                 $this -> success('注册成功,请登录',U('login'),1);
             }else{
                 $this -> error('注册失败',U('register'),1);
             }
        }else{
                 //dump($shuju['capture']);die;
                 echo  "<script>alert('验证码错误');</script>";
             }
         }else{
            //dump($_SESSION['verify']);die;
             $this -> display();
         }
    }

    public function doAjax()
    {
        return $interest = $_POST['interest'];

    }

    public function sendMsg()
    {
        //echo "ok";die;
        session_start();
        $flag = 0; 
        $params='';//要post的数据 
        $verify = rand(123456, 999999);//获取随机验证码        
        $_SESSION['verify'] = $verify;
        //以下信息自己填以下
        $mobile=$_POST['telephone'];//手机号
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
        //print_r($argv);exit;
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
        $con= substr(file_get_contents($url),0, 1 );  //获取信息发送后的状态
        
        echo $con;
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

    //空操作
    public function _empty()
    {
        $this ->display('Empty/error');
    }


    

//    public function information()
//    {
//        $this ->display();
//    }

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