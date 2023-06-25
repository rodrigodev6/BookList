<?php ?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard Nav -->
        <li class="nav-item">
            <?php /** @var string $page */ ?>
            <a class="nav-link <?= $this->page === 'dashboard' ? '' : 'collapsed' ?>" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <!-- Books Nav -->
        <li class="nav-item">
            <a class="nav-link <?= $this->page=== 'books' ? '' : 'collapsed' ?>" href="/books">
                <i class="bi bi-grid"></i>
                <span>Livros</span>
            </a>
        </li>
        <!-- End Books Nav -->

        <!-- Users Nav -->
        <li class="nav-item">
            <a class="nav-link <?= $this->page === 'users' ? '' : 'collapsed' ?>" href="/users">
                <i class="bi bi-grid"></i>
                <span>Usuários</span>
            </a>
        </li>
        <!-- End Users Nav -->
    </ul>

</aside><!-- End Sidebar-->

