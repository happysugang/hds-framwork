<?php

namespace hdsSoft;


class Router extends BaseClass
{
    /**
     * @var
     */
    public static $uri;

    /**
     * @var string
     */
    protected static $controllerName = DEFAULT_CONTROLLER;

    /**
     * @var string
     */
    protected static $actionName = DEFAULT_ACTION;

    /**
     * 控制器命名空间
     *
     * @var string
     */
    public static $controllerNamespace = 'app\\controller\\';

    /**
     * 路由加载
     * TODO 待重构 使用策略模式
     */
    public static function bootstrap()
    {
        self::$uri = $_SERVER['REQUEST_URI'];
        switch (URL_MODE) {
            case 1:
                self::parseCommon();
                break;
            default:
                self::parseRewrite();

        }
        self::boot();
    }

    /**
     * 执行路由
     */
    public static function boot()
    {
        self::defineConst();
        $class = self::$controllerNamespace . self::$controllerName . 'Controller';
        $controller = new $class();
        call_user_func([
            $controller,
            'Action' . self::$actionName
        ]);
    }

    /**
     * 普通路由解析
     */
    public static function parseCommon()
    {
        $router = isset($_GET['r']) ? explode('/', $_GET['r']) : [
            DEFAULT_CONTROLLER,
            DEFAULT_ACTION
        ];

        self::$controllerName = ucfirst($router[0]);
        self::$actionName = isset($router[1]) ? strtolower($router[1]) : DEFAULT_ACTION;
    }

    /**
     * 路由重写解析
     * TODO 待补充
     */
    public static function parseRewrite()
    {

    }

    /*
    * 定义常用的全局常量
    */
    public static function defineConst()
    {
        define('CONTROLLER', self::$controllerName);
        define('ACTION', self::$actionName);
        define('__URL__', self::createUrl(self::$controllerName . '/' . self::$actionName));
    }

    /**
     * 创建url
     * TODO 待补充
     *
     * @param $r
     * @return mixed
     */
    public static function createUrl($r)
    {
        return $r;
    }
}