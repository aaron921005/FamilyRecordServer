<?php /* Smarty version Smarty-3.0.8, created on 2017-12-04 03:29:48
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\system/alert/error.html" */ ?>
<?php /*%%SmartyHeaderCode:251175a24c12cd3df11-72604831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '428052958f6759f345c0fd960e3c9c31b6f5595e' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\system/alert/error.html',
      1 => 1447341413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251175a24c12cd3df11-72604831',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('time')->value;?>
;URL=<?php echo $_smarty_tpl->getVariable('url')->value;?>
" />

<title>操作失败提示</title>
<link rel="stylesheet" type="text/css" href="tpl/system/alert/success.css"/>
</head>

<body>
<div class="container" id="cpcontainer">
    <h3 class="h3error">操作失败提示</h3>
    <div class="success">
        <h4 class="infotitle_error"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</h4>
        <p class="marginbot"><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" class="lightlink_error">如果您的浏览器<?php echo $_smarty_tpl->getVariable('time')->value;?>
秒内没有自动跳转，请点击这里</a></p>
    </div>
</div>
</body>
</html>
