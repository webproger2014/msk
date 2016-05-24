
//Удаление события по id
$('.del_concert').click(function () {
    var id = $(this).attr('name'),
        self = this;
    $.ajax({
        type: "GET",
        async: true,
        url: '?controller=admin&action=delConcert&id=' + id,
        dataType: 'json',
        success: function (data) {
            if (data['success'] == 1) {
               $(self).parent().parent().remove();
            }
        }
     });    
});

//Удаление польозвателя из подписки
$('.del_user').click(function () {
    var id = $(this).attr('name'),
        self = this;
    $.ajax({
        type: "GET",
        async: true,
        url: '?controller=admin&action=delUserRecord&id=' + id,
        dataType: 'json',
        success: function (data) {
            if (data['success'] == 1) {
               $(self).parent().parent().remove();
            }
        }
     });    
});

//Добавление нового события
$('.create-concert button').click(function () {
    var data = checkDataNewConcert([]);
  
    showError(data, 'errorNewConcert')
    if (data["messages"] === '') {
        createNewConcert(data['val']);
    }
});

//Проверка строки на пустоту
function checkDataNewConcert(data) {
    var val = $('.create-concert input').val();
    
    data["messages"] = '';
    if (val === '') {
        data["messages"] = 'Заполните поле';
    } else {
        data['val'] = val;
    }
    
    return data;
}

function createNewConcert(val) {
    $.ajax({
        type: "GET",
        async: true,
        url: '?controller=admin&action=createConcert&val=' + val,
        dataType: 'json',
        success: function (data) {
            if (data['success'] == 1) {
                location.href = '?controller=admin';
            }
        }
     });     
}
//Вывод ошибки
function showError(data, id) {
   $('#' + id).text(data["messages"]);
}
