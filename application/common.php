<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function getPage($total_list,$page_num=1)
{	
	//总页数
	$tol_page = ceil(count($total_list)/$page_num)==0?1:ceil(count($total_list)/$page_num);
	// echo "<br>";
	// echo $tol_page;
	// exit();
	// $cur_page = intval(input('cur_page'))>0?intval(input('cur_page')):0;

 	if (input('topage')) {
            $cur_page= intval(input('topage'))-1;
    }else{
        $cur_page = intval(input('cur_page'))>0?intval(input('cur_page')):0;
    }	

	$page_list =[];
	for($i=1;$i<=$tol_page;$i++){
		$page_list [] = array_slice($total_list, $i*$cur_page,$page_num,true);
	}
	$last_list = array_slice($total_list, ($cur_page-1)*$cur_page,$page_num,true);
	return [
		'tol_page'=>$tol_page,
		'cur_page'=>$cur_page,
		'last_list'=>$last_list,
		'page_list'=>$page_list
	];
	
}