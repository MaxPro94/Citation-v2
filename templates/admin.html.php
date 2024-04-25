<?php if ($_SESSION['id_droit'] == 1) : ?>
    <div class="container">
        <div class="row  py-5 my-5">
            <div class="col-12 py-5 my-5 d-flex justify-content-around">
                <div class="text-center my-5 p-3 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light">Actions sur les philosophes :</h2>
                    <a class="btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-50 text-light mt-3" href="?page=modif_auteurs">Auteurs</a>
                </div>
                <div class="text-center my-5 p-3 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light">Actions sur les citations :</h2>
                    <a class="btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-50 text-light mt-3" href="?page=modif_citations">Citations</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>