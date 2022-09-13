import { trimmingSpaces, clickTables, spinner, autoSearchOnOpen, getDataFromTd, labelred, getDropDownArray, afterDropDownReturned } from './snippets/snippets.js'
import { dataTableReestr, dataTableReestr22 } from './ajax.js'

function tableReestrExport() {
document.querySelector("#btnClearSearchReestr").addEventListener('click', dataTableReestr22);
 //   dataTableReestr22()
    //выпадающие списки начало
    /////////////////////////////////////////////
    dataTableReestr()
        .then((dataArray) => {
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[2]])),
                'firmareestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[3]])),
                'rabotareestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[4]])),
                'coderabotareestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[5]])),
                'proektreestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[6]])),
                'sotrreestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[15]])),
                'ispolreestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[21]])),
                'primreestr-datalist'
                );
            afterDropDownReturned(getDropDownArray(dataArray
                .slice(1)
                .filter(x => x[5] != '')
                .map(x => [x[20]])),
                'primmoyoreestr-datalist'
                );
        });
    ////////////////////////////////////////////////////////////////
        //выпадающие списки конец    



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
    /*     function clickPressReestrSearch(event) {
            if (event.keyCode == 13) {
                SearchRecordsReestr()
            }
        } */
    /*     function clickPressReestrUpdate(event) {
            if (event.keyCode == 13) {
                UpdateRecordReestr(parseInt(document.activeElement.id.replace(/[^\d]/g, '')))
            }
        } */

    /*     function SearchRecordsReestr() {
            const dateendReestr = document.getElementById("dateendreestr").value;
            const datestartReestr = document.getElementById("datestartreestr").value;
            const firmaReestr = document.getElementById("firmareestr").value;
            const rabotaReestr = document.getElementById("rabotareestr").value;
            const coderabotaReestr = document.getElementById("coderabotareestr").value;
            const proektReestr = document.getElementById("proektreestr").value;
            const sotrReestr = document.getElementById("sotrreestr").value;
            const ispolReestr = document.getElementById("ispolreestr").value;
            const sumispolReestr = document.getElementById("sumispolreestr").value;
            const sumoplataReestr = document.getElementById("sumoplatareestr").value;
            const primReestr = document.getElementById("primreestr").value;
            const primMoyoReestr = document.getElementById("primmoyoreestr").value;
            const issuepartReestr = document.getElementById("issuepartreestr").checked;
            const withoutaccountReestr = document.getElementById("withoutaccountreestr").checked;
            const stoppedReestr = document.getElementById("stoppedreestr").checked;
            const checkDateReestr = document.getElementById("check-date-reestr").value;
    
    
            // остановка скриипта, если не выбраны критерии поиска в инпутах
            const dataArr =
                [
                    dateendReestr, datestartReestr, firmaReestr, rabotaReestr, coderabotaReestr, proektReestr, sotrReestr, ispolReestr, sumispolReestr, sumoplataReestr, primReestr, primMoyoReestr, issuepartReestr, withoutaccountReestr, stoppedReestr
                ]
    
            if (searchStop(dataArr)) {
                alert('Не введены данные')
                $('#btnSearchReestr').prop("disabled", false);
                return;
            }
    
            var row_number_reestr = 0;
            let count = 0; // счетчик для подсчета количества остановленных при выборке
            spinner('rowdatareestr')
            google.script.run.withSuccessHandler(function (ar) {
                var displayTableReestr = '<form>';
                displayTableReestr += '<table onkeypress=\"clickPressReestrUpdate(event)\" class=\"table table-bordered border-danger mb-2 mt-2\" id=\"mainTableReestr\" >';
                displayTableReestr += "<tr>";
                displayTableReestr += "<th></th>";
                displayTableReestr += "<th></th>";
                displayTableReestr += "<th></th>";
                displayTableReestr += "<th></th>";
                displayTableReestr += "</tr>";
    
                ar.forEach(function (item, index) {
    
                    displayTableReestr += "<tr id=\"ROWNUMBER:" + row_number_reestr + "\" >";
    
                    displayTableReestr += "<td colspan=\"9\">"
                    displayTableReestr += "<div class=\"row g-1 mt-1\">"
    
                    displayTableReestr += "<div class=\"col-auto\">"
                    displayTableReestr += "<label for=\"up_dateendreestr\">Дата конец</label>  ";
                    displayTableReestr += "<input type=\"date\" id=\"up_dateendreestr" + row_number_reestr + "\" value=\"" + item[0] + "\" class=\"form-control form-control-sm\" /></div> ";
    
                    displayTableReestr += "<div class=\"col-auto\">"
                    displayTableReestr += "<label for=\"up_datestartreestr\">Дата начало</label> ";
                    displayTableReestr += "<input type=\"date\" id=\"up_datestartreestr" + row_number_reestr + "\" value=\"" + item[1] + "\" class=\"form-control form-control-sm\" />"
                    displayTableReestr += "</div>";
    
                    displayTableReestr += "<div class=\"col-md-5\">"
                    displayTableReestr += "<label for=\"up_firmareestr\">Фирма</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"firmareestr-datalist\" id=\"up_firmareestr" + row_number_reestr + "\" value=\"" + item[2] + "\" class=\"form-control form-control-sm\" /> <datalist id=\"firmareestr-datalist\"></datalist></div>";
    
                    displayTableReestr += "<div class=\"col-md-2\">"
                    displayTableReestr += "<label for=\"up_rabotareestr\">Работа</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"rabotareestr-datalist\" id=\"up_rabotareestr" + row_number_reestr + "\" value=\"" + item[3] + "\" class=\"form-control form-control-sm\" /><datalist id=\"rabotareestr-datalist\"></datalist></div>";
    
                    displayTableReestr += "<div class=\"col-md-1\">"
                    displayTableReestr += "<label for=\"up_coderabotareestr\">Код раб</label> ";
                    displayTableReestr += "<input type=\"text\" id=\"up_coderabotareestr" + row_number_reestr + "\" value=\"" + item[4] + "\" class=\"form-control form-control-sm\" /></div>";
    
                    displayTableReestr += "<div class=\"col-md-2\">"
                    displayTableReestr += "<label for=\"up_proektreestr\">Проект</label> ";
                    displayTableReestr += "<input type=\"number\" id=\"up_proektreestr" + row_number_reestr + "\" value=\"" + item[5] + "\" class=\"form-control form-control-sm form-font\" /></div>";
    
    
                    displayTableReestr += "<div class=\"col-auto\">"
                    displayTableReestr += "<label for=\"up_sotrreestr\">Сотрудник</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"sotrreestr-datalist\" id=\"up_sotrreestr" + row_number_reestr + "\" value=\"" + item[6] + "\" class=\"form-control form-control-sm\" /></div>";
    
                    displayTableReestr += "<div class=\"col-auto\">"
                    displayTableReestr += "<label for=\"up_ispolreestr\">Исполнитель</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"ispolreestr-datalist\"  id=\"up_ispolreestr" + row_number_reestr + "\" value=\"" + item[7] + "\" class=\"form-control form-control-sm\" /></div>";
    
                    displayTableReestr += "<div class=\"col-md-2\">"
    
                    displayTableReestr += "<label for=\"up_sumispolreestr\">Сумма исполнителю</label> ";
                    displayTableReestr += "<input type=\"number\" id=\"up_sumispolreestr" + row_number_reestr + "\" value=\"" + item[8] + "\" class=\"form-control form-control-sm\" /></div>";
    
                    displayTableReestr += "<div class=\"col-md-2\">"
    
                    displayTableReestr += "<label for=\"up_sumoplatareestr\">Оплата исполнителю</label> ";
                    displayTableReestr += "<input type=\"number\" id=\"up_sumoplatareestr" + row_number_reestr + "\" value=\"" + item[9] + "\" class=\"form-control form-control-sm\" /></div>";
    
                    displayTableReestr += "<div class=\"col-md-4\">"
    
                    displayTableReestr += "<label for=\"up_primreestr\">Примечание к проекту</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"primreestr-datalist\" id=\"up_primreestr" + row_number_reestr + "\" value=\"" + item[10] + "\" class=\"form-control form-control-sm\" /><datalist id=\"primreestr-datalist\"></datalist></div>";
    
                    displayTableReestr += "<div class=\"col-md-4\">"
                    displayTableReestr += "<label for=\"up_primmoyoreestr\">Примечание мое</label> ";
                    displayTableReestr += "<input type=\"text\" list=\"primmoyoreestr-datalist\"  id=\"up_primmoyoreestr" + row_number_reestr + "\" value=\"" + item[11] + "\" class=\"form-control form-control-sm\" /><datalist id=\"primmoyoreestr-datalist\"></datalist></div></div>";
    
                    displayTableReestr += `
            <div class="row g-1 mt-1">
              <div class="col-auto">
                <div class="form-check">
                  <span class="check-style"></span>
                  <label class="form-check-label" for="up_issuepartreestr${row_number_reestr}">Выставлено частично</label> 
                  <input type="checkbox" id="up_issuepartreestr${row_number_reestr}" class="form-check-input"${check1(item[12])}/>
                  
                </div>
              </div>
              <div class="col-auto">
                <div class="form-check">
                  <span class="check-style"></span>
                  <label class="form-check-label" for="up_withoutaccountreestr${row_number_reestr}">Без счета</label> 
                  <input type="checkbox" id="up_withoutaccountreestr${row_number_reestr}" class="form-check-input"${check1(item[13])}/>
                </div>
              </div>
              <div class="col-auto">
                <div class="form-check">
                  <span class="check-style"></span>
                  <label class="form-check-label" for="up_stoppedreestr${row_number_reestr}">Остановлено</label> 
                  <input type="checkbox" id="up_stoppedreestr${row_number_reestr}" class="form-check-input"${check1(item[14])}/>
                </div>
              </div>
            </div>
          `;
    
                    displayTableReestr += "<div id=\"rowdatafin1" + row_number_reestr + "\"></div>"
    
                    displayTableReestr += "<td><div class=\"d-grid gap-2\"> ";
    
                    displayTableReestr += "<input type=\"button\" id=\"update_button_reestr" + row_number_reestr + "\" value=\"Update\" class=\"btn btn-danger\" ";
                    displayTableReestr += "onclick=\"UpdateRecordReestr(" + row_number_reestr + ")\" /> ";
    
                    displayTableReestr += "<input type=\"button\" id=\"finance_button_reestr" + row_number_reestr + "\" value=\"Finance\" class=\"btn btn-danger\" ";
                    displayTableReestr += "onclick=\"FinanceRecordReestr(" + row_number_reestr + ")\" />";
    
                    displayTableReestr += "<input type=\"button\" id=\"finance_button_reestr_close" + row_number_reestr + "\" value=\"FinClose\" class=\"btn btn-danger\" ";
                    displayTableReestr += "onclick=\"FinanceRecordReestrClose(" + row_number_reestr + ")\" /></div> ";
    
           
    
    
                    displayTableReestr += "</td>";
                    displayTableReestr += "</tr>";
                    row_number_reestr++;
    
                    // считаем количество остановленных
                    if (item[14]) {
                        count++
                    }
    
                });
    
                displayTableReestr += '</table></form>'
                document.getElementById("rowdatareestr").innerHTML = displayTableReestr;
                document.querySelector("#mainTableReestr th").innerHTML = `${row_number_reestr - count} - закрытых, ${count} - остановленных. Всего: ${row_number_reestr}`;
                // $("#rowdatareestr").attr("tabindex",-1).focus();
                // startTableReestr()
                $('#btnSearchReestr').prop("disabled", false);
            }).searchRecordsReestrGs(dateendReestr, datestartReestr, firmaReestr, rabotaReestr, coderabotaReestr, proektReestr, sotrReestr, ispolReestr, sumispolReestr, sumoplataReestr, primReestr, primMoyoReestr, issuepartReestr, withoutaccountReestr, stoppedReestr, checkDateReestr);
        } */

    function ClearRecordReestr() {
        document.querySelector('#reestr_ofo').reset();
        labelred();
    }

    /*     function UpdateRecordReestr(row_number_reestr) {
            document.getElementById("update_button_reestr" + row_number_reestr).disabled = true;
            var dateendReestr = document.getElementById("up_dateendreestr" + row_number_reestr).value;
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
            }).UpdateRecordReestrGs(dateendReestr, datestartReestr, firmaReestr, rabotaReestr, coderabotaReestr, proektReestr, sotrReestr, ispolReestr, sumispolReestr, sumoplataReestr, primReestr, primMoyoReestr, issuepartReestr, withoutaccountReestr, stoppedReestr);
        } */

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

    //обработка кнопок

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

    /*     $('#btnSearchReestr').click(function () {
            $('#btnSearchReestr').prop("disabled", true);
            SearchRecordsReestr();
        }); */

    /*     $('#btnClearSearchReestr').click(function () {
            $('#btnClearSearchReestr').prop("disabled", true);
            $('#rowdatareestr').html('');
            $('#btnClearSearchReestr').prop("disabled", false);
        }); */

    /*      $('#btnTable2').click(function () {
            $('#div-data-table').remove();
            $('#btnTable2').prop("disabled", true);
            $('<div id="div-data-table-spinner"></div><div id="div-data-table"></div>').appendTo('#div-data-table-row')
            $("#div-data-table-spinner").attr("tabindex", -1).focus();
            spinner('div-data-table-spinner');
            google.script.run.withSuccessHandler(showDataReestr).getData2();
        });  */

    /*         $('#clearBtnTable').click(function () {
            $('#clearBtnTable').prop("disabled", true);
            $('#div-data-table').remove();
            document.getElementById('btnSearchReestrInfo').innerHTML = '';
            document.getElementById('btnSearchFinInfo').innerHTML = '';
            document.getElementById('btnSearchJobInfo').innerHTML = '';
            $('#clearBtnTable').prop("disabled", false);
        })  */

    // кнопка аккордеона
    /*     $('#accordingButonReestr').click(accordingButon);
        function accordingButon() {
            if ($('#accordingButonReestr').attr('class') == 'accordion-button collapsed') {
                $('#accordingButonReestr').text('Развернуть форму');
            } else {
                $('#accordingButonReestr').text('Cвренуть форму');
            };
        };
    
        accordingButon(); */
}

export default tableReestrExport;