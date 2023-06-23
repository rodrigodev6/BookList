<?php require_once __DIR__ . '/../start-html.php' ?>
<?php require_once __DIR__ . '/../components/header.php' ?>
<?php require_once __DIR__ . '/../components/sidebar.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Usuários</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Usuários</a>
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
                                <h5 class="col-12 card-title justify-content-between">
                                    Lista de Usuários
                                </h5>
                                <a class="btn btn-primary" href="/userCreate">Adicionar Usuário</a>
                                <hr>
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Aniversário</th>
                                        <th scope="col"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php /** @var array $userList */
                                    foreach ($userList as $user): ?>
                                        <tr>
                                            <th scope="row">
                                                <a href="/userEdit?id=<?= $user->id() ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                            </th>
                                            <td><?= $user->name() ?></td>
                                            <td><?= $user->email() ?></td>
                                            <td><?= $user->username() ?></td>
                                            <td><?= $user->birthDate()->format('d/m/Y') ?></td>
                                            <td>
                                                <a href="/userRemove?id=<?= $user->id() ?>">
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
