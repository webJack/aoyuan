<?php
namespace app\index\controller;
use \think\Controller;


class Tribune extends Controller
{
    public function index()
    {
      $this->assign('title','江湖论坛');

        //查询列表       
        $list = db('news')->select(); 
        $tol_list = db('news')->count();      

        if (input('topage')) {
            $cur_page=input('topage')-1;
            
        }else{
            $cur_page = input('cur_page')==null?0:input('cur_page');
        }
        
        //get page
        $get_page_list = getPage($list);
        $news_list = model('tribune')->get_news_list($cur_page);

        $first_list = model('tribune')->get_news_list(0,5);
        $first_show = array_slice($first_list,0,5);
        // print_r($first_show);
        // exit();
        // echo $cur_page;
        $this->assign("tol_list",$tol_list);
        $this->assign('get_page_list', $get_page_list);
        $this->assign('first_show', $first_show);
        $this->assign('get_page_list_inner', $get_page_list['page_list'][$cur_page]);
        $this->assign('news_list',$news_list);

        // echo $get_page_list['cur_page'];
        // exit();
        return $this->fetch();
    }

	public function tribune_sub()
    {
        $news_content = model('tribune')->get_news_content();

      $this->assign('title',$news_content['title']);

        $this->assign('news_content',$news_content);    	
        return $this->fetch();
    }    
}
