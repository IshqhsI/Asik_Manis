<?php

$pasphoto = DB::select('select pasphoto from sertifikasis where id_user = ?', [Auth::user()->id]);

if (empty($pasphoto)) {
    $pasphoto = 'pasphoto/profile.png';
} else {
    $pasphoto = $pasphoto[0]->pasphoto;
}

?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-1">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link bg-primary">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Asikmanis Logo" class="brand-image img-circle"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AsikManis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('storage/' . $pasphoto) }}" class="img-thumbnail elevation-2" alt="User Image1">
            </div>
            <div class="info d-flex ml-2">
                <a href="/dashboard/profil"
                    class="d-flex align-items-center justify-content-center ms-3">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard"
                        class="nav-link <?= $title == 'Dashboard' || $title == 'Profil' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/daftar" class="nav-link <?= $title == 'Daftar' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Daftar
                        </p>
                    </a>
                </li>
                @can('admin')
                    <li class="nav-item">
                        <a href="/dashboard/admin"
                            class="nav-link <?= $title == 'Dashboard Admin' || $title == 'Edit Data' || $title == 'Detail' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-user-secret"></i>
                            <p>
                                Admin
                                <!-- <span class="right badge badge-danger">New</span> -->
                            </p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="/logout" class="nav-link  <?= $title == 'Logout' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Logout
                            <!-- <span class="right badge badge-danger">New</span> -->
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
