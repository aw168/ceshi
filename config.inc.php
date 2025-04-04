<?php
/**
 * Typecho 配置文件
 */

// 开启调试模式
define('__TYPECHO_DEBUG__', true); // Set to false in production

// 定义网站根目录
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// 定义插件目录(相对路径)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// 定义主题目录(相对路径)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// 定义后台管理目录(相对路径)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// 载入自动加载类
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// 初始化
Typecho\Common::init();

// 数据库配置
$db = new Typecho\Db('Pdo_Mysql', 'typecho_');
$db->addServer(array (
    'host' => 'gateway01.us-west-2.prod.aws.tidbcloud.com',
    'port' => 4000,
    'user' => 'J6jMVqXQYxebxFR.root',
    'password' => 'N1IJS2NklJwBHuLQ',
    'charset' => 'utf8mb4',
    'database' => 'test',
    'engine' => 'InnoDB',
    'sslCa' => __TYPECHO_ROOT_DIR__ . '/isrgrootx1.pem', // Updated sslCa path
    'sslVerify' => true,
), Typecho\Db::READ | Typecho\Db::WRITE);

Typecho\Db::set($db);

// 时区设置 (建议设置)
date_default_timezone_set('Asia/Shanghai');

// 自定义 SESSION 存储路径 (如果需要)
// define('__TYPECHO_SESSION_PATH__', '/tmp');

// 启用 HTTPS (如果你的网站使用 HTTPS)
// define('__TYPECHO_SECURE__', true);
