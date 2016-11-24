<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		//实例化数据表模型
		$model = M('area');
		//查询省份/直辖市信息
		$province = $model -> where(array('parent_id' => 1)) -> select();
		//传递数据给模版展示
		//dump($province);die;
		$class = new \Org\Net\IpLocation('qqwry.dat');
		$data = $class ->getlocation('114.215.113.14');
		$data = $data['country'];
		//echo $data;
		$data = iconv("GB2312","UTF-8",$data);
          
	    $this->assign('data' , $data);	
		$this -> assign('province',$province);
		$this -> display();
	}

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



    public function fabu()
    {
    	
    	// header("location:http://localhost/xgxad/index.php/home/index/fabu2") ;
    	$model = M('area');
        //查询省份/直辖市信息
        $province = $model -> where(array('parent_id' => 1)) -> select();
        $this -> assign('province',$province);
    	$this ->display();
    	
    }

    public function dealfabu()
    {
        $post = I('post.');
        #实例化模型
        $model = M('fb');
        #添加时间
        $post['addtime'] = time();

        #实例化上传类
        $cfg = array(
                'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH //保存根路径
            );
        $upload = new \Think\Upload($cfg);
        #上传
        //var_dump($upload);die;
        $info = $upload -> uploadOne($_FILES['pic']);
        //var_dump( UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename']);die;
        #判断上传的结果，上传失败返回false
        if($info){
            #设置表中的filepath字段
            $post['filepath'] = UPLOAD_ROOT_PATH . $info['savepath'] . $info['savename'];
            #设置表中的filename字段
            $post['filename'] = $info['savename'];
            #设置表中的hasfile字段
            $post['hasfile'] = 1;
        }
        #添加操作
        $rst = $model -> add($post);
        #判断添加操作返回值
        if($rst){
            #添加成功
            $this -> success('添加成功~',U('index'),1);
        }else{
            #添加失败
            $this -> error('添加失败~',U('fabu'),3);
        }
        
    }

    

    //分页类
     function showlist()
     {
        //实现数据分页效果
        $goods = D('fb');
        //① 获得总记录数目
        $total = $goods-> count();  //sum()  max()  min()
        $per = 7;//每页显示7条数据
        
        //② 实例化分页类对象
        $page_obj = new \Tools\Page($total, $per);
        
        //③ 自定义sql语句，获得每页信息
        $sql = "select * from sw_goods order by goods_id desc ".$page_obj->limit;
        $info = $goods -> query($sql);
        
        //④ 获得页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        
        $this -> assign('pagelist',$pagelist);
        $this -> assign('info',$info);
        $this -> display();
    }



   
































}