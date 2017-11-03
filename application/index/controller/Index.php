<?php
namespace app\index\controller;
use \think\Controller;


class Index extends Controller
{
    public function index()
    {
      $this->assign('title','');
      
        return $this->fetch();
    }

	public function save()
    {	
       $data = [
       				'user_name'=>input('user_name'),
       				'user_phone'=>input('tel'),
       				'school'=>input('user_school'),
       				'user_email'=>input('email'),
       				'content'=>input('user_content'),
       				'create_time'=>time()
       		   ];

       db('user')->insert($data);
    }    
}
