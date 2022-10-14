//Запрос данных вся таблица Реестр оформлений База
export const dataTableReestr = () => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '../../handler_server/reestr_datatable.php',         /* Куда отправить запрос */
            method: 'post',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: { action: 'full_table_base' },     /* Данные передаваемые в массиве */
            success: function (data) { /* функция которая будет выполнена после успешного запроса.  */
                resolve(data);
            },
            error: function (error) {
                reject(error);
            },
        });
    });
}

export const sendAjaxForm = (url, formId, dataType) => {
    
    let promiceSendAjaxForm = new Promise((resolve, reject) => {
        $.ajax({
            url: url, //url страницы (action_ajax_form.php)
            type: "POST", //метод отправки
          //  dataType: dataType, //формат данных
            data: $("#" + formId).serialize(),  // Сеарилизуем объект
            success: function (data) {
                resolve(data);                
            },
            error: function (error) {
                reject(error);
            },
        });
        
    });
    return promiceSendAjaxForm;

}

/* $(document).ready(function () {
    $('#btnClearSearchReestr').on('click', fGo); //событие на клик кнопки
}); */

/* function fGo(event) {
    event.preventDefault(); //отключаем стандартную реакцию браузера
    console.log($('#reestr_ofo').serialize()); //в консоли смотрим внешний вид строки
    $.post(
        "../source/js/1.php", // куда отправляем запрос
        $('#reestr_ofo').serialize(), // сама строка
        ifSuccess // функция которая обрабатывает ответ сервера
    );
} */


/* function fGo(event) {
    event.preventDefault(); //отключаем стандартную реакцию браузера
    console.log($('#reestr_ofo').serialize()); //в консоли смотрим внешний вид строки
    dataTableReestrTest = ('../source/js/1.php', 'json', $('#reestr_ofo').serialize());
    );
} */

/* function ifSuccess(data) {
    console.log(data); // ответ выводим в консоль
} */






/* function getQuerys(data) {
    let queryDict = {};
    data.substring(1).split('&').forEach(element => {
        let param = element.split('=');
        queryDict[param[0]] = param[1];

    });

    return (queryDict);
} */