<?php
return array(
	//'配置项'=>'配置值'


    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'winorange',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'win_',    // 数据库表前缀


    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX'     =>  date("Ymd",time()).'',     // 缓存前缀 
    'DATA_CACHE_KEY'        =>  '',	// 缓存文件KEY (仅对File方式缓存有效)    

    /* SESSION设置 */
    'SESSION_PREFIX'        =>  'win_', // session 前缀 
    //'URL_DENY_SUFFIX'       =>  'ico||gif|jpg|dmp', // URL禁止访问的后缀设置
  
    /*主题设置*/
    'DEFAULT_THEME' => 'default',
    /*开启调试模式*/
    'APP_DEBUG' => true,
   
    /*禁止访问模块*/
    'MODULE_DENY_LIST'      =>  array('Common','Runtime','User'),

    'URL_PATHINFO_FETCH' =>'SCRIPT_FILENAME',

    'URL_MODEL'=>3,

    /*用户权限验证*/
    'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'think_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'think_auth_rule', //权限规则表
        'AUTH_USER' => 'think_member'//用户信息表
    )


  
);