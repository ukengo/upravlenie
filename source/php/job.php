<div class="container" onkeypress="clickPressJobSearch(event)">
    <div class="row g-1 mt-1">
        <h5>job</h5>
    </div>
    <form>
        <div class="col-xl radius p-2 form-background-color">
            <div class="row g-1 mt-1">
                <div class="col-md-2">
                    <div class="form">
                        <label for="proektjob">Проект</label>
                        <input type="number" id="proektjob" list="proektjob-datalist" class="form-control form-control-sm" />
                        <datalist id="proektjob-datalist"></datalist>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form">
                        <label for="rabotajob">Робота</label>
                        <input type="text" id="rabotajob" list="rabotajob-datalist" class="form-control form-control-sm" />
                        <datalist id="rabotajob-datalist"></datalist>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form">
                        <label for="datestartjob">Дата початку</label>
                        <input type="date" id="datestartjob" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form">
                        <label for="dateendjob">Дата кінця</label>
                        <input type="date" id="dateendjob" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form">
                        <label for="idjob">id</label>
                        <input type="text" id="idjob" class="form-control form-control-sm" />
                    </div>
                </div>
            </div>
            <div class="row g-1 mt-1">
                <div class="col-md-6">
                    <div class="form">
                        <label for="opisaniejob">Опис</label>
                        <input type="text" id="opisaniejob" list="opisaniejob-datalist" class="form-control form-control-sm" />
                        <datalist id="opisaniejob-datalist"></datalist>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <label for="firmajob">Фірма</label>
                        <input type="text" id="firmajob" list="firmajob-datalist" class="form-control form-control-sm" />
                        <datalist id="firmajob-datalist"></datalist>
                    </div>
                </div>
            </div>
            <div class="row g-1 mt-1">
                <div class="col-auto">
                    <div class="form-check bg-light">
                        <label for="originaljob">Оригінал</label>
                        <input type="checkbox" id="originaljob" class="form-check-input" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row  mb-2 mt-2">
            <div class="col-md-9">
                <div class="btn my-1" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary btn-danger" id="btnSearchJob">Search</button>
                    <button type="button" class="btn btn-primary btn-danger" id="btnClearSearchJob">Clear</button>
                </div>
                <button type="button" class="btn btn-primary btn-danger" id="btnAddRecord">Add Record</button>
                <button type="button" class="btn btn-primary btn-danger" onclick="ClearRecordjob()">Clear Record</button>
                <button type="reset" class="btn btn-primary btn-danger">Clear Record</button>
                <div class="btn my-1" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary btn-danger" id="btnTableJob">Table</button>
                    <button type="button" class="btn btn-primary btn-danger" id="clearBtnTableJob">Clear</button>
                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row mb-1 mt-2">
            <div id="rowdatajob"></div>
        </div>
    </div>

    <div class="container">
        <form>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="search" class="form-control input-search" id="searchJob" somethingSearch="#data-table-job tbody tr" placeholder="Поиск по таблице" />
                </div>
                <!-- <div class="col-md-4 mt-2">
        <button type="reset" class="btn btn-primary btn-danger" id="btnClearSearchTableJob">Clear</button>
      </div>    -->
            </div>
        </form>
    </div>

    <div class="container">
        <div class="row" id="div-data-tablejob-row"></div>
    </div>
</div>