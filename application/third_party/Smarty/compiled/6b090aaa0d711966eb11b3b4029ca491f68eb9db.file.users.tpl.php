<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 15:39:31
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\modules\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18216520c072398c001-16084008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b090aaa0d711966eb11b3b4029ca491f68eb9db' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\modules\\users.tpl',
      1 => 1376253376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18216520c072398c001-16084008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c07239a27a8_92537925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c07239a27a8_92537925')) {function content_520c07239a27a8_92537925($_smarty_tpl) {?><div class='filter filter-commented'>
    <ol class='filter-items'>
        <li class='filter-item is-active'>
            <a href="#" data-commented="false"><div class='filter-item-label'>All Users</div>
            </a>
        </li>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        <li class='filter-item'>
            <a href="#" data-commented="true"><div class='filter-item-label'><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
            </a>
        </li>
        <?php } ?>
    </ol>
</div><?php }} ?>