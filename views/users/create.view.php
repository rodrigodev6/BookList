<?php require_once __DIR__ . '/../start-html.php' ?>
<?php require_once __DIR__ . '/../components/header.php' ?>
<?php require_once __DIR__ . '/../components/sidebar.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Usuários</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/users">Usuários</a>
                </li>
                <li class="breadcrumb-item active">
                    Criar
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
                                <h5 class="card-title">Adicionar usuário</h5>

                                <form class="row g-3" method="POST" action="">
                                    <div class="col-md-6">
                                        <label for="inputNameId" class="form-label">Nome</label>
                                        <input name="name" type="text" class="form-control" id="inputNameId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputUsernameId" class="form-label">Username</label>
                                        <input name="username" type="text" class="form-control" id="inputUsernameId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmailId" class="form-label">E-mail</label>
                                        <input name="email" type="email" class="form-control" id="inputEmailId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputBirtDateId" class="form-label">Data de Nascimento</label>
                                        <input name="birthDate" type="date" class="form-control" id="inputBirtDateId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPasswordId" class="form-label">Senha</label>
                                        <input name="passaword" type="password" class="form-control" id="inputPasswordId">
                                    </div>


                                    <div class="col-md-12 mb-0">
                                        <a href="/users" class="btn btn-dark">Voltar</a>
                                        <button type="submit" class="btn btn-primary">Criar</button>
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


