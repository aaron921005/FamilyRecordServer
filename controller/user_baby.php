<?php
/***********************************************
 * 文件: /controller/user_baby.php
 * 说明: 宝宝管理
 * 作者: huhuachuan
 * 更新: 2015年11月1日
 ***********************************************/

/**
 * 后台
 */
class user_baby extends spController
{
	// function __construct() { //全局
 //        parent::__construct();
	// 	if(!$_SESSION["admin"]){$this->error("无权限访问，请先登录！", (spUrl("user_babylogin")));}
	// }
	/////////////////////////////////////////////////////////////////////////////////////////
	
	/**
	 * 宝宝列表
	 */
	function ListAdmin(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
		$this->title="宝宝列表";
        $lib_user_baby = spClass("lib_user_baby");
        $this->results = $lib_user_baby->spPager($this->spArgs("page",1),15)->findAll();
        $pager=$lib_user_baby->spPager()->getPager();
        $this->pager=$pager;
        $this->c=$this->spArgs("c");
        $this->a=$this->spArgs("a"); 
        $this->display("admin/user_baby/ListAdmin.html"); 
	}
	/**
	 * 查询用户所有的宝宝API
	 */
	function apibyuserid(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_baby = spClass("lib_user_baby");
		if ($this->spArgs("userid")){
			$condition = array(
								"userid"=>$this->spArgs("userid")
								);
			$result = $lib_user_baby->findAll($condition);
			if($result)
			{
				echo json_encode($result);
			}
			else
			{
				echo null;
			}
		}else{
			echo null;
		}
	}
	/**
	 * 查询宝宝是否存在API
	 */
	function apiexist(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_baby = spClass("lib_user_baby");
		if ($this->spArgs("name")){
			$condition = array(
								"userid"=>$this->spArgs("userid"),
								"name"=>$this->spArgs("name")
								);
			$result = $lib_user_baby->find($condition);
			if($result)
			{
				echo json_encode($result);
			}
			else
			{
				echo null;
			}
		}else{
			echo null;
		}
	}
	/**
	 * 添加宝宝API
	 */
	function apiadd(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_baby = spClass("lib_user_baby");
		if ($this->spArgs("name")){
			$condition = array(
								"userid"=>$this->spArgs("userid"),
								"name"=>$this->spArgs("name")
								);
			$result = $lib_user_baby->find($condition);
			if($result)
			{
				echo null;
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'userid' => $this->spArgs("userid"),
								'name' => $this->spArgs("name"),
								'birthdate' => $this->spArgs("birthdate"),
								'sex' => $this->spArgs("sex"),
								'height' => $this->spArgs("height"),
								'weight' => $this->spArgs("weight"),
								'remarks' => $this->spArgs("remarks")
								);
				$lib_user_baby->create($newrow);
				echo "宝宝建档成功";
			}
		}else{
			echo null;
		}
	}
	/**
	 * 添加宝宝
	 */
	function add(){	
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));}
		$this->title="添加宝宝";
        $lib_user_baby = spClass("lib_user_baby");
		if ($this->spArgs("name")){
			$condition = array("name"=>$this->spArgs("name"));
			$result = $lib_user_baby->find($condition);
			if($result)
			{
				$this->error("宝宝名已被占用，请重新填写！", ($_SERVER['HTTP_REFERER']));
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'userid' => $this->spArgs("userid"),
								'name' => $this->spArgs("name"),
								'birthdate' => $this->spArgs("birthdate"),
								'sex' => $this->spArgs("sex"),
								'height' => $this->spArgs("height"),
								'weight' => $this->spArgs("weight"),
								'remarks' => $this->spArgs("remarks")
								);
				$lib_user_baby->create($newrow);
				$this->success("添加宝宝成功！", (spUrl("user_baby","ListAdmin")));
			}
		}
		$this->display("admin/user_baby/add.html");
	}
	
	/**
	 * 编辑宝宝
	 */
	function update(){
		$this->title="编辑宝宝";
        $id = $this->spArgs("id");
		if($_SESSION["admin"]["admin"] == 'admin')
		{
			$lib_user_baby=spClass("lib_user_baby");
			$conditions=array("id"=>$id);
			$this->model=$lib_user_baby->find($conditions);
			
			if ($this->spArgs("submit")){
				if($this->spArgs("pass_new")){
					$pass = md5($this->spArgs("pass_new"));
					}else{
						$pass = $this->spArgs("pass_old");
						}
				$newrow = array( // 这里是要修改的字段
							'userid' => $this->spArgs("userid"),
							'name' => $this->spArgs("name"),
							'birthdate' => $this->spArgs("birthdate"),
							'sex' => $this->spArgs("sex"),
							'height' => $this->spArgs("height"),
							'weight' => $this->spArgs("weight"),
							'remarks' => $this->spArgs("remarks")
						
						);
				$lib_user_baby->update($conditions,$newrow);
				//dump($newrow);
				$this->success("修改成功！", (spUrl("user_baby","update",array("id"=>$id))));
			}
			$this->display("admin/user_baby/update.html");
		}
		else
		{
			$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));
		}
		
	}
	
	/**
	 * 删除宝宝
	 */
	function del(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
        $lib_user_baby=spClass("lib_user_baby");
        $id=$this->spArgs("id");
        $conditions = array("id"=>$id); // 构造条件
        $lib_user_baby->delete($conditions);
		$this->success("删除成功", ($_SERVER['HTTP_REFERER']));
		// echo "ok";
	}
	
}