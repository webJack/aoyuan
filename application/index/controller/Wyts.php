<?php
namespace app\index\controller;
use \think\Controller;


class Wyts extends Controller
{
    public function kfts()
    {
      $this->assign('title','我要提升开发');

        return $this->fetch();
    }
	public function sjts()
    {
      $this->assign('title','我要提升设计');

        return $this->fetch();
    }
}
