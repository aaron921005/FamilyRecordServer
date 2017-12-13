<?php /* Smarty version Smarty-3.0.8, created on 2017-12-04 03:27:36
         compiled from "D:\phpStudy\FamilyRecordServer/tpl\admin/guestbook/ListGuestbook.html" */ ?>
<?php /*%%SmartyHeaderCode:173635a24c0a8f30e14-58132782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c18539dfd82fb5a34c1857c33d056aeb65dbf24a' => 
    array (
      0 => 'D:\\phpStudy\\FamilyRecordServer/tpl\\admin/guestbook/ListGuestbook.html',
      1 => 1447341414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173635a24c0a8f30e14-58132782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo @WEBNAME;?>
</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
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
      <li><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ul>
</div><!--admin-bread End-->

<!--content-->
<div class="content">

<!--panel panel-default-->
<div class="panel panel-default">
<div class="panel-heading">
<span class="fl">
<a class="btn btn-success" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'add'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 新增留言本</a>
</span>

<span class="fr" style="width:300px;"></span>

<div class="clear"></div>
</div>
<table  class="table table-hover table-bordered">
  <tr class="active">
    <td width="50" align="center" class="bgc"><strong>ID</strong></td>
    <td class="bgc"><strong>名称</strong></td>
    <td width="150" align="center" class="bgc"><strong>管理员</strong></td>
    <td width="230" align="center" class="bgc"><strong>统计</strong></td>
    <td width="50" align="center" class="bgc"><strong>调用</strong></td>
    <td width="50" align="center" class="bgc"><strong>预览</strong></td>
    <td width="100" align="center" class="bgc"><strong>管理留言</strong></td>
    <td width="150" align="center" class="bgc"><strong>操作</strong></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lists')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
  <tr>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['one']->value['gName'];?>
</td>
    <td align="center"><?php echo adminuserList(array('gid'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
</td>
    <td align="center"><?php echo MegSum(array('gid'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
</td>
    <td align="center"><a class="btn btn-warning btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'guestbookCall','a'=>'ListGuestbookCall','gid'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 调用</a></td>
    <td align="center"><a class="btn btn-default btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'guestbook','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
" target="_blank"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> 预览</a></td>
    <td align="center"><a class="btn btn-success btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminMessage','a'=>'ListMessage','gid'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 管理留言</a></td>
    <td align="center">
    <a class="btn btn-primary btn-xs" role="button" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'update','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-edit"></span> 编辑</a> <a class="btn btn-danger btn-xs" role="button" href="javascript:void(0);" onclick="delconfirm(<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['one']->value['gName'];?>
');"><span class="glyphicon glyphicon-remove"></span> 删除</a>
    </td>
  </tr>
  <?php }} ?>
</table>
</div><!--panel panel-default End-->

<!--分页-->
<?php if ($_smarty_tpl->getVariable('pager')->value){?>

<div class="b15"></div>

<div class="pag">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">
      <div class="pager">
      共有记录<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页（每页<?php echo $_smarty_tpl->getVariable('pager')->value['page_size'];?>
条）：
      <?php $_smarty_tpl->tpl_vars['max_page'] = new Smarty_variable(5, null, null);?>
      <!--每页最大页码数-->
      <!--开始及结束页码--> 
      <?php if ($_smarty_tpl->getVariable('pager')->value['current_page']%$_smarty_tpl->getVariable('max_page')->value==0){?>
      	<?php $_smarty_tpl->tpl_vars['start_page'] = new Smarty_variable(floor($_smarty_tpl->getVariable('pager')->value['current_page']/$_smarty_tpl->getVariable('max_page')->value)*$_smarty_tpl->getVariable('max_page')->value+1-$_smarty_tpl->getVariable('max_page')->value, null, null);?>
      <?php }else{ ?>
      	<?php $_smarty_tpl->tpl_vars['start_page'] = new Smarty_variable(floor($_smarty_tpl->getVariable('pager')->value['current_page']/$_smarty_tpl->getVariable('max_page')->value)*$_smarty_tpl->getVariable('max_page')->value+1, null, null);?>
      <?php }?>     
      <?php if (($_smarty_tpl->getVariable('start_page')->value+$_smarty_tpl->getVariable('max_page')->value)<=$_smarty_tpl->getVariable('pager')->value['total_page']){?>
      	<?php $_smarty_tpl->tpl_vars['end_page'] = new Smarty_variable($_smarty_tpl->getVariable('start_page')->value+$_smarty_tpl->getVariable('max_page')->value-1, null, null);?>
      <?php }else{ ?>
      	<?php $_smarty_tpl->tpl_vars['end_page'] = new Smarty_variable($_smarty_tpl->getVariable('pager')->value['total_page'], null, null);?>
      <?php }?>
      <?php if ($_smarty_tpl->getVariable('start_page')->value<=1&&$_smarty_tpl->getVariable('pager')->value['current_page']<=1){?>
        <a class="Invalid">首页</a>
        <a class="Invalid">上一页</a>
      <?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['total_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a>
      <?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['current_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a>
      <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">«</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']-$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
">-<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a>
      <?php }?>
      <!--开始循环页码，同时如果循环到当前页设置属性为active-->
      <?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>        
      <?php if ($_smarty_tpl->tpl_vars['thepage']->value<=$_smarty_tpl->getVariable('end_page')->value&&$_smarty_tpl->tpl_vars['thepage']->value>=$_smarty_tpl->getVariable('start_page')->value){?>  
          <?php if ($_smarty_tpl->tpl_vars['thepage']->value==$_smarty_tpl->getVariable('pager')->value['current_page']){?>
              <a class="present"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
              <?php }else{ ?>
              <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
          <?php }?>
       <?php }?>
      <?php }} ?>
      <?php if ($_smarty_tpl->getVariable('end_page')->value==$_smarty_tpl->getVariable('pager')->value['total_page']){?> 
      <?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->getVariable('pager')->value['last_page']){?>
        <a class="Invalid">下一页</a>
        <a class="Invalid">尾页</a>
      <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
      <?php }?>
      <?php }else{ ?> 
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']+$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
">+<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
      <?php }?> 
      </div>
	</td>
  </tr>
</table>
</div>
<div class="b15"></div>
<?php }?>
<!--分页 end-->

</div><!--content End-->

<script>
function delconfirm(id,gName){
	if( window.confirm("确定删除“" + gName + "”？") ){
		window.location = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'del'),$_smarty_tpl);?>
&id=" + id;
	}
}
</script>
</body>
</html>