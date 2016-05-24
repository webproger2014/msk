<?php
/* Smarty version 3.1.29, created on 2016-05-10 14:55:26
  from "C:\wamp\www\slider\views\default\index\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5731da3e0c1895_68200748',
  'file_dependency' => 
  array (
    '054ef823f2df19b269221c8225a99ffda9343957' => 
    array (
      0 => 'C:\\wamp\\www\\slider\\views\\default\\index\\index.tpl',
      1 => 1462883242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5731da3e0c1895_68200748 ($_smarty_tpl) {
?>
<div id="owl-example" class="owl-carousel">
</div>

<div class="container slider">
    <div class="row">
        <div class="wrapper">
        <div class="form-group settings-slider">
            <h3>Загрузка изображени</h3>
            <div class="wrapper-form-slider">                
                <label>ID Альбома</label>
                <label id="errorGroup"></label> 
                <input class="form-control" type="text" placeholder="Пример: 36831577_215272388" id="id_album">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <p>ID Альбома пишется строго как указано в примере.
                 <a>Подробнее..</a>
                    <p>Заметье что ID вводится без символа '-'.<br>
                        Ввести ID альбома можно только один.
                    </p>
                </p>
            </div>           
            <div class="wrapper-form-slider">
                <label>Количество фотографий</label>
                <input class="form-control" type="text" placeholder="Макс кол-во 50" id="quantity_photos">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <p>Если количество не указано, или указано больше то по умолчанию придёт 50</p>
            </div>
            <button type="button" class="btn btn-info" id="load-photos">Определить фото</button>
        </div>
        <div class="form-group settings-slider">
            <h3>Интерфейс</h3>
            <div class="wrapper-form-slider">
                <label>Макс размер изображения/label>
                <input class="form-control" type="text" placeholder="Пример: 500" id="tool_height">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <p>Высота указывается в цифрах без постфиксов 'px,%,sm,em'
                 <a>Подробнее..</a>
                </p>
            </div>
            <div class="wrapper-form-slider">
                <label>Количество фотографий</label>
                <input class="form-control" type="text" placeholder="Макс кол-во 50" id="quantity_photos">
                <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                <p>Если количество не указано, или указано больше то по умолчанию придёт 50</p>
            </div>
            <button type="button" class="btn" id="create-slider">Создать слайдер</button>
        </div>
            </div>
    </div>
</div>
<?php }
}
