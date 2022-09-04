<div class="container">
    <div class="row row-buh mb-4 mt-2 me-4">
        <div class="col btn-hide">
            <div class="sticky-top nav-left radius">
                <ul class="nav flex-column buttons-buh">
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonBuh">BUHGALTER</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonNevistavleno">Не виставлено</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonNeoplacheno">Не оплачено</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonVraboteR">В работі д</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonVraboteT">В работі м</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonSotr2">Sotr2</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonTermSum">TermSum</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonDateSost">DateSost</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonInspektor">Inspektor</button>
                    </li>
                    <li class="nav-item nav-buh d-grid">
                        <button class="btn btn-buh d-inline-flex" id="buttonCashe">Cashe</button>
                    </li>
                </ul>
            </div>
        </div>



        <div class="col-xl-9 radius arrow ms-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" color='red' fill="currentColor" visibility='hidden' class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
            <!-- <div id="results" class="d-flex justify-content-center"></div> -->
            <div id="results"></div>
        </div>
    </div>
</div>


<!-- модальное окно для инспектора -->
<!-- Modal -->
<div class="modal fade" id="inspektorModal" tabindex="-1" aria-labelledby="inspektorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="results-modal"></div>
            </div>
        </div>
    </div>
</div>