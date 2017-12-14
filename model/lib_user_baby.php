<?php
class lib_user_baby extends spModel
{
  var $pk = "id"; // 数据表的主键
  var $table = "user_baby"; // 数据表的名称
        var $linker = array(
                array(
                        'type' => 'hasmany',   // 一对多关联
                        'map' => 'lib_user_babynurse',    // 关联的标识
                        'mapkey' => 'id', 
                        'fclass' => 'lib_user_babynurse',
                        'fkey' => 'user_babyid',
                        'enabled' => true
                )
        );
  
 	
}