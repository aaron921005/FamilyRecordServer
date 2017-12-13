<?php /* Smarty version Smarty-3.0.8, created on 2017-12-05 03:45:48
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\admin/user_baby/update.html" */ ?>
<?php /*%%SmartyHeaderCode:6255a26166c86de04-59549047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '932e38ef0433fc347fb530ceebc69205021746fc' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\admin/user_baby/update.html',
      1 => 1512445496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6255a26166c86de04-59549047',
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
<link href="tpl/admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
 function cheackbook(){
	var form=document.myform;
	if (form.name.value.replace(/ /g,"")==""){
    alert("姓名不能为空，请重新填写！");
    form.name.focus();
    return false;
    }
  if (form.birthdate.value.replace(/ /g,"")==""){
    alert("出生日期不能为空，请重新填写！");
    form.birthdate.focus();
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
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_baby','a'=>'ListAdmin'),$_smarty_tpl);?>
">帐号列表</a></li>
      <li>/</li>
      <li><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ul>
</div><!--admin-bread End-->

<!--content-->
<div class="content">
<form name="myform" onsubmit="return cheackbook();" id="myform" method="post" action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_baby','a'=>'update','id'=>$_smarty_tpl->getVariable('model')->value['id']),$_smarty_tpl);?>
">

<input name="userid" type="hidden" id="userid" value="<?php echo $_smarty_tpl->getVariable('model')->value['userid'];?>
" />
<div class="form-group">
  <label for="name">姓名：</label>
  <input name="name" type="test" class="form-control" id="name" value="<?php echo $_smarty_tpl->getVariable('model')->value['name'];?>
">
</div>

<div class="form-group">
  <label for="birthdate">出生日期：</label>
  <div class="input-group date form_datetime col-md-12" data-date="<?php echo $_smarty_tpl->getVariable('model')->value['birthdate'];?>
" data-date-format="dd MM yyyy - HH:ii p" data-link-field="birthdate">
    <input class="form-control" size="16" type="text" value="<?php echo $_smarty_tpl->getVariable('model')->value['birthdate'];?>
" readonly>
    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
  </div>
  <input name="birthdate" type="hidden" class="form-control" id="birthdate" value="<?php echo $_smarty_tpl->getVariable('model')->value['birthdate'];?>
">
</div>

<div class="form-group">
  <label for="sex">性别：</label>
  <select name="sex" id="sex"  class="form-control">
  <option value="<?php echo $_smarty_tpl->getVariable('model')->value['sex'];?>
" selected="selected">当前：<?php echo $_smarty_tpl->getVariable('model')->value['sex'];?>
</option>
  <option value="男孩" selected="selected">男孩</option>
  <option value="女孩">女孩</option>
  </select>
</div>

<div class="form-group">
  <label for="height">身高(cm)：</label>
  <input name="height" type="number" class="form-control" id="height" value="<?php echo $_smarty_tpl->getVariable('model')->value['height'];?>
">
</div>

<div class="form-group">
  <label for="weight">体重(斤)：</label>
  <input name="weight" type="number" class="form-control" id="weight" value="<?php echo $_smarty_tpl->getVariable('model')->value['weight'];?>
">
</div>

<div class="form-group">
  <label for="remarks">备注：</label>
  <textarea id="remarks"  name="remarks" class="form-control" rows="3" ><?php echo $_smarty_tpl->getVariable('model')->value['remarks'];?>
</textarea>
</div>

<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container-fluid">
    <button type="submit" name="submit" value="确认修改" class="btn btn-success navbar-btn"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 确认修改</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="重置" class="btn btn-default" />
  </div>
</nav>

</form>
</div><!--content End-->
<script type="text/javascript" src="tpl/admin/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="tpl/admin/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
  $(function(){
    
  })
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
</script>
</body>
</html>