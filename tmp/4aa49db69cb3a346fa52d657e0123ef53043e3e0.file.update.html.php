<?php /* Smarty version Smarty-3.0.8, created on 2017-12-04 07:51:39
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\admin/user/update.html" */ ?>
<?php /*%%SmartyHeaderCode:234725a24fe8b13d755-13902771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aa49db69cb3a346fa52d657e0123ef53043e3e0' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\admin/user/update.html',
      1 => 1512373765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234725a24fe8b13d755-13902771',
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
	if (form.user.value.replace(/ /g,"")==""){
		alert("帐号不能为空，请重新填写！");
		form.user.focus();
		return false;
		}
	if (form.pass.value.replace(/ /g,"")==""){
		alert("密码不能为空，请重新填写！");
		form.pass.focus();
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
<form name="myform" onsubmit="return cheackbook();" id="myform" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'update','id'=>$_smarty_tpl->getVariable('admins')->value['id']),$_smarty_tpl);?>
">

<div class="form-group">
  <label for="username">帐号：</label>
  <input name="username" type="test" class="form-control" id="username" value="<?php echo $_smarty_tpl->getVariable('admins')->value['username'];?>
">
</div>

<div class="form-group">
  <label for="pass_new">密码：</label>
  <input name="pass_new" type="test" class="form-control" id="pass_new" value=""><input name="pass_old" type="hidden" id="pass_old" value="<?php echo $_smarty_tpl->getVariable('admins')->value['password'];?>
" />
</div>

<?php if ($_SESSION['admin']['admin']=='admin'){?>
<div class="form-group">
  <label for="admin">管理等级：</label>
  <select name="admin" id="admin"  class="form-control">
  <option value="<?php echo $_smarty_tpl->getVariable('admins')->value['admin'];?>
" selected="selected">当前：<?php echo $_smarty_tpl->getVariable('admins')->value['admin'];?>
</option>
  <option value="user">普通用户（user）</option>
  <option value="admin">系统用户（admin）</option>
  </select>
</div>

<div class="form-group">
  <label for="wxname">微信名称：</label>
  <input name="wxname" type="test" class="form-control" id="wxname" value="<?php echo $_smarty_tpl->getVariable('admins')->value['wxname'];?>
">
</div>
<?php }else{ ?>
绑定留言板：<?php echo GidToGname(array('gid'=>$_smarty_tpl->getVariable('admins')->value['gid'],'admin'=>$_smarty_tpl->getVariable('admins')->value['admin']),$_smarty_tpl);?>

<?php }?>

<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <button type="submit" name="submit" value="确认修改" class="btn btn-success navbar-btn"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 确认修改</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="重置" class="btn btn-default" />
  </div>
</nav>

</form>
</div><!--content End-->
</body>
</html>