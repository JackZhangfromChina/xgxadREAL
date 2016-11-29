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
		$data = $class ->getlocation('121.237.3.191');
		$data = $data['country'];
		//echo $data;
		$data = iconv("GB2312","UTF-8",$data);  

		//展示广告主页
		$fb = M('fb');
        $count = $fb->count();
        $page = new \Think\Page($count,2);
        $pageList = $page ->show();
        $info = $fb ->order('id desc')->limit($page->firstRow.",".$page ->listRows)->select();
        $this->assign('pagelist' , $pageList);  
        $this->assign('info' , $info);  
	    $this->assign('data' , $data);	
		$this -> assign('province',$province);
		$this -> display();
	}

    //空操作
    public function _empty()
    {
        $this ->display('Empty/error');
    }

    public function getAreaByAreaId()
    {
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

    //广告细节的处理
    public function detail()
    {
        $id = I('get.id');
        $fb = M('fb');
        $detail = $fb ->where("id=".$id)->find();
         //dump($detail);die;
        $this ->assign('detail' , $detail);

        $this->display();
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
        $info = $upload -> uploadOne($_FILES['pic']);
        //var_dump($info);die;
        #判断上传的结果，上传失败返回false
        
        if($info){
            $post = array(
                'filepath' =>UPLOAD_ROOT_PATH.$info['savepath'].$info['savename'],
                'filename' =>$info['savename'],
                'hasfile' => 1,
                );
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

/*   private function deal_ad($goods_id){
        //判断有上传图片
        $ishave = false;
        foreach($_FILES['goods_pics']['error'] as $k => $v){
            //判断至少有一个上传，并且该相册是ok的
            if($v=== 0){
                $ishave = true;
            }
        }

        if($ishave === true){
            //有上传相册图片
            //dump($_FILES);
            //实现批量相册上传
            $cfg = array(
                'rootPath'      =>  WORKING_PATH . UPLOAD_ROOT_PATH , //保存根路径
            );
            $up = new \Think\Upload($cfg);
            //从$_FILES里边获得goods_pics的相册信息
            //upload($_FILES)
            $z = $up -> upload(array($_FILES['goods_pics']));
            //dump($z);

            //遍历$z,对各个上传好的"相册"进行对应的处理
            //要制作3幅缩略图
            $im = new \Think\Image();
            foreach($z as $k => $v){
                //原图路径名
                $yuan_path_name = $up->rootPath.$v['savepath'].$v['savename'];
                //给原图制作缩略图
                $im -> open($yuan_path_name);
                $im -> thumb(800,800,6);
                //保存制作好的缩略图
                $b_name = $up->rootPath.$v['savepath'].'b_'.$v['savename'];
                $im -> save($b_name);

                $im -> thumb(350,350,6);
                $m_name = $up->rootPath.$v['savepath'].'m_'.$v['savename'];
                $im -> save($m_name); 

                $im -> thumb(50,50,6);
                $s_name = $up->rootPath.$v['savepath'].'s_'.$v['savename'];
                $im -> save($s_name);
                //存储3幅缩略图到数据库(sp_goods_pics)
                $arr = array(
                    'goods_id'=>$goods_id,
                    'goods_pics_b' => $b_name,
                    'goods_pics_m' => $m_name,
                    'goods_pics_s' => $s_name,
                );
                D('GoodsPics')->add($arr);
            }
        }
    }*/
    

    




   
































}