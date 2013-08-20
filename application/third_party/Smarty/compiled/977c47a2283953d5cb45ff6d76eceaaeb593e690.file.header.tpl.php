<?php /* Smarty version Smarty-3.1.13, created on 2013-08-20 06:02:28
         compiled from "/var/www/application/views/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155470672952130674336fc8-44874792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '977c47a2283953d5cb45ff6d76eceaaeb593e690' => 
    array (
      0 => '/var/www/application/views/templates/header.tpl',
      1 => 1376978352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155470672952130674336fc8-44874792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_521306743b0f56_71786077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521306743b0f56_71786077')) {function content_521306743b0f56_71786077($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
 
<head> 
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title> 
	<meta http-equiv="content-type" content="application/xhtml+xml;charset=utf-8" />
        <?php echo link_tag('assets/css/master.css');?>

        <noscript><?php echo link_tag('assets/css/mobile.min.css');?>
</noscript>
        <?php echo link_tag('assets/css/start/jquery-ui-1.10.3.custom.css');?>

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
        <script src="js/adapt.min.js"></script>
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
</head> 
<body>
<div id="l-top">
	<div class="l-container">
		<div id="l-nav">
			<div id="l-nav-inner">
				<ol class="nnav">
					<li>
						<a href="/signin" rel="nofollow">Sign in</a>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div><?php }} ?>