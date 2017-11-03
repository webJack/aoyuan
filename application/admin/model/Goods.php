<?php 
namespace app\admin\model;

/**
* 
*/
class Goods extends \think\Model{
	// 保存信息
	public function saveInfo()
	{
		db('class')->insert([
				'cate_id'=>input('cate_id'),
				'class_name'=>input('class_name'),
				'class_price'=>input('class_price'),
				'class_content'=>input('class_content'),
				'create_time'=>time()
				
			]);
	}

	public function getList($cate_id='')
	{
		 echo $cate_id;
		 // 传的是职场发展 》 》 第三级
		 // 属于职场发展的所有三级分类全部找出来   
		 // in （所有分类）
		// 到底是那一级分类
		
		$where_sql = '';
		if ($cate_id) {
			$cate_info = $this->find("select cate_name,id,level from zh_category where id=$cate_id");

			if ($cate_info['level'] == 3) {

				$where_sql = "where c.cate_id = $cate_id";

			}else if ($cate_info['level'] == 2) {

				$where_sql = "where g.parent_id = $cate_id";

			}else if ($cate_info['level'] == 1) {
				// 一级菜单
				// 二级菜单ID 23,1313,13,13,13
			 	$second_menu_list = $this->query("select id from zh_category where parent_id=$cate_id");
			 	$second_menu_ids = [];
			     foreach ($second_menu_list as $key => $value) {
			     	 $second_menu_ids[] =$value['id'];
			     }
			     
				$where_sql = "where g.parent_id in(".implode(",", $second_menu_ids).")";
			}
		}

		return db('class')
				->alias('c')
				->field("c.id,c.class_name,g.cate_name,c.class_price,c.create_time")
				->join("category g","c.cate_id = g.id")
				->where($where_sql)
				->order("c.id asc")
				->paginate(12);

		// return $this->query("select c.id,c.class_name,g.cate_name,c.create_time from zh_class c join zh_category g on c.cate_id = g.id $where_sql");

	}
	
}
 ?>