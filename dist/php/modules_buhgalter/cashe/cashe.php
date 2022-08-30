<template id="cashe_forma">
    <div class="container-fluid" onkeypress="clickPressCasheEnter(event)">
        <div class="row">
            <div class="col col-lg-8 col-xl-7">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="summa_cashe">Описание</label>
                            <input class="form-control" type="text" list="description_cashe-datalist" id="summa_cashe">
                            <datalist id="description_cashe-datalist"></datalist>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <label for="waste_cashe">Расход</label>
                            <input class="form-control" type="number" id="waste_cashe">
                        </div>
                        <div class="col-sm">
                            <label for="arrival_cashe">Приход</label>
                            <input class="form-control" type="number" id="arrival_cashe">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2 d-md-block"></div>
                            <label for="prim_cashe">Примечания</label>
                            <input class="form-control" type="text" list="remark_cashe-datalist" id="prim_cashe">
                            <datalist id="remark_cashe-datalist"></datalist>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-sm-block">
                            <button class="btn btn-danger mb-2 mt-2" type="button" id="button_cashe_input">Ввод</button>
                            <button class="btn btn-danger mb-2 mt-2" type="reset" id="button_cashe_reset">Очистить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>