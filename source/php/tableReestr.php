<?php
require_once $_SERVER['DOCUMENT_ROOT'] . 'source/php/table_reestr/func_autoload_reestr.php';
?>

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
                    <?php
                    require_once $_SERVER['DOCUMENT_ROOT'] . 'source/php/table_reestr/template_reestr.php';
                    ?>
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
            <button type="button" class="btn btn-danger" id="btnCloseSearchReestr">Close</button>
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