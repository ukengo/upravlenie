<div class="container" onkeypress="clickPressFinance(event)">
    <div class="row mt-4">
        <h5>Фінанси</h5>
    </div>

    <div class="col-xl-10 radius p-4 form-background-color">
        <div class="row g-1 mt-1">
            <div class="col-md-2">
                <div class="form">
                    <label for="proektfin">Проект</label>
                    <input type="number" id="proektfin" list="proektfin-datalist" class="form-control form-control-sm form-font input-paste-finance" />
                    <datalist id="proektfin-datalist"></datalist>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form">
                    <label for="summafin">Сума</label>
                    <input type="number" id="summafin" class="form-control form-control-sm" />
                </div>
            </div>

            <div class="col-md-1">
                <div class="form">
                    <label for="priznakfin">Признак</label>
                    <input type="text" id="priznakfin" list="priznakfin-datalist" class="form-control form-control-sm" />
                    <datalist id="priznakfin-datalist"></datalist>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form">
                    <label for="dateoplfin">Дата оплати</label>
                    <input type="date" id="dateoplfin" class="form-control form-control-sm" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="form">
                    <label for="sffin">Рф</label>
                    <input type="text" id="sffin" list="sffin-datalist" class="form-control form-control-sm" />
                    <datalist id="sffin-datalist"></datalist>
                </div>
            </div>

            <div class="col-md-2">
                <div class="form">
                    <label for="idfin">Id</label>
                    <input type="text" id="idfin" class="form-control form-control-sm" />
                </div>
            </div>
        </div>
        <div class="row g-1 mt-1">
            <div class="col-md-6">
                <div class="form">
                    <label for="primfin">Примітки</label>
                    <input type="text" id="primfin" list="primfin-datalist" class="form-control form-control-sm" />
                    <datalist id="primfin-datalist"></datalist>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <label for="firmafin">Фірма</label>
                    <input type="text" id="firmafin" list="firmafin-datalist" class="form-control form-control-sm" />
                    <datalist id="firmafin-datalist"></datalist>
                </div>
            </div>
        </div>
        <div class="row g-1 mt-1 checkbox-finance">
            <div class="col-md-auto">
                <div class="form-check">
                    <span class="check-style"></span>
                    <label for="issuepartfinance" class="form-check-label">Виставлено частково</label>
                    <input type="checkbox" id="issuepartfinance" class="form-check-input" value="part" />
                </div>
            </div>
            <div class="col-md-auto">
                <div class="form-check">
                    <span class="check-style"></span>
                    <label for="issuecompletfinance" class="form-check-label">Виставлено повністю</label>
                    <input type="checkbox" id="issuecompletfinance" class="form-check-input" value="complet" />
                </div>
            </div>
            <div class="col-md-auto">
                <div class="form-check">
                    <span class="check-style"></span>
                    <label for="ispolufinance" class="form-check-label">Викону</label>
                    <input type="checkbox" id="ispolufinance" class="form-check-input" value="ispolu" />
                </div>
            </div>
        </div>
    </div>

    <div class="row  mb-2 mt-2 ">

        <div class="col-md-9">
            <div class="btn-group my-1" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary btn-danger" id="btnSearchFinance">Search</button>
                <button type="button" class="btn btn-primary btn-danger" id="btnClearSearchFinance">Clear</button>
            </div>
            <div class="btn-group my-1" role="group" aria-label="Basic example" id="add_button_fin">
                <button type="button" class="btn btn-danger my-1">Add R+</button>
                <button type="button" class="btn btn-danger my-1">Add R-</button>
            </div>
            <button type="button" class="btn btn-danger my-1" onclick="ClearRecordFin()">Clear Record</button>
            <button type="button" class="btn btn-danger my-1" onclick="startTableFinance()">Up Record</button>
            <div class="btn-group my-1" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary btn-danger" id="btnTableАFinance">Table</button>
                <button type="button" class="btn btn-primary btn-danger" id="clearBtnTableFinance">Clear</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row radius mb-4 mt-4">
        <div id="rowdatafin"></div>
    </div>
</div>

