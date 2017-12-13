<?php
/***********************************************
 * 文件: /controller/user.php
 * 说明: 用户管理
 * 作者: huhuachuan
 * 更新: 2015年11月1日
 ***********************************************/

/**
 * 后台
 */
class user extends spController
{
	// function __construct() { //全局
 //        parent::__construct();
	// 	if(!$_SESSION["admin"]){$this->error("无权限访问，请先登录！", (spUrl("userlogin")));}
	// }
	/////////////////////////////////////////////////////////////////////////////////////////
	
	/**
	 * 用户列表
	 */
	function ListAdmin(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
		$this->title="用户列表";
        $lib_user = spClass("lib_user");
        $this->results = $lib_user->spPager($this->spArgs("page",1),15)->findAll();
        $pager=$lib_user->spPager()->getPager();
        $this->pager=$pager;
        $this->c=$this->spArgs("c");
        $this->a=$this->spArgs("a"); 
        $this->display("admin/user/ListAdmin.html"); 
	}
	/**
	 * 查询用户是否存在API
	 */
	function apiexist(){
		// echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user = spClass("lib_user");
		if ($this->spArgs("openid")){
			$condition = array("openid"=>$this->spArgs("openid"));
			$result = $lib_user->find($condition);
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
	 * 添加用户API
	 */
	function apiadd(){
		//echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_user = spClass("lib_user");
		if ($this->spArgs("openid")){
			$condition = array("openid"=>$this->spArgs("openid"));
			$result = $lib_user->find($condition);
			if($result)
			{
			echo null;
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'username' => $this->spArgs("username"),
								'password' => md5($this->spArgs("password")),
								'admin' => $this->spArgs("admin"),
								'wxname' => $this->spArgs("wxname"),
								'openid' => $this->spArgs("openid"),
								'sex' => $this->spArgs("sex"),
								'time' => date("Y-m-d h:i:sa")
								);
				$lib_user->create($newrow);
				echo "用户创建成功";
			}
		}else{
			echo null;
		}
	}
	/**
	 * 添加用户
	 */
	function add(){	
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));}
		$this->title="添加用户";
        $lib_user = spClass("lib_user");
		if ($this->spArgs("username")){
			$condition = array("username"=>$this->spArgs("username"));
			$result = $lib_user->find($condition);
			if($result)
			{
				$this->error("用户名已被占用，请重新填写！", ($_SERVER['HTTP_REFERER']));
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'username' => $this->spArgs("username"),
								'password' => md5($this->spArgs("password")),
								'admin' => $this->spArgs("admin"),
								'wxname' => $this->spArgs("wxname")
								);
				$lib_user->create($newrow);
				$this->success("添加用户成功！", (spUrl("user","ListAdmin")));
			}
		}
		$this->display("admin/user/add.html");
	}
	
	/**
	 * 编辑用户
	 */
	function update(){
		$this->title="编辑用户";
        $id = $this->spArgs("id");
		if($_SESSION["admin"]["gid"] == $id || $_SESSION["admin"]["admin"] == 'admin')
		{
			$lib_user=spClass("lib_user");
			$conditions=array("id"=>$id);
			$this->admins=$lib_user->find($conditions);
			
			if ($this->spArgs("submit")){
				if($this->spArgs("pass_new")){
					$pass = md5($this->spArgs("pass_new"));
					}else{
						$pass = $this->spArgs("pass_old");
						}
				$newrow = array( // 这里是要修改的字段
						'username' => $this->spArgs("username"),
						'password' => $pass,
						'admin' => $this->spArgs("admin"),
						'wxname' => $this->spArgs("wxname")
						
						);
				$lib_user->update($conditions,$newrow);
				//dump($newrow);
				$this->success("修改成功！", (spUrl("user","update",array("id"=>$id))));
			}
			$this->display("admin/user/update.html");
		}
		else
		{
			$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));
		}
		
	}
	
	/**
	 * 删除用户
	 */
	function del(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
        $lib_user=spClass("lib_user");
        $id=$this->spArgs("id");
        $conditions = array("id"=>$id); // 构造条件
        $lib_user->delete($conditions);
		$this->success("删除成功", ($_SERVER['HTTP_REFERER']));
		// echo "ok";
	}
	
}