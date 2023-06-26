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
                    Lista
                </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Content -->
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-xxl-12 col-md-12">

                        <!-- Book table-->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Biblioteca de Livros</h5>
                                <a class="btn btn-primary" href="/bookCreate">Adicionar Livro</a>
                                <hr>
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Autor</th>
                                        <th scope="col">Tema</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php /** @var array $books */
                                    foreach ($books as $book): ?>
                                        <tr>
                                            <th scope="row">
                                                <a href="/bookEdit?id=<?= $book->id() ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </th>
                                            <td><?= $book->name() ?></td>
                                            <td><?= "R$ " . number_format($book->price(),2,',','.') ?></td>
                                            <td><?= $book->author() ?></td>
                                            <td><?= $book->theme() ?></td>
                                            <td>
                                                <a href="/bookRemove?id=<?= $book->id() ?>">
                                                    <i class="bi bi-trash" style="color:red"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<?php require_once __DIR__ . '/../components/footer.php' ?>
<?php require_once __DIR__ . '/../end-html.php'; ?>
