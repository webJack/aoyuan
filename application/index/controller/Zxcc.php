<?php
namespace app\index\controller;
use \think\Controller;


class Zxcc extends Controller
{
    public function brzx()
    {
      $this->assign('title','百人助学 - 助学成才');

        return $this->fetch();
    }

	public function qrpy()
    {
      $this->assign('title','千人培养 - 助学成才');

        return $this->fetch();
    }    

	public function qrpy2()
    {
        return $this->fetch();
    }    

	public function wrsy()
    {
      $this->assign('title','万人受益 - 助学成才');

        return $this->fetch();
    }    

	public function xmjs()
    {
      $this->assign('title','项目讲师 - 助学成才');

        return $this->fetch();
    }    
 
}
