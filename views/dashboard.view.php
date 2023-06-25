<?php require_once __DIR__ . '/start-html.php' ?>

<?php require_once __DIR__ . '/components/header.php' ?>

<?php require_once __DIR__ . '/components/sidebar.php' ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/dashboard">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Dashboard
                </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Content -->
    <section class="section dashboard">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row">

                            <!-- All Books Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Total de Livros</h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-book"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>15</h6>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End All Books Card -->

                            <!-- Books Add Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filtro</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Hoje</a></li>
                                            <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                            <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Novos Livros <span>| Hoje</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-book"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>4</h6>
                                                <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">aumento</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- End Books Add Card -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main><!-- End #main -->

<?php require_once __DIR__ . '/components/footer.php' ?>

<?php require_once __DIR__ . '/end-html.php'; ?>


