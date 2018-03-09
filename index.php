<?php

//检验PHP环境,低于7.0则提示退出
if(version_compare(PHP_VERSION,'7.0.0','<'))  die('快来试试PHP7以上版本的新特性吧~');
/**
 * 项目开始时间
 */
defined('HDS_BEGIN_TIME') or define('HDS_BEGIN_TIME', microtime(true));
/**
 * 项目安装目录
 */
defined('HDS_PATH') or define('HDS_PATH', __DIR__);
/**
 * 框架核心路径
 */
defined('HDS_CORE_PATH') or define('HDS_CORE_PATH', HDS_PATH . '/vender/hdsSoft/');
/**
 * 项目错误日志是否打开
 */
defined('HDS_DEBUG') or define('HDS_DEBUG', true);


require HDS_CORE_PATH . 'Base.php';

