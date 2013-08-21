<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 17:15:40
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\modules\devices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11329520c07239b9ed1-38244776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd312a0d5bd3e44dd1d18522e83bb9b8e898a607c' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\modules\\devices.tpl',
      1 => 1376978704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11329520c07239b9ed1-38244776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c07239bd7b8_83959181',
  'variables' => 
  array (
    'devices' => 0,
    'device' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c07239bd7b8_83959181')) {function content_520c07239bd7b8_83959181($_smarty_tpl) {?><div class='filter filter-property'>
    <ol class='filter-items'>
        <li class='filter-item is-active'>
            <a href="#" data-key="device" data-value="null"><div class='filter-item-label'>All Products</div>
            </a>
        </li>
        <?php  $_smarty_tpl->tpl_vars['device'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['device']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['devices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['device']->key => $_smarty_tpl->tpl_vars['device']->value){
$_smarty_tpl->tpl_vars['device']->_loop = true;
?>
        <li class='filter-item'>
            <a href="#" data-key="device" data-value="Glass"><div class='filter-item-label'><?php echo $_smarty_tpl->tpl_vars['device']->value['name'];?>
</div>
            </a>
        </li>
        <?php } ?>
    </ol>
</div><?php }} ?>