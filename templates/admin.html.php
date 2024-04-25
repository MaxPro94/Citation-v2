<?php if ($_SESSION['id_droit'] == 1) : ?>
    <div class="container d-flex align-items-center justify-content-evenly">
        <div class="row  py-5 my-5">
            <div class="col-12 py-5 mx-5 my-5 d-flex justify-content-around">
                <div class="text-center my-5 p-5 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light mt-5">Actions sur les philosophes :</h2>
                    <a class="mt-5 mb-5 btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-75 text-light" href="?page=modif_auteurs">Auteurs</a>
                </div>
                <div class="text-center mx-5 my-5 p-5 border border-5 border-primary border-end-0 border-start-0">
                    <h2 class="text-light mt-5">Actions sur les citations :</h2>
                    <a class="mt-5 mb-5 btn btn-outline-secondary border-start-0 border-end-0 border-top-0 w-75 text-light" href="?page=modif_citations">Citations</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>