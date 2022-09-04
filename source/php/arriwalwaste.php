<div class="container">
    <div class="row">
        <h5>Витрати-Прихід</h5>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="radius">
                <div id="for-template-aw"></div>
            </div>
            <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonWaste">Витрати</button>
            <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonArrival">Прихід</button>
            <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonWasteTab">Трати</button>
            <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonArrivalTab">Отримання</button>
        </div>
        <div class="col-lg-7">
            <div class="radius arw-table">
                <h6 id="vrabotevseArriwalWaste" class="mb-4 text-center"></h6>
                <input type="search" class="form-control input-search mb-2" id="search"
                    somethingSearch="#dataTableArriwalWaste tbody tr" placeholder="Поиск по таблице">
                <div id="dataTableArriwalWaste" class="table-responsive-xs "></div>
            </div>
        </div>
    </div>
</div>

<!-- template -->
<template id="arriwalwaste_forma">
    <form>
        <label class="d-block">
            Дата
            <input type="date" class="form-control date-aw">
        </label>
        <div class="row">
            <div class="col">
                <label class="d-block">
                    Сума
                    <input type="number" class="form-control summa-aw">
                </label>
            </div>
            <div class="col">
                <label class="text-nowrap d-block">
                    Кількість приват
                    <input type="number" class="form-control summaPrivat-aw" onkeypress="clickPressAwPrivat(event)">
                </label>
            </div>
        </div>
        <div>
            <label class="d-block">
                Форма власності
                <select class="form-control forma-aw">
                    <option>нал</option>
                    <option>ооо</option>
                    <option>оооАксон</option>
                    <option>флп</option>
                </select>
            </label>
        </div>
        <label class="d-block">
            Фірма
            <input type="text" class="form-control firmaArrivalWaste-aw" list="firmaArrivalWaste-datalist">
            <datalist id="firmaArrivalWaste-datalist"></datalist>
        </label>
        <label class="d-block">
            Стаття витрат
            <input type="text" class="form-control waste-aw" list="waste-datalist">
            <datalist id="waste-datalist"></datalist>
        </label>
        <label class="d-block">
            Термінал-Карантин
            <select class="form-control termkar-aw">
                <option></option>
                <option>терминал</option>
                <option>карантин</option>
            </select>
        </label>
        <label class="d-block">
            Рф Термінал-Карантин
            <input class="form-control sftermkar-aw">
        </label>
    </form>
</template>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container" onkeypress="clickPressAW(event)">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="awModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modal-body-aw"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSaveModalAW">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        id="btnDeleteModalAW">Delete</button>
                    <div id="numRowFinanceModal"></div>
                </div>
            </div>
        </div>
    </div>
</div>