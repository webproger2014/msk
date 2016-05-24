<?php
/* Smarty version 3.1.29, created on 2016-05-23 11:10:03
  from "C:\wamp\www\msk\views\default\index\register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5742c8eb64d491_11644955',
  'file_dependency' => 
  array (
    'b273341b44809f15e0e59d19fcb647073f298ca0' => 
    array (
      0 => 'C:\\wamp\\www\\msk\\views\\default\\index\\register.tpl',
      1 => 1463989557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5742c8eb64d491_11644955 ($_smarty_tpl) {
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
		<label for="username">ФИО:</label><input type="text"  class="placeholder" placeholder="email" id="email">
		<label for="password">Пароль:</label><input type="text"  class="placeholder" placeholder="ФИО" id="fullName">
                <label for="password">Пароль:</label><input type="text"  class="placeholder" placeholder="+792201712459" id="phone">
                <label for="password">Пароль:</label><input type="text"  class="placeholder" placeholder="Дата рождения" id="dob">
		<input type="button" value="Регистрация" id="regButton">
	</form>
    
	<?php echo '<script'; ?>
 src="www/js/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="www/js/user/mainFunctions.js"><?php echo '</script'; ?>
>
</body>
</html>
    
<?php }
}
