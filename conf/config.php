<?php
/**
 * Created by PhpStorm.
 * User: gitxuzan
 * Date: 18-2-4
 * Time: 下午7:34
 * 自定义配置项
 */
use think\Env;

return [
    'app_status' => Env::get('environment', 'local'), // 配置环境, 切换develop
    'email' => 'gitxuzan@126.com',
    // 自定绑定
    'auto_bind_module' => true
];