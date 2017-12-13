<?php
/***********************************************
 * 文件: /controller/user_babyphoto.php
 * 说明: 宝宝管理
 * 作者: huhuachuan
 * 更新: 2015年11月1日
 ***********************************************/

/**
 * 后台
 */
class user_babyphoto extends spController
{
	function __construct() { //全局
        parent::__construct();
		if(!$_SESSION["admin"]){$this->error("无权限访问，请先登录！", (spUrl("user_babyphotologin")));}
	}
	/////////////////////////////////////////////////////////////////////////////////////////
	
	/**
	 * 宝宝列表
	 */
	function ListAdmin(){
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", (spUrl("adminlogin")));}
		$this->title="宝宝列表";
        $lib_user_babyphoto = spClass("lib_user_babyphoto");
        $this->results = $lib_user_babyphoto->spPager($this->spArgs("page",1),15)->findAll();
        $pager=$lib_user_babyphoto->spPager()->getPager();
        $this->pager=$pager;
        $this->c=$this->spArgs("c");
        $this->a=$this->spArgs("a"); 
        $this->display("admin/user_babyphoto/ListAdmin.html"); 
	}
	
	/**
	 * 添加宝宝
	 */
	function add(){	
		if(!$_SESSION["admin"]["admin"] == 'admin'){$this->error("无权限访问，请先登录！", ($_SERVER['HTTP_REFERER']));}
		$this->title="添加宝宝";
        $lib_user_babyphoto = spClass("lib_user_babyphoto");
		if ($this->spArgs("user_babyphotoname")){
			$condition = array("user_babyphotoname"=>$this->spArgs("user_babyphotoname"));
			$result = $lib_user_babyphoto->find($condition);
			if($result)
			{
				$this->error("宝宝名已被占用，请重新填写！", ($_SERVER['HTTP_REFERER']));
			}
			else
			{
				$newrow = array( // 这里制作新增记录的值
								'user_babyphotoname' => $this->spArgs("user_babyphotoname"),
								'password' => md5($this->spArgs("password")),
								'admin' => $this->spArgs("admin"),
								'wxname' => $this->spArgs("wxname")
								);
				$lib_user_babyphoto->create($newrow);
				$this->success("添加宝宝成功！", (spUrl("user_babyphoto","ListAdmin")));
			}
		}
		$this->display("admin/user_babyphoto/add.html");
	}
	
	/**
	 * 编辑宝宝
	 */
	function update(){
		$this->title="编辑宝宝";
        $id = $this->spArgs("id");
		if($_SESSION["admin"]["gid"] == $id || $_SESSION["admin"]["admin"] == 'admin')
		{
			$lib_user_babyphoto=spClass("lib_user_babyphoto");
			$conditions=array("id"=>$id);
			$this->admins=$lib_user_babyphoto->find($conditions);
			
			if ($this->spArgs("submit")){
				if($this->spArgs("pass_new")){
					$pass = md5($this->spArgs("pass_new"));
					}else{
						$pass = $this->spArgs("pass_old");
						}
				$newrow = array( // 这里是要修改的字段
						'user_babyphotoname' => $this->spArgs("user_babyphotoname"),
						'password' => $pass,
						'admin' => $this->spArgs("admin"),
						'wxname' => $this->spArgs("wxname")
						
						);
				$lib_user_babyphoto->update($conditions,$newrow);
				//dump($newrow);
				$this->success("修改成功！", (spUrl("user_babyphoto","update",array("id"=>$id))));
			}
			$this->display("admin/user_babyphoto/update.html");
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
        $lib_user_babyphoto=spClass("lib_user_babyphoto");
        $id=$this->spArgs("id");
        $conditions = array("id"=>$id); // 构造条件
        $lib_user_babyphoto->delete($conditions);
		$this->success("删除成功", ($_SERVER['HTTP_REFERER']));
		// echo "ok";
	}
	
}