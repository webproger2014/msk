<?php
/* Smarty version 3.1.29, created on 2016-04-27 17:34:52
  from "C:\wamp\www\tz\views\default\index\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5720dc1c0a2492_37417131',
  'file_dependency' => 
  array (
    'bd2cfd3e03f65ee55b22746ae469d4f154a9d6b6' => 
    array (
      0 => 'C:\\wamp\\www\\tz\\views\\default\\index\\index.tpl',
      1 => 1461771280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5720dc1c0a2492_37417131 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/reset.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/fonts.css" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/index-style.css" />
</head>
<body>
    <nav class="top-nav">
        <div class="container">
            <ul>
                <li><a href="#">Главная</a></li>
            </ul>
            <a class="register-link" href="?controller=Register&action=index">Вход | Регистрация</a>
        </div>
    </nav>
            <section class="bad-wrapper comment">
            <h1 class="section-name">Отправить комментарий</h1>
            <div class="error" id="errorComment"></div>
            <div class="bad">
            <input type="text" placeholder="email"><br />
            <textarea></textarea>
            <button class="add comment">Оправить</button>    
            </div>
        </section> 
         <section>
            <h1 class="section-name">Комментарии</h1>
              <table class="striped contenttable-del">
                  <thead>
                    <tr>
                        <th data-field="stat-number">ID</th>
                        <th data-field="email">E-mail</th>
                        <th data-field="datareg">comment</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dataComment_0_saved_item = isset($_smarty_tpl->tpl_vars['dataComment']) ? $_smarty_tpl->tpl_vars['dataComment'] : false;
$_smarty_tpl->tpl_vars['dataComment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['dataComment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['dataComment']->value) {
$_smarty_tpl->tpl_vars['dataComment']->_loop = true;
$__foreach_dataComment_0_saved_local_item = $_smarty_tpl->tpl_vars['dataComment'];
?>
                    <tr class="table-accounts">
                      <td class="del-account ids"><?php echo $_smarty_tpl->tpl_vars['dataComment']->value['id'];?>
</td>
                      <td class="del-account email"><?php echo $_smarty_tpl->tpl_vars['dataComment']->value['email'];?>
></td>
                      <td class="del-account comment"><?php echo $_smarty_tpl->tpl_vars['dataComment']->value['comment'];?>
</td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['dataComment'] = $__foreach_dataComment_0_saved_local_item;
}
if ($__foreach_dataComment_0_saved_item) {
$_smarty_tpl->tpl_vars['dataComment'] = $__foreach_dataComment_0_saved_item;
}
?>
                  </tbody>
            </table>
        </section>   
 
    <div class="icons-container">
        <div class="icons">
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/icons/instagram.png" alt="" class="icon-ig"></a>
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/icons/vk.png" alt="" class="icon-vk"></a>
            <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
css/icons/twitter.png" alt="" class="icon-tw"></a>
        </div>
    </div>
    <footer>
        <p>Copyright 2015 - All Rights Reserved</p>
    </footer>
    
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/html5shiv/es5-shim.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/html5shiv/html5shiv.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/html5shiv/html5shiv-printshiv.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
libs/respond/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="www/js/library/jquery-2.2.0.min.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="www/js/user/mainFunctions.js"><?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['teplateWebPath']->value;?>
js/common.js"><?php echo '</script'; ?>
>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>   
<?php }
}
