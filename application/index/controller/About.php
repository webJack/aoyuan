<?php
namespace app\index\controller;
use \think\Controller;


class About extends Controller
{
    public function index()
    {
    	$this->assign('title','关于我们');
        return $this->fetch();
    }
  
}
