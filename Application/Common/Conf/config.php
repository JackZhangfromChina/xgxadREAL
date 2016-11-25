<?php
return array(
	//'配置项'=>'配置值'

	// 配置前台静态资源文件路径
	"IMG_URL" => "/Public/Home/img/",
	"JS_URL" => "/Public/Home/js/",
	"CSS_URL" => "/Public/Home/css/",

	// 配置后台资源文件路径
	"AD_IMG_URL" => "/Public/Admin/img/",
	"AD_JS_URL" => "/Public/Admin/js/",
	"AD_CSS_URL" => "/Public/Admin/css/",
	"SHOW_PAGE_TRACE" => TRUE,
	// 配置插件变量的值
	"PLUGIN_URL" => "/Application/Common/Plugin/",
	"SITE_URL" => "http://localhost/xgxAD/",

	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'xgxad',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'xgx_',    // 数据库表前缀
);