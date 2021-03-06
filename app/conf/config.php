<?php
return [
    "DEFAULT_CONTROLLER" => 'index', //默认控制器
    "DEFAULT_ACTION" => 'index', //默认方法


    "BASE_HOST" => 'http://liuqi.dev.wanglibao.com/messageCenter/app/web', //域名
    "SERVER_PASSPORT" => 'http://account.dev.wanglibao.com',//用户模块的域名

    //"BASE_HOST" => 'http://php1.wanglibao.com/messagecenter', //域名
    //"SERVER_PASSPORT" => 'http://php1.wanglibao.com/passport',//用户模块的域名

    "URL_CONTROL_NAME" => 'c', // 默认控制器参数名
    "URL_ACTION_NAME" => 'a', // 默认动作参数名
    "URL_MODE" => 0, // 0 GET  1 PATHINFO

    "REDIS_HOST" => "127.0.0.1", //redis主机地址
    "REDIS_PORT" => 6379, //redis端口
    "REDIS_PWD" => "", //redis密码
    "REDIS_TIMEOUT" => 3, //redis超时时间

    "DB_TYPE" => 'pdo', //连接驱动
    "DB_HOST" => '127.0.0.1', //主机地址
    "DB_PORT" => 3306,//端口
    "DB_USERNAME" => 'root',//用户名
    "DB_PASSWORD" => '123123',//密码
    "DB_NAME" => 'ms',//数据库名
    "DB_PREFIX" => '',//表前缀
    "DB_PCONNECT" => false, //长连接
    "DB_DEBUG" => true, //调试模式
    "DB_CHARSET" => 'utf8', //编码

    'SWOOLE_IP' => '127.0.0.1',
    'SWOOLE_PORT' => 6767,
    'SWOOLE_DAEMONIZE' => true,
    'SWOOLE_WORKER_NUM' => 8,

    'COOKIE_DOMAIN' => '.wanglibao.com',

    "SMARTY_CACHING" => false, //是否缓存
    "SMARTY_FORCE_COMPILE" => true, //强制编译


    'MCQUEUE_API_URL' => 'http://liuqi.dev.wanglibao.com/messageCenter/app/web/services.php',
    //'MCQUEUE_API_URL' => 'https://php1.wanglibao.com/messagecenter/services.php',


    "PAGE_SIZE" => 20, //分页每页数量

    "RBAC_ADMIN_URL"=>'http://account.dev.wanglibao.com',
    //"RBAC_ADMIN_URL"=>'http://php1.wanglibao.com/passport',
    "DISABLE_SESSION_ROUTE" => '*',//禁用session
];
