<?php
/* Smarty version 3.1.29, created on 2016-05-09 21:34:12
  from "C:\wamp\www\slider\views\default\index\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5730e634182b98_19726191',
  'file_dependency' => 
  array (
    '47b7ca832e0044c65a96b28d44622c44d9c4242a' => 
    array (
      0 => 'C:\\wamp\\www\\slider\\views\\default\\index\\register.tpl',
      1 => 1462822275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5730e634182b98_19726191 ($_smarty_tpl) {
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
		<input type="button" value="Регистрация" id="regButton">
	</form>
    
	<?php echo '<script'; ?>
 src="www/js/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="www/js/admin/mainFunctions.js"><?php echo '</script'; ?>
>
</body>
</html>
    
<?php }
}
