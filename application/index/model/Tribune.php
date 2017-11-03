<?php
namespace app\index\model;
use \think\Model;

class Tribune extends Model
{
   public function get_news_list($cur_page,$num=1){
       //起始
       $start = $cur_page*$num;
       $news_list = db('news')
                        ->field('id,title,short_content,img')
                        ->limit($start,$num)
                        ->order('id desc')
                        ->select();
        return $news_list;
   }
   
   public function get_news_content(){
       $news_content= db('news')
                        ->field('title,content')
                        ->find();
        return $news_content;
   }
}
