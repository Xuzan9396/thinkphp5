<?php
namespace app\api\controller;

use app\comment\controller\Index as commentIndex;
class Index
{
    public function __construct()
    {
        config('before', 'beforeAction');
    }

    public function index()
    {
      dump('api') ;
    }

    public function user()
    {
        dump('user');
    }

    public function demo()
    {
        dump('demo');
    }


}
