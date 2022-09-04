<div class="container overflow-hidden">
    <div class="row col-lg-6 offset-lg-2 offset-lg-3">
        <h5>Внесення нового проекту</h5>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-2 offset-lg-3">
            <div class="radius p-3">
                <div class="row">

                    <div class="col-4">
                        <div class="form">
                            <label for="proekt">Проект</label>
                            <input type="number" class="form-control form-click-proekt" id="proekt" />
                        </div>
                    </div>
                    <div class="form">
                        <label for="firma">Фірма</label>
                        <input type="text" class="form-control form-click-proekt" list="firma-datalist" id="firma" />
                        <datalist id="firma-datalist"></datalist>
                    </div>
                    <div class="form">
                        <label for="rabota">Робота</label>
                        <input type="text" class="form-control form-click-proekt" list="rabota-datalist" id="rabota" />
                        <datalist id="rabota-datalist"></datalist>
                    </div>

                    <div class="col-6">
                        <div class="form">
                            <label for="code-rabota">Код роботи</label>
                            <input type="text" class="form-control form-click-proekt" list="code-rabota-datalist" id="code-rabota" />
                            <datalist id="code-rabota-datalist"></datalist>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form">
                            <label for="sotr">Співробітник</label>
                            <input type="text" class="form-control form-click-proekt" list="sotr-datalist" id="sotr" />
                            <datalist id="sotr-datalist"></datalist>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form">
                            <label for="date-nach">Дата початку</label>
                            <input type="date" class="form-control form-click-proekt" id="date-nach">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form">
                            <label for="date-con">Дата закінчення</label>
                            <input type="date" class="form-control form-click-proekt" id="date-con" />
                        </div>
                    </div>
                    <div class="form">
                        <label for="sch">Рф</label>
                        <input type="text" class="form-control form-click-proekt" id="sch" />
                    </div>
                    <div class="form">
                        <label for="prim">Замітки</label>
                        <input type="text" class="form-control form-click-proekt" list="prim-datalist" id="prim" />
                        <datalist id="prim-datalist"></datalist>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-danger mb-2 mt-2" id="mainButton" title="Запис рядка в реєстр + створення пустої папки з проектом.">&nbsp;&nbsp;&nbsp;&#128209;&nbsp;&nbsp;&nbsp;</button>
                    <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonBezAf" title="Запись рядка в реєстр. Папка с проектом не створюється.">&#128209;без Аф</button>
                    <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonAf" title="Створення пустої папки в Аф без запису в реєстр.">Аф без&#128209;</button>
                    <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonOtOrgana" title="Запис рядка в реєстр. Створення папки с проектом з підпапками... 'Від органу'">&#128209;і Від органу</button>
                    <button type="button" class="btn btn-danger mb-2 mt-2" id="buttonOchistka">Очистити</button>
                </div>
            </div>
        </div>
    </div>
</div>