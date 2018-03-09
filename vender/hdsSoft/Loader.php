<?php

namespace hdsSoft;


class Loader
{
    /**
     * 路径映射
     *
     * @var
     */
    public static $vendorMap;

    /**
     * 自动加载器
     *
     * @param $class
     */
    public static function autoload($class)
    {
        $file = self::findFile($class);
        if (file_exists($file)) {
            self::includeFile($file);
        }
    }

    /**
     * 解析文件路径
     *
     * @param $class
     * @return string
     */
    private static function findFile($class)
    {
        // 顶级命名空间
        $vendor = substr($class, 0, strpos($class, '\\'));
        // 文件基目录
        $vendorDir = self::getVendorMap()[$vendor];
        // 文件相对路径
        $filePath = substr($class, strlen($vendor)) . '.php';
        // 文件标准路径
        return strtr($vendorDir . $filePath, '\\', DIRECTORY_SEPARATOR);
    }

    /**
     * 引入文件
     *
     * @param $file
     */
    private static function includeFile($file)
    {
        if (is_file($file)) {
            include $file;
        }
    }

    /**
     * 获取路径映射
     *
     * @return mixed
     */
    private static function getVendorMap()
    {
        return include 'VenderMap.php';
    }

}