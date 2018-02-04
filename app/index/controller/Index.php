<?php
namespace app\index\controller;

use think\Config;
use think\Env;

/**
 * Class Index
 * @package app\index\controller
 */
class Index
{
    /**
     *
     */
    public function index()
    {
//        echo 1212;exit;
        $database = Config::get('database');
        dump($database);
        dump(config());

    }

    /**
     *
     */
    public function comment()
    {
        var_dump('comment');exit;
    }

    /**
     * 定义env
     */
    public function envs()
    {
        dump(Env::get('environment'));
//        dump(Env::get('emails', 'default'));
//        dump(Env::get('database.password'));
        dump(config());
    }

    /**
     * http://tp5.local/index/index/info/id/6
     * @param $id
     */
    public function info($id)
    {
        dump(url('index/index/index', ['id' => 10]));
        dump($id);
    }
}
