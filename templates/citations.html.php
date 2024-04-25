<div class="container">
    <h1 class="text-light py-3">Les citations</h1>
    <hr class="text-light">
    <?php foreach ($resultats as $resultat) : ?>
        <hr>
        <div class="card bg-dark text-light mb-3 my-5 border">
            <div class="card-header border-primary mx-3">
                <h5 class="card-title">" <?= $resultat['citation'] ?> "</h5>
            </div>
            <div class="card-body">
                <p class="card-text"><?= $resultat['explication'] ?></p>
                <div class="d-flex justify-content-between">
                    <p class="blockquote-footer mx-3 mt-2"><i><?= $resultat['prenom'] . ' ' . $resultat['nom'] ?></i></p>
                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <?php if (in_fav($resultat['id_citations'], $resultat_fav)) : ?>
                            <form method="POST">
                                <button type="submit" name="delete_fav" class="btn" value="<?= $resultat['id_citations'] ?>"> <span class="material-symbols-outlined text-warning">
                                        stars
                                    </span></button>
                            </form>
                        <?php else : ?>
                            <form method="POST">
                                <button type="submit" name="submit_fav" class="btn" value="<?= $resultat['id_citations'] ?>"><span class="material-symbols-outlined text-warning">
                                        star
                                    </span></button>
                            </form>
                        <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <div class="">
        <nav aria-label="Page navigation ">
            <ul class="pagination justify-content-center">
                <li class="page-item <?= $currentPage - 1 <= 0 ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= !empty($search) ? '/?search=' . $search . '&page=' . $currentPage - 1 : '/?page=' . $currentPage - 1 ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php for ($i = 1; $i <= $nbPages; $i++) : ?>
                    <li class="page-item <?= $i == $currentPage ? 'active' : '' ?>">
                        <a class="page-link" href="<?= !empty($search) ? '/?search=' . $search . '&page=' . $i : '/?page=' . $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>

                <li class="page-item <?= $currentPage + 1 > $nbPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="<?= !empty($search) ? '/index.php' . $search . '?page=' . $currentPage + 1 : '/?page=' . $currentPage + 1 ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>