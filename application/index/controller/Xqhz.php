<?php
namespace app\index\controller;
use \think\Controller;


class Xqhz extends Controller
{
    public function index()
    {
      $this->assign('title','校企合作');

        return $this->fetch();
    }
}
