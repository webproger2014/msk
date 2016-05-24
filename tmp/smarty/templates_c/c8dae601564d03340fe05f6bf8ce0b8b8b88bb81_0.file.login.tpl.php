<?php
/* Smarty version 3.1.29, created on 2016-04-25 11:43:48
  from "C:\wamp\www\tz\views\default\admin\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571de6d4ac1f70_06482449',
  'file_dependency' => 
  array (
    'c8dae601564d03340fe05f6bf8ce0b8b8b88bb81' => 
    array (
      0 => 'C:\\wamp\\www\\tz\\views\\default\\admin\\login.tpl',
      1 => 1461577427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571de6d4ac1f70_06482449 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>22 лучших формы входа и регистрации | Vladmaxi.net</title>
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/style.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://www.modernizr.com/downloads/modernizr-latest.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/placeholder.js"><?php echo '</script'; ?>
>
</head>
<body>
	<form id="slick-login">
            <div id="error"></div>
		<label for="username">Логин:</label><input type="text" name="username" class="placeholder" placeholder="admin@example.com">
		<label for="password">Пароль:</label><input type="password" name="password" class="placeholder" placeholder="Пароль">
		<input type="button" value="ВОЙТИ">
	</form><?php }
}
