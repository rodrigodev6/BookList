<?php require_once __DIR__ . '/../start-html.php' ?>
<?php require_once __DIR__ . '/../components/header.php' ?>
<?php require_once __DIR__ . '/../components/sidebar.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Livros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/books">Livros</a>
                </li>
                <li class="breadcrumb-item active">
                    Editar
                </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Content -->
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-10 col-md-10">

                        <!-- Book Form-->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Editar Livro</h5>

                                <?php /** @var array $book */ ?>
                                <form class="row g-3" method="POST" action="/bookEdit">
                                    <input type="hidden" name="_method" value="PUT" >
                                    <input type="hidden" name="id" value="<?= $book['id'] ?>">
                                    <input type="hidden" name="userId" value="<?= $book['user_id'] ?>">
                                    <div class="col-md-6">
                                        <label for="inputNameId" class="form-label">Nome</label>
                                        <input required
                                               name="name"
                                               type="text"
                                               class="form-control"
                                               id="inputNameId"
                                               value="<?= $book['name'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputAuthorId" class="form-label">Autor</label>
                                        <input required
                                               name="author"
                                               type="text"
                                               class="form-control"
                                               id="inputAuthorId"
                                               value="<?= $book['author'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputThemeId" class="form-label">Tema</label>
                                        <input required
                                               name="theme"
                                               type="text"
                                               class="form-control"
                                               id="inputThemeId"
                                               value="<?= $book['theme'] ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPriceId" class="form-label">Preço (#.###,##)</label>
                                        <input required
                                               name="price"
                                               type="text"
                                               class="form-control"
                                               id="inputPriceId"
                                               value="<?= $this->price($book['price']) ?>">
                                    </div>

                                    <div class="col-md-12 mb-0">
                                        <a href="/books" class="btn btn-dark">Voltar</a>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- End Book Form-->
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<?php require_once __DIR__ . '/../components/footer.php' ?>
<?php require_once __DIR__ . '/../end-html.php'; ?>
