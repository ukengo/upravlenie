//Запрос данных вся таблица Реест оформлений База
export const dataTableReestr = () => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '../../handler_server/reestr_datatable.php',         /* Куда отправить запрос */
            method: 'post',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            // data: { text: 'Текст' },     /* Данные передаваемые в массиве */
            success: function (data) { /* функция которая будет выполнена после успешного запроса.  */
                resolve(data)
            },
            error: function (error) {
                reject(error)
            },
        });
    });
}