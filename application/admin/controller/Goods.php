<?php 
namespace app\admin\controller;

class Goods extends \think\Controller
{
	
	// 列表
	 public function index()
    {
    	// 查询列表
    	$class_list = model("Goods")->getList();
    	print_r($class_list);
    	$this->assign("class_list",$class_list);
        
         // 所有分类  
        $cate_list = model("Category")->getList();

        //获取树状分类 
        $cate_tree = getCateTree($cate_list);
        $this->assign('cate_tree',$cate_tree); 

    	// 分页
    	// 查询分类
       return $this->fetch();
    }

	// 添加
	function add()
	{
		$cate_list = model("Category")->getList();

		$this->assign("cate_tree",getCateTree($cate_list));

    	return $this->fetch();
	}

	public function save()
	{
		model("Goods")->saveInfo();

        $this->success("添加成功","index");
	}

	public function edit()
	{
		  // 进入编辑页面
        // 获取当前编辑的信息
        $info = db("class")->where("id=".input('id'))->find();

        $cate_list = model("Category")->getList();
 
        $this->assign("info",$info);
        $this->assign("cate_tree",getCateTree($cate_list));
       return $this->fetch();
	}

	// 处理编辑
    public function update()
    {

        db("class")->update(input());//input直接获取到主键

        $this->success("修改成功","index");

    }
    // 删除 
     public function delete()
    {

        db("class")->where("id=".input('id'))->delete();

        $this->success("删除成功","index");

    }
}

?>