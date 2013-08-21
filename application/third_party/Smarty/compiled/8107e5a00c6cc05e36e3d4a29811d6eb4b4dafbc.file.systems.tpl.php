<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 17:15:40
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\modules\systems.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29003520c0723960798-62953327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8107e5a00c6cc05e36e3d4a29811d6eb4b4dafbc' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\modules\\systems.tpl',
      1 => 1376978704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29003520c0723960798-62953327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c072397a1f1_42023145',
  'variables' => 
  array (
    'systems' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c072397a1f1_42023145')) {function content_520c072397a1f1_42023145($_smarty_tpl) {?><div class='filter filter-group'>
    <ol class='filter-items'>
        <li class='filter-item'>
            <a href="#" data-group="null"><div class='filter-item-label'>All Systems</div>
            </a>
        </li>
        <?php  $_smarty_tpl->tpl_vars['system'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['system']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['systems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['system']->key => $_smarty_tpl->tpl_vars['system']->value){
$_smarty_tpl->tpl_vars['system']->_loop = true;
?>
        <li class='filter-item'>
            <a href="#" data-group="#"><div class='filter-item-label'><?php echo $_smarty_tpl->tpl_vars['system']->value['description'];?>
</div>
            </a>
        </li>
        <?php } ?>
    </ol>
</div><?php }} ?>