<div class="container">
    <form>
        <div class="row g-1 mt-1">
            <div class="col-md-4">
                <input type="search" class="form-control input-search input-paste-finance mt-1" id="searchFinance" somethingSearch="#data-table-finance tbody tr" placeholder="Поиск по таблице" onkeypress="clickPressFinanceShearh(event)">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-primary btn-danger mt-1" id="btnSearchFinanceInfo"></button>
                <button type="button" class="btn btn-primary btn-danger mt-1 btn-reestr-transition" id="btnSearchFinanceReestrInfo"></button>
                <button type="button" class="btn btn-primary btn-danger mt-1 btn-job-transition" id="btnSearchFinanceJobInfo"></button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 height-alignment">
            <h5 id="summaFinsnce" class="height-alignment"></h5>
        </div>
    </div>
</div>

<div class="container">
    <br>
    <div class="row radius" id="div-data-tablefinance-row">
        <!-- <div id="div-data-table-finance">
			    <table id="data-table-finance" class="table table-striped table-sm table-hover table-bordered">
				   TABLE DATA IS ADDED BY THE showData() JAVASCRIPT FUNCTION ABOVE   
			    </table>
      </div> -->
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModalFinance" tabindex="-1" aria-labelledby="exampleModalLabelFinance" aria-hidden="true">
    <div class="container" onkeypress="clickPressFinanceModal(event)">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div hidden id="financeModalLabel"> </div>
                    <div class="container">



                        <div class="form">
                            <label for="proektfinModal">Проект</label>
                            <input type="number" id="proektfinModal" list="proektfin-datalist" class="form-control form-control-sm form-font" />
                            <datalist id="proektfin-datalist"></datalist>
                        </div>



                        <div class="form">
                            <label for="summafinModal">Сума</label>
                            <input type="number" id="summafinModal" class="form-control form-control-sm" />
                        </div>

                        <div class="form">
                            <label for="priznakfinModal">Признак</label>
                            <input type="text" id="priznakfinModal" list="priznakfin-datalist" class="form-control form-control-sm" />
                            <datalist id="priznakfin-datalist"></datalist>
                        </div>



                        <div class="form">
                            <label for="dateoplfinModal">Дата оплати</label>
                            <input type="date" id="dateoplfinModal" class="form-control form-control-sm" />
                        </div>



                        <div class="form">
                            <label for="sffinModal">Рф</label>
                            <input type="text" id="sffinModal" list="sffin-datalist" class="form-control form-control-sm" />
                            <datalist id="sffin-datalist"></datalist>
                        </div>



                        <div class="form">
                            <label for="primfinModal">Примітки</label>
                            <input type="text" id="primfinModal" list="primfin-datalist" class="form-control form-control-sm" />
                            <datalist id="primfin-datalist"></datalist>
                        </div>

                        <div class="form">
                            <label for="idfinModal">id</label>
                            <input type="text" id="idfinModal" class="form-control form-control-sm" />


                        </div>


                        <div class="form">
                            <label for="firmafinModal">Фірма</label>
                            <input type="text" id="firmafinModal" list="firmafin-datalist" class="form-control form-control-sm" />
                            <datalist id="firmafin-datalist"></datalist>
                        </div>

                        <div class="row g-1 mt-1 checkbox-finance">
                            <div class="col-md-auto">
                                <div class="form-check">
                                    <label for="issuepartfinance" class="form-check-label">Виставлено частково</label>
                                    <input type="checkbox" id="issuepartfinanceMod" class="form-check-input" value="part" />
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <div class="form-check">
                                    <label for="issuecompletfinance" class="form-check-label">Виставлено повністю</label>
                                    <input type="checkbox" id="issuecompletfinanceMod" class="form-check-input" value="complet" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="btnyYesterdayDateFinanceModal">Yesterday</button>
                        <button type="button" class="btn btn-danger" id="btnyTodayDateFinanceModal">Today</button>
                        <button type="button" class="btn btn-primary" id="btnSaveModalFinance">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="btnDeleteModalAWModal">Delete</button>
                        <div id="numRowFinanceModal"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>