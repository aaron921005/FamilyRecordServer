<?php /* Smarty version Smarty-3.0.8, created on 2017-12-11 07:44:49
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\admin/index/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:248855a2e3771b3f9b3-61574470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf5311d09fdc512546838c04aea2b464d646193' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\admin/index/menu.html',
      1 => 1512978287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248855a2e3771b3f9b3-61574470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台边栏</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
<style>
body,html{height:100%}
</style>
<script language="javascript" type="text/javascript">
$(function () {
$('.con ul li a').click(function () {
$('.con ul li a').removeClass('hover'); 
$(this).addClass('hover');  
})
})
</script>
</head>

<body style="background-color:#f2f9fd">
<div class="sidebar">
  <div class="logo"></div>
  <div class="con">
  
  <?php if (!$_smarty_tpl->getVariable('fenlei')->value||$_smarty_tpl->getVariable('fenlei')->value=='guestbook'){?>
  
  <ul>
  	<li class="tit"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 留言板管理</li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'ListGuestbook'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 留言板列表</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 留言板添加</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'guestbookCall','a'=>'ListGuestbookCall'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 留言板调用</a></li>
  </ul>
  
  <?php }elseif($_smarty_tpl->getVariable('fenlei')->value=='adminuser'){?>
  
  <ul>
      <li class="tit">管理员管理</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 管理员列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加管理员</a></li>
  </ul>

  <?php }elseif($_smarty_tpl->getVariable('fenlei')->value=='user'){?>
  
  <ul>
      <li class="tit">用户管理</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 用户列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加用户</a></li>
  </ul>
    
  <ul>
      <li class="tit">宝宝管理</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_baby','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>宝宝列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_baby','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加宝宝</a></li>
  </ul>
    
  <ul>
      <li class="tit">宝宝吃奶</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_babynurse','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 喂奶列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_babynurse','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加喂奶</a></li>
  </ul>
    
  <ul>
      <li class="tit">宝宝照片</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_babyphoto','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 照片列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'user_babyphoto','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加照片</a></li>
  </ul>
  <ul>
      <li class="tit">上传照片</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'userlife','a'=>'Lists'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 照片列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'userlife','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加照片</a></li>
  </ul>
    
  <?php }?>
  
  <!--谢谢您的支持，全开源不容易，请勿删除版权信息-->
  <div class="zhichi">问题反馈：<a href="http://wpa.qq.com/msgrd?v=3&uin=2674744602&site=qq&menu=yes" target="_blank">By 家庭随手记</a></div>
  
  </div>
</div>
</body>
</html>