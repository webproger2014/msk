
//> Подписываемся на события
    $('#regButton').click(function () {
       var data = checkDataFormRegistter([]);
       
       //Отправляем данные аяксом
       if (data["messages"] === '') {
         //  setDataFormRegister(data);
       } else {
           showError(data, 'error');
       }
    });
//<

//Проверка данных формы регистрации
function checkDataFormRegistter(data) {
    var email    = $('#email').val(), 
        fullName = $('#fullName').val(),
        phone    = $('#phone').val(),
        dob      = $('#dob').val(); 

    data["messages"] = '';
    if (email === '') {
        data["messages"] += "email, ";
    }
    
    if (fullName === '') {
        data["messages"] += "Фио";
    }
    
    if (data["messages"] !== '') {
        data["messages"] = 'Заполните поля: ' + data["messages"];
    } else {
        data["email"]    = email;
        data["fullName"] = fullName;
        data["phone"]    = phone;
        data["dob"]      = dob;
    }
   return data; 
} 

//Вывод ошибки
function showError(data, id) {
   $('#' + id).text(data["messages"]);
}
