<?php
/***********************************************
 * 文件: /controller/user_babynurse.php
 * 说明: 宝宝喂奶信息管理
 * 作者: huhuachuan
 * 更新: 2015年11月1日
 ***********************************************/

/**
 * 后台
 */
class user_babynurse extends spController
{
	// function __construct() { //全局
 //        parent::__construct();
	// 	if(!$_SESSION["admin"]){$this->error("无权限访问，请先登录！", (spUrl("user_babynurselogin")));}
	// }
	/////////////////////////////////////////////////////////////////////////////////////////
	
	/**
	 * 宝宝喂奶信息列表
	 */
	function ListAdmin(){
		// if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
		$this->title="宝宝喂奶信息列表";
        $lib_user_babynursenurse = spClass("lib_user_babynursenurse");
        $this->results = $lib_user_babynursenurse->spPager($this->spArgs("page",1),15)->findAll();
        $pager=$lib_user_babynursenurse->spPager()->getPager();
        $this->pager=$pager;
        $this->c=$this->spArgs("c");
        $this->a=$this->spArgs("a"); 
        $this->display("admin/user_babynurse/ListAdmin.html"); 
	}
	/**
	 * 查询用户当前的宝宝喂奶信息API
	 */
	function apibyuseridasc(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_babynurse = spClass("lib_user_babynurse");
		if ($this->spArgs("userid") && $this->spArgs("user_babyid")){
			$condition = array(
								"userid"=>$this->spArgs("userid"),
								"user_babyid"=>$this->spArgs("user_babyid")
								);
			$result = $lib_user_babynurse->findAll($condition,'createtime');
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
	 * 查询用户当前的宝宝喂奶信息API
	 */
	function apibyuserid(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_babynurse = spClass("lib_user_babynurse");
		if ($this->spArgs("userid") && $this->spArgs("user_babyid")){
			$condition = array(
								"userid"=>$this->spArgs("userid"),
								"user_babyid"=>$this->spArgs("user_babyid")
								);
			$result = $lib_user_babynurse->findAll($condition,'createtime desc');
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
	 * 查询宝宝喂奶信息是否存在API
	 */
	function apiexist(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_babynurse = spClass("lib_user_babynurse");
		if ($this->spArgs("name")){
			$condition = array(
								"userid"=>$this->spArgs("userid"),
								"name"=>$this->spArgs("name")
								);
			$result = $lib_user_babynurse->find($condition);
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
	 * 添加宝宝喂奶信息API
	 */
	function apiadd(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user_babynurse = spClass("lib_user_babynurse");
		if ($this->spArgs("userid") && $this->spArgs("user_babyid")&& $this->spArgs("time")&& $this->spArgs("number")&& $this->spArgs("remarks")){
			$condition = array(
								'userid' => $this->spArgs("userid"),
								'user_babyid' => $this->spArgs("user_babyid"),
								'time' => $this->spArgs("time"),
								'number' => $this->spArgs("number"),
								'remarks' => $this->spArgs("remarks"),
								'createtime' => $this->spArgs("createtime")
								);
			$result = $lib_user_babynurse->find($condition);
			if($result)
			{
				echo null;
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'userid' => $this->spArgs("userid"),
								'user_babyid' => $this->spArgs("user_babyid"),
								'time' => $this->spArgs("time"),
								'number' => $this->spArgs("number"),
								'remarks' => $this->spArgs("remarks"),
								'createtime' => $this->spArgs("createtime")
								);
				$lib_user_babynurse->create($newrow);
				echo "宝宝喂奶信息建档成功";
			}
		}else{
			echo null;
		}
	}
	/**
	 * 添加宝宝喂奶信息
	 */
	function add(){	
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));}
		$this->title="添加宝宝喂奶信息";
        $lib_user_babynursenurse = spClass("lib_user_babynursenurse");
		if ($this->spArgs("user_babynursename")){
			$condition = array("user_babynursename"=>$this->spArgs("user_babynursename"));
			$result = $lib_user_babynursenurse->find($condition);
			if($result)
			{
				$this->error("宝宝喂奶信息名已被占用，请重新填写！", ($_SERVER['HTTP_REFERER']));
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'user_babynursename' => $this->spArgs("user_babynursename"),
								'password' => md5($this->spArgs("password")),
								'admin' => $this->spArgs("admin"),
								'wxname' => $this->spArgs("wxname")
								);
				$lib_user_babynursenurse->create($newrow);
				$this->success("添加宝宝喂奶信息成功！", (spUrl("user_babynurse","ListAdmin")));
			}
		}
		$this->display("admin/user_babynurse/add.html");
	}
	
	/**
	 * 编辑宝宝喂奶信息
	 */
	function update(){
		$this->title="编辑宝宝喂奶信息";
        $id = $this->spArgs("id");
		if($_SESSION["admin"]["gid"] == $id || $_SESSION["admin"]["admin"] == 'admin')
		{
			$lib_user_babynursenurse=spClass("lib_user_babynursenurse");
			$conditions=array("id"=>$id);
			$this->admins=$lib_user_babynursenurse->find($conditions);
			
			if ($this->spArgs("submit")){
				if($this->spArgs("pass_new")){
					$pass = md5($this->spArgs("pass_new"));
					}else{
						$pass = $this->spArgs("pass_old");
						}
				$newrow = array( // 这里是要修改的字段
						'user_babynursename' => $this->spArgs("user_babynursename"),
						'password' => $pass,
						'admin' => $this->spArgs("admin"),
						'wxname' => $this->spArgs("wxname")
						
						);
				$lib_user_babynursenurse->update($conditions,$newrow);
				//dump($newrow);
				$this->success("修改成功！", (spUrl("user_babynurse","update",array("id"=>$id))));
			}
			$this->display("admin/user_babynurse/update.html");
		}
		else
		{
			$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));
		}
		
	}
	
	/**
	 * 删除宝宝喂奶信息
	 */
	function del(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
        $lib_user_babynursenurse=spClass("lib_user_babynursenurse");
        $id=$this->spArgs("id");
        $conditions = array("id"=>$id); // 构造条件
        $lib_user_babynursenurse->delete($conditions);
		$this->success("删除成功", ($_SERVER['HTTP_REFERER']));
		// echo "ok";
	}
	
}