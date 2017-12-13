<?php
/***********************************************
 *		SpeedPHP功能演示类
 * 文件: /controller/wx.php
 * 说明: SpeedPHP功能演示类
 * 作者: Myxf
 * 更新: 2015年5月14日
 ***********************************************/

// include_once  app_path('../include/aes-sample/PHP/wxBizDataCrypt.php');
/**
 * SpeedPHP功能演示类
 */
class wx extends spController
{


	function index(){
		echo "hello world!";
	}

    //获取用户Openid
	function wxUserDetail(){
        // echo "string";
        $code  =  $this->spArgs('code');
        $encryptedData  =  $this->spArgs('encryptedData');
        $iv  =  $this->spArgs('iv');
        $appid = 'wxfd51c31acf1093c5' ;
        $secret =  '2f2790376f2974e85aae761d69a3ceb1';
     
        $URL = "https://api.weixin.qq.com/sns/jscode2session?appid=".$appid."&secret=".$secret."&js_code=".$code."&grant_type=authorization_code";


       
     
        $apiData=file_get_contents($URL);
         echo $apiData;
        // echo $apiData;
     
        // if(stripos($apiData,"openid")!== false){
        //   $sessionKey = json_decode($apiData)->session_key;
        //     echo $sessionKey;
        //   $userifo = new WXBizDataCrypt($appid, $sessionKey);
        //     echo "syd";
     
        //   $errCode = $userifo->decryptData($encryptedData, $iv, $data );
     
        //   if ($errCode == 0) {
        //     echo json_encode($data);
        //   } else {
        //     echo json_encode($errCode);
        //   }
        // }else{
        //     echo "syd";
        // }

        // $appid='wxfd51c31acf1093c5';
        // $secret='2f2790376f2974e85aae761d69a3ceb1';
        // $js_code=$this->spArgs("js_code");
        // $js_code=$this->spArgs("js_code");
        // $js_code=$this->spArgs("js_code");
        // echo "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$js_code."&grant_type=authorization_code";

        // $weixin =  file_get_contents("https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$js_code."&grant_type=authorization_code");
        // echo $weixin;
        // //通过code换取网页授权access_token
        // $jsondecode = json_decode($weixin); //对JSON格式的字符串进行编码
        // echo $jsondecode;
        // $array = get_object_vars($jsondecode);//转换成数组
        // $openid = $array['openid'];//输出openid

        // echo $openid;
	}

    

	
}