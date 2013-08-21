<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 17:15:40
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\modules\activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18629520c07239126c5-98539271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c7ba6803cc8377d85bcd7af489a61b3ce8ece7b' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\modules\\activity.tpl',
      1 => 1376978704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18629520c07239126c5-98539271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c07239396d4_02150043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c07239396d4_02150043')) {function content_520c07239396d4_02150043($_smarty_tpl) {?><div id='l-inset'>
    <div class='l-container'>

        <!-- ACTIVITY START -->
        <div class='charts'>
            <div class='charts-header'>
                <div class='charts-title'>
                    <h1>Your Device Activity</h1>
                </div>
                <div class='charts-toggle btn-group'>
                    <button class="btn btn-small btn-subtle is-active" data-period="daily" name="button" type="submit">Today</button>
                    <button class="btn btn-small btn-subtle" data-period="weekly" name="button" type="submit">This Week</button>
                    <button class="btn btn-small btn-subtle" data-period="monthly" name="button" type="submit">This Month</button>
                </div>
            </div>

            <!-- ACTIVITY CONTENT START -->
            <div class='charts-chart'>
                <div class='chart'></div>
            </div>
            <!-- ACTIVITY CONTENT START -->

        </div>
        <!-- ACTIVITY END -->

    </div>
</div><?php }} ?>