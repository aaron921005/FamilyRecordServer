<?php
/***********************************************
 *		SpeedPHP功能演示类
 * 文件: /controller/upload.php
 * 说明: SpeedPHP功能演示类
 * 作者: aaron
 * 更新: 2017年12月11日
 ***********************************************/

/**
 * 上传文件类
 */
class userUpload extends spController
{

    function Save(){//用于保存文件及把文件名保存到数据库
        $upPath = 'D:/phpStudy/FamilyRecordServer/img/user/'.$this->spArgs("userid").'/';
        if (! file_exists ($upPath)) {
             mkdir ( $upPath, 0777, true );
        }
        if ($_FILES["file"]["error"] > 0){//如果文件出错
            echo json_encode(array('Success' => false,'result' => $_FILES["file"]["error"]));//返回文件出错信息
        }else{//否则进行文件操作及记录文件名到数据库
            $file = fopen($_FILES["file"]["tmp_name"], "rb");//以只读模式打开文件
            $bin = fread($file, 2); //只读取前2字节
            fclose($file);

            $strInfo = @unpack("C2chars", $bin);
            $typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
            $type_r = $this -> file_judge($typeCode);//用file_judge()判断文件是否为指定文件类型并获取文件扩展名

            if ($type_r[0] == true){//如果文件合法则进行以下操作
                $picture = date("Y-m-d_His") . $type_r[1];//设置保存的文件名
                $result=move_uploaded_file($_FILES["file"]["tmp_name"] , $upPath.$picture);//移动临时文件到指定目录下的指定文件名

                if ($result){
                    //返回
                    echo json_encode(array('Success' => true,'result' =>'' ,'SaveName'=>'img/user/'.$this->spArgs("userid").'/'.$picture));
                }
            }
            else{//如果文件类型非指定类型
                echo json_encode(array('Success' => false,'result' => 'You want to upload files is lawlessness file.'));//返回文件出错信息
                exit;
            }
        }
    }
    //file_judge()判断文件是否是指定类型,如果合法则以数组类型返回true和扩展名
    function file_judge($typeValue){
        switch ($typeValue){
            case 255216://这个是jpg类型
            $typeArray = array(true , '.jpg');
            return $typeArray;
            break;
            case 7173:
            $typeArray = array(true , '.gif');
            return $typeArray;
            break;
            case 13780:
            $typeArray = array(true , '.png');
            return $typeArray;
            break;
            case 0:
            $typeArray = array(true , '.mp4');
            return $typeArray;
            break;
            case 13780:
            $typeArray = array(true , '.png');
            return $typeArray;
            break;
            default:
              return $typeArray = array(false,'');//默认返回false和空
        }
    }
}