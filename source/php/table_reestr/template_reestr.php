<form id='reestr_ofo' onsubmit="event.preventDefault();" >
    <div class="row g-1 mt-1 form-background-color">
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
                <input type="text" list="firmareestr-datalist" id="firmareestr" class="form-control form-control-sm" name="firmareestr">
                <datalist id="firmareestr-datalist">
                    <?php foreach (dropDownlist($response, '2') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form">
                <label for="rabotareestr">Робота</label>
                <input type="text" list="rabotareestr-datalist" id="rabotareestr" class="form-control form-control-sm" name="rabotareestr">
                <datalist id="rabotareestr-datalist">
                    <?php foreach (dropDownlist($response, '3') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="col-md-1">
            <div class="form">
                <label for="coderabotareestr">Код раб</label>
                <input type="text" id="coderabotareestr" list="coderabotareestr-datalist" class="form-control form-control-sm" name="coderabotareestr">
                <datalist id="coderabotareestr-datalist">
                    <?php foreach (dropDownlist($response, '4') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form">
                <label for="proektreestr">Проект</label>
                <input type="number" id="proektreestr" list="proektreestr-datalist" class="form-control form-control-sm form-font input-paste-reestr" name="proektreestr">
                <datalist id="proektreestr-datalist">
                    <?php foreach (dropDownlist($response, '5') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="col-auto">
            <div class="form">
                <label for="sotrreestr">Співробітник</label>
                <input type="text" id="sotrreestr" list="sotrreestr-datalist" class="form-control form-control-sm" name="sotrreestr">
                <datalist id="sotrreestr-datalist">
                    <?php foreach (dropDownlist($response, '6') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="col-auto">
            <div class="form">
                <label for="ispolreestr">Виконавець</label>
                <input type="text" id="ispolreestr" list="ispolreestr-datalist" class="form-control form-control-sm " name="ispolreestr">
                <datalist id="ispolreestr-datalist">
                    <?php foreach (dropDownlist($response, '15') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
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
                <datalist id="primreestr-datalist">
                    <?php foreach (dropDownlist($response, '21') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form">
                <label for="primmoyoreestr">Примітки мої</label>
                <input type="text" id="primmoyoreestr" list="primmoyoreestr-datalist" class="form-control form-control-sm" name="primmoyoreestr">
                <datalist id="primmoyoreestr-datalist">
                    <?php foreach (dropDownlist($response, '20') as $value) { ?>
                        <option value="<?php echo ($value)  ?>"></option>
                    <?php } ?>
                </datalist>
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
        <input type="hidden" name="action" value="table_reestr">
    </div>
</form>