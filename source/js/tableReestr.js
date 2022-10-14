import { trimmingSpaces, clickTables, spinner, autoSearchOnOpen, getDataFromTd, labelred, getDropDownArray, afterDropDownReturned } from './snippets/snippets.js'
import { dataTableReestr, sendAjaxForm } from './ajax.js'

function tableReestrExport() {



    /* function startTableReestrClear() {
        $("#firmareestr-datalist").empty();
        $("#rabotareestr-datalist").empty();
        $("#coderabotareestr-datalist").empty();
        $("#proektreestr-datalist").empty();
        $("#sotrreestr-datalist").empty();
        $("#ispolreestr-datalist").empty();
        $("#primreestr-datalist").empty();
        $("#primmoyoreestr-datalist").empty();
    } */

    // cрабатывание по кнопке Enter
    document.querySelector('#reestr_ofo').addEventListener('keydown', function (e) {
        if (e.key == 'Enter') {
            SearchRecordsReestr();
        }
    });

    /*     function clickPressReestrUpdate(event) {
            if (event.keyCode == 13) {
                UpdateRecordReestr(parseInt(document.activeElement.id.replace(/[^\d]/g, '')))
            }
        } */

    //отбор значений по критерию и вставка в результаты поиска
    async function SearchRecordsReestr() {
        spinner('rowdatareestr');
        const searchRecord = await sendAjaxForm('../../handler_server/reestr_datatable.php', 'reestr_ofo', 'json');
        if (searchRecord.replace(/[^a-zа-яё]/gi, '') === 'false') {
            document.querySelector('#rowdatareestr').innerHTML = '';
            alert('Не введены данные');
        } else {
            document.querySelector('#rowdatareestr').innerHTML = searchRecord;
            const btnUpdate = document.querySelectorAll('.btn-update_button_reestr');
            const btnFinance = document.querySelectorAll('.btn_finance_button_reestr');
            const btnClose = document.querySelectorAll('.btn_inance_button_reestr_close');
            btnUpdate.forEach((el) => el.addEventListener('click', updateRecordReestr));
            //btnFinance.forEach((el) => el.addEventListener('click', ));
            //btnClose.forEach((el) => el.addEventListener('click', ));
        }
        $('#btnSearchReestr').prop("disabled", false);
    }
    //////////// конец отбора /////////////////////








    function ClearRecordReestr() {
        document.querySelector('#reestr_ofo').reset();
        labelred();
    }


    async function updateRecordReestr() {
        this.disabled = true;
        const dataRow = (this.getAttribute("data-row"));
        const updateRecord = await sendAjaxForm('../../handler_server/reestr_datatable.php', 'search_records_reestr' + dataRow, 'json');
        console.log(updateRecord);
        this.disabled = false;



        /*   var dateendReestr = document.getElementById("up_dateendreestr" + row_number_reestr).value;
           var datestartReestr = document.getElementById("up_datestartreestr" + row_number_reestr).value;
           var firmaReestr = document.getElementById("up_firmareestr" + row_number_reestr).value;
           var rabotaReestr = document.getElementById("up_rabotareestr" + row_number_reestr).value;
           var coderabotaReestr = document.getElementById("up_coderabotareestr" + row_number_reestr).value;
           var proektReestr = document.getElementById("up_proektreestr" + row_number_reestr).value;
           var sotrReestr = document.getElementById("up_sotrreestr" + row_number_reestr).value;
           var ispolReestr = document.getElementById("up_ispolreestr" + row_number_reestr).value;
           var sumispolReestr = document.getElementById("up_sumispolreestr" + row_number_reestr).value;
           var sumoplataReestr = document.getElementById("up_sumoplatareestr" + row_number_reestr).value;
           var primReestr = document.getElementById("up_primreestr" + row_number_reestr).value;
           var primMoyoReestr = document.getElementById("up_primmoyoreestr" + row_number_reestr).value;
           var issuepartReestr = document.getElementById("up_issuepartreestr" + row_number_reestr).checked;
           var withoutaccountReestr = document.getElementById("up_withoutaccountreestr" + row_number_reestr).checked;
           var stoppedReestr = document.getElementById("up_stoppedreestr" + row_number_reestr).checked;
    
           google.script.run.withSuccessHandler(function (return_string) {
               document.getElementById("update_button_reestr" + row_number_reestr).disabled = false;
           }).UpdateRecordReestrGs(dateendReestr, datestartReestr, firmaReestr, rabotaReestr, coderabotaReestr, proektReestr, sotrReestr, ispolReestr, sumispolReestr, sumoplataReestr, primReestr, primMoyoReestr, issuepartReestr, withoutaccountReestr, stoppedReestr); */
    }

    /*     function FinanceRecordReestr(row_number_reestr) {
            document.getElementById("finance_button_reestr" + row_number_reestr).disabled = true;
            localStorage.removeItem('test');
            let proektFin = document.getElementById("up_proektreestr" + row_number_reestr).value;
            SearchRecordsFinProekt1(proektFin);
            let checkTest = setInterval(function () {
                if (localStorage.getItem('test')) {
                    document.getElementById("finance_button_reestr" + row_number_reestr).disabled = false;
                    document.getElementById("rowdatafin1" + row_number_reestr).innerHTML = localStorage.getItem('test');
                    const elements = document.querySelectorAll(`#rowdatafin1${row_number_reestr} .delete-fin`);
                    elements.forEach(elem => elem.remove());
                    clearInterval(checkTest);
                }
            }, 1);
        } */

    /*     function FinanceRecordReestrClose(row_number_reestr) {
            document.getElementById("rowdatafin1" + row_number_reestr).innerHTML = '';
        }
     */


    /*     function check1(item) {
            if (item === true) {
                return 'checked'
            } else {
                return ''
            }
        } */

    btnTable();
    // нажатие кнопки Table
    function btnTable() {
        if ($('.dataTables_filter input').length) { // проверка на наличие селектора
            const valueSearch = $('.dataTables_filter input').val(); // данные в поле поиска
            sessionStorage.setItem('dataTables_filter_input', valueSearch); //записываем данные поля поиска в кеш
        };
        $('#div-data-table').remove();
        $('#btnTable').prop("disabled", true);
        $('<div id="div-data-table-spinner"></div><div id="div-data-table"><div style="overflow-x:auto;"><table id="data-table" class="table table-striped table-sm table-hover table-bordered table-datatable table-line-selection "></table></div></div>').appendTo('#div-data-table-row')
        $("#div-data-table-spinner").attr("tabindex", -1).focus();
        spinner('div-data-table-spinner');
        showData();
    }
   
    function showData() {
        dataTableReestr()
            .then((dataArray) => {
                const dataArrayMap = dataArray.filter(x => x[5] != '').map(x => [x[0], x[1], x[2], x[3], x[5], x[6], x[15], x[16], x[17], x[21], x[20], x[25]]);
                dataArrayMap.shift();
                sessionStorage.setItem('DataLength', dataArray.length);//записываем в кеш длину
                $('#data-table').DataTable({
                    data: dataArrayMap,
                    lengthMenu: [[25, 50, 100, 500, -1, 0], [25, 50, 100, 500, "Все", "Пусто"]],
                    responsive: true,
                    autoWidth: false,
                    order: [[11, 'desc']], // колонка 10 это номера строк, по ним сортировка
                    columnDefs: [
                        {
                            targets: [11],
                            visible: false,
                        }, // скрываем колонку номеров сттрок
                    ],
                    columns: [
                        { "title": "Дата конец" },
                        { "title": "Дата начало" },
                        { "title": "Фирма" },
                        { "title": "Работа" },
                        { "title": "Проект" },
                        { "title": "Сотрудник" },
                        { "title": "Исполнитель" },
                        { "title": "Сумма исполу" },
                        { "title": "Оплата исполу" },
                        { "title": "Примечание" },
                        { "title": "Примечание мое" },
                        { "title": "Row" },
                    ]
                });
                trimmingSpaces();
                clickTableReestr();
                document.querySelector('.dataTables_wrapper .dataTables_filter input').classList.add("form-control");
                document.querySelector('.dataTables_wrapper .dataTables_filter input').style =
                    `border-radius: 20px;
                                width: 400px;
                                padding: 5px 14px`;
                document.querySelector('.dataTables_wrapper .dataTables_filter input').placeholder = 'Поиск по таблице';
                // считывваем из кеша данные для поиска и вставляем в поле поиска
                const valueSearch = sessionStorage.getItem('dataTables_filter_input');
                $('.dataTables_filter input').val(valueSearch);
                autoSearchOnOpen('.dataTables_filter input');
                // end 
                $("#div-data-table-spinner").remove()
                $('#btnTable').prop("disabled", false);
            })
            .catch((error) => {
                console.log(error)
            })
    }


    /* function showDataReestr(dataArray){
      var result = "<table class='table table-bordered table-hover ' style='font-size:0.8em'>"    
      // строим таблицу
      for(var i=dataArray.length-1; i>0; i--) {
        result += "<tr>";
        for(var j=0; j<dataArray[i].length; j++){
          result += "<td>"+dataArray[i][j]+"</td>";
        }
        result += "<td><button type=\"button\" id=\"buttonModalReestr"+ i +"\"  something= "+ i +" class=\"btn btn-sm btn-light btnbtnfin\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModalReestr\"  />Edit</button></td>";
        result += "</tr>";
      }
      result += "</table>";
      var div = document.getElementById('div-data-table');
      div.innerHTML = result;
      $('#btnTable2').prop( "disabled", false ); 
      $("#div-data-table-spinner").remove()
      //полосы в таблице
      $("table tr").click(function() {
      // $("table tr").css("background", "#FFFFFF"); //reset to original color
        if(!this.style.background){
          $(this).css("background", "#FFE4E1"); //apply the new color  
        }else{
          $(this).css("background", "#FFFFFF");
        }    
      });
    } */

    //возвращает текст из определенной колонки и номер колонки, записыает в кеш, потом вставляет из кеша
    function clickTableReestr() {
        clickTables('#data-table', clickTapHandling);
    }

    //обработка клика или тапа по таблице 
    function clickTapHandling(event) {
        if (event.target.tagName !== 'TD') return false;
        const dataTarget = event.target.textContent;
        const data = [...event.target.parentNode.children];
        const text = getDataFromTd(data);
        const col = event.srcElement._DT_CellIndex.column;
        ClearRecordReestr();
        switch (col) {
            case 0:
                $('#dateendreestr').val(formatDateYYYYtireMMtireDD(strongToDate(text[0])));
                break;
            case 1:
                $('#datestartreestr').val(formatDateYYYYtireMMtireDD(strongToDate(text[1])));
                break;
            case 2:
                $('#firmareestr').val(text[2]);
                break;
            case 3:
                $('#rabotareestr').val(text[3]);
                break;
            case 4:
                $('#proektreestr').val(text[4]);
                break;
            case 5:
                $('#sotrreestr').val(text[5]);
                break;
            case 6:
                $('#ispolreestr').val(text[6]);
                break;
            case 7:
                $('#sumispolreestr').val(strongToNumber(text[7]));
                break;
            case 8:
                $('#sumoplatareestr').val(strongToNumber(text[8]));
                break;
            case 9:
                $('#primreestr').val(text[9]);
                break;
            case 10:
                $('#primmoyoreestr').val(text[10]);
                break;
        }
        labelred();
        sessionStorage.setItem('proekt', text[4]);
        // вставка значения из кеша на кнопку и в поле поиска таблицы
        document.getElementById('btnSearchReestrInfo').innerHTML = event.target.innerHTML;
        document.getElementById('btnSearchFinInfo').innerHTML = 'fin ' + text[4];
        document.getElementById('btnSearchFinPlus').innerHTML = 'fin+';
        document.getElementById('btnSearchFinMinus').innerHTML = 'fin-';
        document.getElementById('btnSearchJobInfo').innerHTML = 'job ' + text[4];
        document.querySelector('#data-table_filter input').value = event.target.innerHTML;
    };
    // разворачиваем коллапс при старте с настольного
    /* function collap() {
    $('#accordingButonReestr')[0].click();
    }
    searchMobile(collap); */

    //обработка кнопок ///////////////////////////////////////////

    // кнопка Clear Records
    document.querySelector('#btn-clear-records').addEventListener('click', ClearRecordReestr);

    // открытие полной таблицы проекта по клику на кнопку
    $('#btnTable').click(btnTable);

    //кнопка маленькая левая (reestr)
    /*     $('#btnSearchReestrInfo').click(function () {
            $("#rowdatareestr").attr("tabindex", -1).focus();
            SearchRecordsReestr();
        });
     */
    //кнопка маленькая средняя (finance plus без перехода)
    /*     $('#btnSearchFinPlus').click(function () {
            localStorage.removeItem('test');
            document.getElementById("btnSearchFinPlus").disabled = true;
            const proektFin = sessionStorage.getItem('proekt');
            $('#proektfin').val(numEndStrong(proektFin));
            $('#searchFinance').val(numEndStrong(proektFin));
            SearchRecordsFinProekt1(proektFin);
            let checkTest = setInterval(function () {
                if (localStorage.getItem('test')) {
                    document.getElementById("btnSearchFinPlus").disabled = false;
                    document.getElementById("SearchFinInReestr").innerHTML = localStorage.getItem('test');
                    const elements = document.querySelectorAll(`#SearchFinInReestr .delete-fin`);
                    elements.forEach(elem => elem.remove());
                    clearInterval(checkTest);
                }
            }, 1);
        }) */

    //кнопка маленькая средняя (finance minus без перехода)
    /*     $('#btnSearchFinMinus').click(function () {
            document.getElementById("SearchFinInReestr").innerHTML = '';
            document.getElementById("rowdatafin").innerHTML = '';
        })
     */

    // перехват кнопки (reestr с переходом)
    /*     $('.btn-reestr-transition').click(function () {
            
            const textContent = numEndStrong(this.textContent);
            
            ClearRecordReestr();
            $('#proektreestr').val(textContent);
            $('#data-table_filter input').val(textContent);
            $('#btnSearchReestrInfo').html(textContent);
            $('#nav-reestr-tab')[0].click();
            $('#btnClearSearchReestr').click();
            labelred();
            autoSearchOnOpen('.dataTables_filter input');
        }) */

    /* //кнопка маленькая средняя (finance с переходом)
    $('#btnSearchFinInfo').click(function() {
      $('#proektfin').val(numEndStrong(this.textContent));  
      $('#searchFinance').val(numEndStrong(this.textContent)); 
      $('#nav-fin-tab')[0].click();
      autoSearchOnOpen('#searchFinance');
    }) */

    $('#btnSearchReestr').click(function () {
        $('#btnSearchReestr').prop("disabled", true);
        SearchRecordsReestr();
    });

    $('#btnCloseSearchReestr').click(function () {
        $('#btnCloseSearchReestr').prop("disabled", true);
        $('#rowdatareestr').html('');
        $('#btnCloseSearchReestr').prop("disabled", false);
    });

    /*      $('#btnTable2').click(function () {
            $('#div-data-table').remove();
            $('#btnTable2').prop("disabled", true);
            $('<div id="div-data-table-spinner"></div><div id="div-data-table"></div>').appendTo('#div-data-table-row')
            $("#div-data-table-spinner").attr("tabindex", -1).focus();
            spinner('div-data-table-spinner');
            google.script.run.withSuccessHandler(showDataReestr).getData2();
        });  */

    $('#clearBtnTable').click(function () {
        $('#clearBtnTable').prop("disabled", true);
        $('#div-data-table').remove();
        document.getElementById('btnSearchReestrInfo').innerHTML = '';
        document.getElementById('btnSearchFinInfo').innerHTML = '';
        document.getElementById('btnSearchJobInfo').innerHTML = '';
        $('#clearBtnTable').prop("disabled", false);
    })


    // кнопка аккордеона
    $('#accordingButonReestr').click(accordingButon);
    function accordingButon() {
        if ($('#accordingButonReestr').attr('class') == 'accordion-button collapsed') {
            $('#accordingButonReestr').text('Развернуть форму');
        } else {
            $('#accordingButonReestr').text('Cвернуть форму');
        };
    };
    accordingButon();

    //кнопка Update результатов поиска

}
export default tableReestrExport;