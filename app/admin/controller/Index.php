<?php
namespace app\admin\controller;

use app\comment\controller\Index as commentIndex;
class Index
{
    public function __construct()
    {
        config('before', 'beforeAction');
    }

    public function index()
    {
       $comment =  new commentIndex();
       echo $comment->index();
       echo 'admin';
       dump(config());
    }

    public function user()
    {
        dump('user');
    }


}
