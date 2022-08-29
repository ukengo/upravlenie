<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top" role="navigation">
        <div class="container-fluid">
            <a href="" class="navbar-brand" id="nav-brand-tab">FRIEDMAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navContent">
                <ul class="nav navbar-nav mr-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="nav-newproekt-tab" data-bs-toggle="tab" data-bs-target="#nav-newproekt" type="button" role="tab" aria-controls="nav-newproekt" aria-selected="true">New proekt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-arriwalwaste-tab" data-bs-toggle="tab" data-bs-target="#nav-arriwalwaste" type="button" role="tab" aria-controls="nav-arriwalwaste" aria-selected="true">Arriwal - Waste</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link active" id="nav-buhgalter-tab" data-bs-toggle="tab" data-bs-target="#nav-buhgalter" type="button" role="tab" aria-controls="nav-buhgalter" aria-selected="true">BUHGALTER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="nav-fin-tab" data-bs-toggle="tab" data-bs-target="#nav-fin" type="button" role="tab" aria-controls="nav-fin" aria-selected="true">Finance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-reestr-tab" data-bs-toggle="tab" data-bs-target="#nav-reestr" type="button" role="tab" aria-controls="nav-reestr" aria-selected="true">Reestr</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-job-tab" data-bs-toggle="tab" data-bs-target="#nav-job" type="button" role="tab" aria-controls="nav-job" aria-selected="true">Job</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade" id="nav-newproekt" role="tabpanel" aria-labelledby="nav-newproekt-tab">
        <?php require "modules/new_proekt/new_proekt.php" ?>
    </div>
    <div class="tab-pane fade" id="nav-arriwalwaste" role="tabpanel" aria-labelledby="nav-arriwalwaste-tab">
        <?php require "modules/arriwalwaste/arriwalwaste.php" ?>
    </div>
    <div class="tab-pane active" id="nav-buhgalter" role="tabpanel" aria-labelledby="nav-buhgalter-tab">
        <?php require "modules/buhgalter/buhgalter.php" ?>
    </div>

    <div class="tab-pane fade" id="nav-fin" role="tabpanel" aria-labelledby="nav-fin-tab">
        <?php require "modules/finance/finance.php"?>
    </div>
    <div class="tab-pane fade" id="nav-reestr" role="tabpanel" aria-labelledby="nav-reestr-tab">
        <?php require "modules/tableReestr/tableReestr.php" ?>
    </div>
    <div class="tab-pane fade" id="nav-job" role="tabpanel" aria-labelledby="nav-job-tab">
    <?php require "modules/job/job.php"?>
    </div>
</div>