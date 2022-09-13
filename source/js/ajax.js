//Запрос данных вся таблица Реест оформлений База
export const dataTableReestr = () => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '../../handler_server/reestr_datatable.php',         /* Куда отправить запрос */
            method: 'post',             /* Метод запроса (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            data: { text: 'Текст' },     /* Данные передаваемые в массиве */
            success: function (data) { /* функция которая будет выполнена после успешного запроса.  */
                resolve(data)
            },
            error: function (error) {
                reject(error)
            },
        });
    });
}


export const dataTableReestr22 = () => {
    console.log($('#reestr_ofo').serialize());
    return new Promise((resolve, reject) => {

        $.ajax({
            url: '../../handler_server/1.php',         /* Куда отправить запрос */
            method: 'post',             /* Метод запроса (post или get) */
            dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
            data: $("#reestr_ofo").serialize(),     /* Данные передаваемые в массиве */
            success: function (data) { /* функция которая будет выполнена после успешного запроса.  */
                console.log(`1 - ${data}`);
                console.log(resolve(`2 - ${data}`));

                resolve(console.log(`3 - ${data}`));

                resolve(`4 - ${data}`)
            },
            error: function (error) {
                reject(error)
            },
        });
    });
}