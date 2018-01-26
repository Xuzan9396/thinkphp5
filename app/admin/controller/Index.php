<?php
namespace app\admin\controller;

use app\comment\controller\Index as commentIndex;
class Index
{
    public function index()
    {
       $comment =  new commentIndex();
       echo $comment->index();
       echo 'admin';
    }


}
