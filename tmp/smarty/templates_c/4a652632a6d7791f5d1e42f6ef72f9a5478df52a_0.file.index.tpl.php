<?php
/* Smarty version 3.1.29, created on 2016-04-27 16:55:25
  from "C:\wamp\www\tz\views\default\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5720d2dda20606_74817415',
  'file_dependency' => 
  array (
    '4a652632a6d7791f5d1e42f6ef72f9a5478df52a' => 
    array (
      0 => 'C:\\wamp\\www\\tz\\views\\default\\admin\\index.tpl',
      1 => 1461768046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5720d2dda20606_74817415 ($_smarty_tpl) {
?>
    <div class="main">
        <nav class="top-nav"></nav>
        <section class="bad-wrapper words">
            <h1 class="section-name">Настроить список стоп-слов</h1>
            <div class="error" id="errorBadWords"></div>
            <div class="bad">
            <textarea></textarea>
            <button class="add bad">Добавить</button> 
            <button class="add del">Удалить</button> 
            </div>
        </section>
    
        <section class="bad-wrapper comment">
            <h1 class="section-name">Проверить комментарий</h1>
            <div class="error" id="errorComment"></div>
            <div class="bad">
            <input type="text" placeholder="email"><br />
            <textarea></textarea>
            <button class="add comment">Тестировать</button>    
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
                      <td class="del-account comment"><a class="del-comment" id="<?php echo $_smarty_tpl->tpl_vars['dataComment']->value['id'];?>
">Удалить</a></td>
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
        </section><?php }
}
