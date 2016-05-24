<?php
/* Smarty version 3.1.29, created on 2016-05-24 15:17:23
  from "C:\wamp\www\msk\views\default\index\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57445463c1f140_24204640',
  'file_dependency' => 
  array (
    '8c71e42dd3d048c481c9a4e84867f648a59559b9' => 
    array (
      0 => 'C:\\wamp\\www\\msk\\views\\default\\index\\index.tpl',
      1 => 1464095840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57445463c1f140_24204640 ($_smarty_tpl) {
?>
         <section>
            <h1 class="section-name">События</h1>
            <div class="create-concert">
             <div id="errorNewConcert"></div>
             <input type="text" placeholder="Событие">
             <button>Добавить</button>       
            </div>
              <table class="striped contenttable-del">
                  <thead>
                    <tr>
                        <th data-field="stat-number">ID</th>
                        <th data-field="email">Событие</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
$_from = $_smarty_tpl->tpl_vars['concert']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_0_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_0_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
                    <tr>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</td>
                      <td><a href="#" name="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="del_concert">Удалить</a></td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_local_item;
}
if ($__foreach_info_0_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_0_saved_item;
}
?>
                  </tbody>
            </table>
        </section> 
         <section>
            <h1 class="section-name">Пользователи</h1>
              <table class="striped contenttable-del">
                  <thead>
                    <tr>
                        <th data-field="stat-number">ID</th>
                        <th data-field="email">E-mail</th>
                        <th data-field="datareg">ФИО</th>
                        <th data-field="datareg">телефон</th>
                        <th data-field="datareg">дата рождения</th>
                        <th data-field="datareg">событие</th>
                        <th data-field="datareg">пол</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
$_from = $_smarty_tpl->tpl_vars['user']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_info_1_saved_item = isset($_smarty_tpl->tpl_vars['info']) ? $_smarty_tpl->tpl_vars['info'] : false;
$_smarty_tpl->tpl_vars['info'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['info']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
$__foreach_info_1_saved_local_item = $_smarty_tpl->tpl_vars['info'];
?>
                    <tr class="table-accounts">
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['email'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['fullname'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['dob'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['concert_name'];?>
</td>
                      <td><?php echo $_smarty_tpl->tpl_vars['info']->value['gender'];?>
</td>
                      <td><a href="#" class="del_user" name="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">Удалить</a></td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_local_item;
}
if ($__foreach_info_1_saved_item) {
$_smarty_tpl->tpl_vars['info'] = $__foreach_info_1_saved_item;
}
?>
                  </tbody>
            </table>
        </section>  
<?php }
}
