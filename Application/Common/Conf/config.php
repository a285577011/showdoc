<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'URL_MODEL' => 2, //URL模式，使用REWRITE模式
	'DB_HOST'   => '127.0.0.1',
	'DB_NAME'   => 'showdoc', 
	'DB_USER'   => 'root', 
	'DB_PWD'    => 'AB1MQpTKXa',
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀
	'DB_CHARSET'=> 'utf8', // 字符集
	'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	"URL_HTML_SUFFIX" => '',//url伪静态后缀
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	    ':id\d'               => 'Home/Item/show?item_id=:1',
	    'uid/:id\d'               => 'Home/Item/showByUid?uid=:1',
	),
	'URL_CASE_INSENSITIVE'=>true,
	#'SESSION_AUTO_START'	=>  true,	// 是否自动开启Session
	#'SESSION_TYPE'		=>  'Redis',	//session类型
	#'SESSION_PERSISTENT'    =>  1,		//是否长连接(对于php来说0和1都一样)
	#'SESSION_CACHE_TIME'	=>  1,		//连接超时时间(秒)
	#'SESSION_EXPIRE'	=>  0,		//session有效期(单位:秒) 0表示永久缓存
	#'SESSION_PREFIX'	=>  'redis_sess_',	//session前缀
	#'SESSION_REDIS_HOST'	=>  '127.0.0.1',	//分布式Redis,默认第一个为主服务器
	#'SESSION_REDIS_PORT'	=>  '8090',	//端口,如果相同只填一个,用英文逗号分隔
	#'SESSION_REDIS_AUTH'    =>  '',    //Redis auth认证(密钥中不能有逗号),如果相同只填一个,用英文逗号分隔
	#'COOKIE_DOMAIN' => 'baigebaodev.com'    //设置Cookie的作用域为顶级域名
);
