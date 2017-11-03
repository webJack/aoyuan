<?php 
namespace app\admin\controller;

/**
* 
*/
class Category extends \think\Controller
{
	
	public function index()
	{
		// 查询列表
    	$cate_list = db("category")->paginate(10);

    	$this->assign("cate_list",$cate_list);
    	// 分页
    	// 查询分类
       return $this->fetch();
	}

	public function add()
	{
		$cate_list = model("Category")->getParentCate();

        $cate_list = getCateTree($cate_list);
        $this->assign("cate_list",$cate_list);

    	return $this->fetch();
	}

	public function save()
	{
		model("Category")->saveInfo();

        $this->success("添加成功","index");
	}
}
?>