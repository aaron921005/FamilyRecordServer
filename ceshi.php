<?php  


 //连接数据库的参数  
    $host = "localhost";  
    $user = "root";  
    $pass = "Su201345Dong";  
    $db = "family";  
    //创建一个mysql连接  
    $connection = mysql_connect($host, $user, $pass) or die("Unable to connect!");  
    //选择一个数据库  
    mysql_select_db($db) or die("Unable to select database!");  
    //开始查询  
    $query = "SELECT * FROM sy_user_baby WHERE userid=1";  
    // echo $query; 
    //执行SQL语句  
    $result = mysql_query($query) or die("Error in query: $query. ".mysql_error());  

    echo json_encode(mysql_fetch_row($result)); 


?>