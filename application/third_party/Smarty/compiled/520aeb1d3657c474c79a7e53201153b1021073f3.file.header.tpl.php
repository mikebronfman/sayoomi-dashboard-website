<?php /* Smarty version Smarty-3.1.13, created on 2013-08-14 19:54:18
         compiled from "C:\Server\Web\poweredbyredstone.com\sayoomi\application\views\dashboard\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13116520c0723836cd7-43189480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520aeb1d3657c474c79a7e53201153b1021073f3' => 
    array (
      0 => 'C:\\Server\\Web\\poweredbyredstone.com\\sayoomi\\application\\views\\dashboard\\header.tpl',
      1 => 1376535243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13116520c0723836cd7-43189480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_520c07238f26b1_80379331',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_520c07238f26b1_80379331')) {function content_520c07238f26b1_80379331($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
 
<head> 
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
	<meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" />
        <?php echo link_tag('assets/css/master.css');?>

        <noscript><?php echo link_tag('assets/css/mobile.min.css');?>
</noscript>
        <?php echo link_tag('assets/css/start/jquery-ui-1.10.3.custom.css');?>

        <?php echo link_tag('assets/css/bootstrap.css');?>

        <?php echo link_tag('assets/css/styles.css');?>
        
	<style type="text/css">
	
		.error {background-color: #ff0; color: #c00;}
		.message {background-color: #fff; color: #0c0;}
	
	</style>
        <script>
	// Edit to suit your needs.
        
	var ADAPT_CONFIG = {
		// Where is your CSS?
		path: 'css/',
		
		// false = Only run once, when page first loads.
		// true = Change on window resize and page tilt.
		dynamic: true,
		
		// First range entry is the minimum.
		// Last range entry is the maximum.
		// Separate ranges by "to" keyword.
		range: [
			'0px    to 760px  = mobile.min.css',
			'760px  to 980px  = 720.min.css',
			'980px  to 1280px = 960.min.css',
			'1280px to 1600px = 1200.min.css',
			'1600px to 1940px = 1560.min.css',
			'1940px to 2540px = 1920.min.css',
			'2540px           = 2520.min.css'
		]
	};
        
	</script>
        <?php echo script_tag('assets/js/adapt.min.js');?>

	<?php echo script_tag('assets/js/jquery-1.9.1.js');?>

	<?php echo script_tag('assets/js/jquery-ui-1.10.3.custom.js');?>

        <?php echo script_tag('assets/js/bootstrap.js');?>

</head> 
<body>
    <div id="l-top" class="">
        <div class="l-container">

            <!-- LOGO START -->
            <div class="span-6" id="l-logo">
                <a href="dashboard.html">Oomi Inc.</a>
            </div>
            <!-- LOGO END -->

            <!-- NAV BUTTONS START -->
            <div class="span-18 last" id="l-nav">
                <div id="l-nav-inner">
                    <ol class="nnav">
                        <li class="trial-notice">
                            <a href="#">Device Connection: <strong>Strong</strong></a>
                        </li>
                        <li>
                            <a href="#device-manager" class="btn btn-small" data-toggle="modal">Device Manager</a>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- NAV BUTTONS END -->

        </div>
    </div><?php }} ?>