<?php
/***********************************************
 *		SpeedPHP功能演示类
 * 文件: /controller/upload.php
 * 说明: SpeedPHP功能演示类
 * 作者: aaron
 * 更新: 2017年12月11日
 ***********************************************/

/**
 * 添加生活类
 */
class userlife extends spController
{
    
    /**
     * 查询所有的生活API
     */
    function apiall(){
        //echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_userlife = spClass("lib_userlife");
        $result = $lib_userlife->findAll(null,'createtime desc');
        if($result)
        {
        echo json_encode(array('Success' => true,'data' => $result));//返回文件出错信息
        }
        else
        {
        echo json_encode(array('Success' => false,'result' => '没有数据'));//返回文件出错信息
        }
        
    }
	
    /**
     * 查询用户所有的生活API
     */
    function apibyuserid(){
        //echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        $lib_userlife = spClass("lib_userlife");
        if ($this->spArgs("userid")){
            $condition = array(
                                "userid"=>$this->spArgs("userid")
                                );
            $result = $lib_userlife->findAll($condition,'createtime desc');
            if($result)
            {
            echo json_encode(array('Success' => true,'data' => $result));//返回文件出错信息
            }
            else
            {
            echo json_encode(array('Success' => false,'result' => '没有数据'));//返回文件出错信息
            }
        }else{
            echo json_encode(array('Success' => false,'result' => '用户ID不存在'));//返回文件出错信息
        }
    }
    function lifeSave(){

        $lib_userlife = spClass("lib_userlife");

        if ($this->spArgs("userid")){

            // 这里制作新增记录的值
            $newrow = array( 
                            'userid' => $this->spArgs("userid"),
                            'content' => $this->spArgs("content"),
                            'files' => $this->spArgs("files"),
                            'remarks' => $this->spArgs("remarks"),
                            'createtime' => $this->spArgs("createtime")
                            );
            $resultid=$lib_userlife->create($newrow);
            echo json_encode(array('Success' => $resultid >0,'result' => $resultid));//返回
        }
        else{//如果文件类型非指定类型
            echo json_encode(array('Success' => false,'result' => 'You want to upload files is lawlessness file.'));//返回文件出错信息
        }
    }
   
}