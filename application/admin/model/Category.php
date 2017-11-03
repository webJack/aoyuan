<?php 
namespace app\admin\model;
	
/**
* 
*/
class Category extends \think\Model{
	
	// 获取一二级分类 
	public function getParentCate()
	{
		return db("category")
				->field("cate_name,id,level,parent_id")
				->where("level<3")
				->select();
	}

	// 获取第三级分类
	public function getThirdCate()
	{
		return db("category")
				->field("cate_name,id,level")
				->where("level=3")
				->select();
	}


	function getList()
	{
		return db("category")
			->field("cate_name,id,level,parent_id") 
			->order("level asc")
			->select();
			// return  $this->query("select cate_name,id,level,parent_id from zh_category order by level asc ");
	}

	public function saveInfo()
	{
		// list语法，如果有分割，就可以用它直接赋值
		// 第一个参数：分割后的数组0下标值，
		// 第二个参数：分割后的数组1下标值，
		// ........
		
		list($parent_id,$level) = explode("_", input('parent_id'));

		db('category')->insert([
			'cate_name'=>input('cate_name'),
			'parent_id'=>$parent_id,
			'level'=>++$level,
			]);
	}
}
 ?>