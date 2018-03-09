<?php

namespace hdsSoft;

defined('HDS_CONTROLLER') or define('HDS_CONTROLLER', HDS_PATH . '/controller/');
defined('HDS_MODEL') or define('HDS_MODEL', HDS_PATH . '/model/');
defined('HDS_COMMON') or define('HDS_COMMON', HDS_PATH . '/common/');
defined('HDS_VENDER') or define('HDS_VENDER', HDS_PATH . '/vender/');

defined('DEFAULT_CONTROLLER') or define('DEFAULT_CONTROLLER', 'Index');
defined('DEFAULT_ACTION') or define('DEFAULT_ACTION', 'Index');
defined('URL_MODE') or define('URL_MODE', 1);

//自动加载类文件引入
require HDS_CORE_PATH . 'Loader.php';
spl_autoload_register('hdsSoft\Loader::autoload');


//加载路由
Router::bootstrap();

