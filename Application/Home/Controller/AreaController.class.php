<?php

//命名空间 防止命名冲突
namespace Home\Controller;
use Think\Controller;
//header("Content-type: text/html; charset=utf-8");
//三级联动控制器
//Controller ://Think/Controller
class AreaController extends Controller{

	//展示联动页面的模版
	public function index(){
		//实例化数据表模型
		$model = M('area');
		//查询省份/直辖市信息
		$province = $model -> where(array('parent_id' => 1)) -> select();
		//传递数据给模版展示
		//dump($province);die;
		
		$this -> assign('province',$province);
		$this -> display('Index/index');
	}

	//专门定一个方法用来处理ajax请求（通过地区id获取指定地区下的下属地区）
	public function getAreaByAreaId(){
		//接收地区id
		$pid = I('post.pid');
		//先实例化数据表模型
		$model = M('Area');
		$data = $model -> where(array('parent_id' => $pid)) -> select();
		//以json格式输出地区信息
		//echo json_encode($data);
		$this -> ajaxReturn($data);
	}


	public function test1()
	{
		echo get_client_ip();
		echo "<br   />";
		echo get_client_ip(1);
	}

	public function test2()
	{
		$class = new \Org\Net\IpLocation('qqwry.dat');
		$data = $class ->getlocation('117.89.117.202');

		var_dump($data);die;
	
		$data = $data['country'];
		echo $data;
		// $this->assign('data' , $data);
		// $this ->display('index/index');
		
	}
}