<?php
class lib_user extends spModel
{
  var $pk = "id"; // 数据表的主键
  var $table = "user"; // 数据表的名称
  
	 // 由spModel的变量$linker来设置表间关联
        var $linker = array(
                array(
                        'type' => 'hasmany',   // 一对多关联
                        'map' => 'life',    // 关联的标识
                        'mapkey' => 'id', 
                        'fclass' => 'lib_userlife',
                        'fkey' => 'userid',
                        'enabled' => true
                ),
                array(
                        'type' => 'hasmany',   // 一对多关联
                        'map' => 'baby',    // 关联的标识
                        'mapkey' => 'id', 
                        'fclass' => 'lib_user_baby',
                        'fkey' => 'userid',
                        'enabled' => true
                ),
        );	
 	 /**
	 * 这里我们建立一个成员函数来进行用户登录验证
	 *
	 * @param uname    用户名
	 * @param upass    密码，请注意，本例中使用了加密输入框，所以这里的$upass是经过MD5加密的字符串。
	 */
	public function userlogin($username, $password){ 
		$conditions = array(
			'username' => $username,
			'password' => $password, // 请注意，本例中使用了加密输入框，所以这里的$upass是经过MD5加密的字符串。
		);
		
		if( $result = $this->find($conditions) ){ 
			$_SESSION["user"] = $result; // 在SESSION中记录当前管理员的信息
			return true;
		}else{
			// 找不到匹配记录，用户名或密码错误，返回false
			return false;
		}
	}	


		
}