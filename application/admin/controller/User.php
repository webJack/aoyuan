<?php 
namespace app\admin\controller;

class User extends \think\Controller
{
	
	// 列表
	 public function index()
    {
    	// 查询列表
    	$user_list = db("user")->paginate();
    	$this->assign("user_list",$user_list);
        
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

    public function auditing()
    {   
        $user_info = db('user')->where('id='.input('id'))->find();
        $this->assign('user_info',$user_info);
        return $this->fetch();
    }

    public function create_vip()
    {
        //to专家表
        db('vip')->insert([
            'vip_uid'=>input('uid'),
            'add_time'=>time()
        ]);
        //to专家统计表
        db('vip_count')->insert([
            'uid'=>input('uid')
        ]);

        $this->success('nice','index');
    }
}

?>