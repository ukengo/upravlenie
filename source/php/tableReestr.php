<div class="container container-one">
    <h5>Таблиця Реестр оформлень</h5>

    <div class="accordion" id="accordionFlushReestr">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" id='accordingButonReestr' type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushReestr">
                <!-- начало вместилище аккордеона -->
                <div class="accordion-body radius">
                    <form id='reestr_ofo'>
                        <div class="row g-1 mt-1 form-background-color" onkeypress="clickPressReestrSearch(event)">
                            <div class="col-auto">
                                <div class="form form-reestr">
                                    <label for="dateendreestr">Дата кінець</label>
                                    <input type="date" id="dateendreestr" class="form-control form-control-sm" name="dateendreestr">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form form-reestr">
                                    <label for="check-date-reestr">
                                        &#60;&#62;
                                    </label>
                                    <select class="form-control form-control-sm" id="check-date-reestr" name="check-date-reestr">
                                        <option></option>
                                        <option>&#60;</option>
                                        <option>&#62;</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form">
                                    <label for="datestartreestr">Дата початок</label>
                                    <input type="date" id="datestartreestr" class="form-control form-control-sm" name="datestartreestr">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form">
                                    <label for="firmareestr">Фірма</label>
                                    <input type="text" list="firmareestr-datalist" id="firmareestr" class="form-control form-control-sm" name="firmareestr" />
                                    <datalist id="firmareestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form">
                                    <label for="rabotareestr">Робота</label>
                                    <input type="text" list="rabotareestr-datalist" id="rabotareestr" class="form-control form-control-sm" name="rabotareestr">
                                    <datalist id="rabotareestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form">
                                    <label for="coderabotareestr">Код раб</label>
                                    <input type="text" id="coderabotareestr" list="coderabotareestr-datalist" class="form-control form-control-sm" name="coderabotareestr">
                                    <datalist id="coderabotareestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form">
                                    <label for="proektreestr">Проект</label>
                                    <input type="number" id="proektreestr" list="proektreestr-datalist" class="form-control form-control-sm form-font input-paste-reestr" name="proektreestr">
                                    <datalist id="proektreestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form">
                                    <label for="sotrreestr">Співробітник</label>
                                    <input type="text" id="sotrreestr" list="sotrreestr-datalist" class="form-control form-control-sm" name="sotrreestr">
                                    <datalist id="sotrreestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form">
                                    <label for="ispolreestr">Виконавець</label>
                                    <input type="text" id="ispolreestr" list="ispolreestr-datalist" class="form-control form-control-sm " name="ispolreestr">
                                    <datalist id="ispolreestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form">
                                    <label for="sumispolreestr">Сумма викону</label>
                                    <input type="number" id="sumispolreestr" class="form-control form-control-sm" name="sumispolreestr">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form">
                                    <label for="sumoplatareestr">Оплата викону</label>
                                    <input type="number" id="sumoplatareestr" class="form-control form-control-sm" name="sumoplatareestr">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form">
                                    <label for="primreestr">Примітки до проекту</label>
                                    <input type="text" id="primreestr" list="primreestr-datalist" class="form-control form-control-sm" name="primreestr">
                                    <datalist id="primreestr-datalist"></datalist>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form">
                                    <label for="primmoyoreestr">Примітки мої</label>
                                    <input type="text" id="primmoyoreestr" list="primmoyoreestr-datalist" class="form-control form-control-sm" name="primmoyoreestr">
                                    <datalist id="primmoyoreestr-datalist"></datalist>
                                </div>
                            </div>
                            <div class="form col-auto">
                                <label for="largestproektreestr">Largest project:</label>
                                <div id="largestproektreestr"></div>
                            </div>
                        </div>
                        <div class="row g-1 mt-1">
                            <div class="col-auto">
                                <div class="form-check">
                                    <span class="check-style"></span>
                                    <label for="issuepartreestr" class="form-check-label">Виставлено частково</label>
                                    <input type="checkbox" id="issuepartreestr" class="form-check-input" name="issuepartreestr">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <span class="check-style"></span>
                                    <label for="withoutaccountreestr" class="form-check-label">Без рахунка</label>
                                    <input type="checkbox" id="withoutaccountreestr" class="form-check-input" name="withoutaccountreestr">
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <span class="check-style"></span>
                                    <label for="stoppedreestr" class="form-check-label">Зупинено</label>
                                    <input type="checkbox" id="stoppedreestr" class="form-check-input" name="stoppedreestr">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- конец вместилище аккордеона -->
            </div>
        </div>
    </div>
    <div class="row  mb-4 mt-2">
        <div class="col-md-8">

            <div class="btn-group my-1" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary btn-danger" id="btnSearchReestr">Search</button>
                <button type="button" class="btn btn-primary btn-danger" id='btn-clear-records'>Clear Records</button>
            </div>
            <button type="button" class="btn btn-danger" id="btnClearSearchReestr">Clear</button>
            <button type="button" class="btn btn-danger" onclick="startTableReestr()">Up Record</button>

            <!-- <input type="button" value="Table" class="btn btn-danger" id="btnTable" /> -->
            <div class="btn-group my-1" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary btn-danger" id="btnTable">Table</button>
                <!--  <button type="button" class="btn btn-primary btn-danger" id="btnTable2">Table2</button> -->
                <button type="button" class="btn btn-primary btn-danger" id="clearBtnTable">Clear</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row radius mb-4 mt-4">
        <div id="rowdatareestr"></div>
    </div>
</div>

<div class="container">
    <div class="row g-1 mt-1">
        <div class="position-tap d-flex justify-content-end">
            <button type="button" class="btn btn-primary btn-danger me-1" id="btnSearchReestrInfo">-</button>
            <div class="btn-group me-1" role="group">
                <button type="button" class="btn btn-primary btn-danger" id="btnSearchFinPlus">-</button>
                <button type="button" class="btn btn-primary btn-danger" id="btnSearchFinMinus">-</button>
            </div>
            <button type="button" class="btn btn-primary btn-danger me-1 btn-finance-transition" id="btnSearchFinInfo">-</button>
            <button type="button" class="btn btn-primary btn-danger me-1 btn-job-transition" id="btnSearchJobInfo">-</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div id="SearchFinInReestr"></div>
    </div>
</div>

<div class="container-fluid overflow-x:auto;iner-fluid gx-4">
    <br>
    <div class="row radius">
        <div class="row mt-4" id="div-data-table-row">
        </div>
    </div>
</div>