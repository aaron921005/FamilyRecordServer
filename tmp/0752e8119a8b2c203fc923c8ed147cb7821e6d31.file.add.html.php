<?php /* Smarty version Smarty-3.0.8, created on 2017-12-11 07:02:27
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\admin/upload/add.html" */ ?>
<?php /*%%SmartyHeaderCode:172875a2e2d830cec44-13022613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0752e8119a8b2c203fc923c8ed147cb7821e6d31' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\admin/upload/add.html',
      1 => 1512975309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172875a2e2d830cec44-13022613',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo @WEBNAME;?>
</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
 function cheackbook(){
	var form=document.myform;
	if (form.username.value.replace(/ /g,"")==""){
		alert("帐号不能为空，请重新填写！");
		form.username.focus();
		return false;
		}
	if (form.password.value.replace(/ /g,"")==""){
		alert("密码不能为空，请重新填写！");
		form.password.focus();
		return false;
		}

		}
</script>
</head>

<body>
<!--admin-bread-->
<div class="admin-bread">
  <span class="fr">
    <?php $_template = new Smarty_Internal_Template("admin/index/smalltop.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </span>
  
  <ul class="fl">
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'content'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 开始</a></li>
      <li>/</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'ListAdmin'),$_smarty_tpl);?>
">帐号列表</a></li>
      <li>/</li>
      <li><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ul>
</div><!--admin-bread End-->

<!--content-->
<div class="content">
<form onsubmit="return cheackbook();" id="myform" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'upload','a'=>'pictureSave'),$_smarty_tpl);?>
" method="post" enctype="multipart/form-data">

	<label for="file">请选择要上传的文件:</label>

	<input type="file" name="file" id="file" />

	<label>输入图片描述:</label><input type="text" name="picDesc" /><br />

	<nav class="navbar navbar-default navbar-fixed-bottom">
	  <div class="container-fluid">
	    <button type="submit" name="submit" value="确认添加" class="btn btn-success navbar-btn"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 确认添加</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="reset" value="重置" class="btn btn-default" />
	  </div>
	</nav>

</form>
</div><!--content End-->
</body>
</html>