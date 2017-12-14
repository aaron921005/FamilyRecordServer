<?php
class lib_userlife extends spModel
{
  var $pk = "id"; // 数据表的主键
  var $table = "userlife"; // 数据表的名称  // 由spModel的变量$linker来设置表间关联
        var $linker = array(
                array(
                        'type' => 'hasone',   // 关联类型，这里是一对一关联
                        'map' => 'user',    // 关联的标识
                        'mapkey' => 'userid', // 本表与对应表关联的字段名
                        'fclass' => 'lib_user', // 对应表的类名
                        'fkey' => 'id',    // 对应表中关联的字段名
                        'enabled' => true     // 启用关联
                )
        );
  
}