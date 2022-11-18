<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas">ASIKMANIS</i></div>
        <div class="list-group list-group-flush my-3">
            <a href="<?= BASEURL ?>/"
                class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-chart-line me-2"></i>Analisis Pendaftaran</a>
            <a href="<?= BASEURL  ?>/logout"
                class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                    class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL  ?>/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Container -->
        <div class="w3-content w3-margin-top" style="max-width:1400px;">
            <!-- The Grid -->
            <div class="w3-row-padding">
                <!-- Left Column -->
                <div class="w3-third">
                    <div class="w3-white w3-text-grey w3-card-4 w3-animate-top">
                        <div class="w3-display-container">
                            <img src="<?= BASEURL ?>/assets/pasphoto/<?= $data['detail']['pasphoto'] ?>"
                                style="width:100%" alt="Avatar">
                            <div class="w3-display-bottomleft w3-container w3-text-black">
                                <h2 style="background-color:white;padding:8px;"> <?= $data['detail']['nama'] ?> </h2>
                            </div>
                        </div>
                        <div class="w3-container">
                            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal mt-4"></i>
                                <?= $data['detail']['alamat'] ?> </p>
                            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                <?= $data['detail']['email'] ?>
                            </p>
                            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                <?= $data['detail']['nohp'] ?>
                            </p>
                            <p><i class="fas fa-lock  w3-margin-right w3-large w3-text-teal"></i>
                                <?= $data['detail']['password'] ?>
                            </p>
                            <br>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b> KTP </b></h5>
                            <h6 class="w3-text-teal">
                                <img src="<?= BASEURL  ?>/assets/ktp/<?= $data['detail']['ktp'] ?>" class="w-100"></img>
                            </h6>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>NPWP</b></h5>
                            <h6 class="w3-text-teal">
                                <img src="<?= BASEURL  ?>/assets/npwp/<?= $data['detail']['npwp'] ?>"
                                    class="w-100"></img>
                            </h6>
                            <hr>
                        </div>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>Referensi Kerja</b></h5>
                            <h6 class="w3-text-teal">
                                <img src="<?= BASEURL  ?>/assets/referensi-kerja/<?= $data['detail']['referensi_kerja'] ?>"
                                    class="w-100"></img>
                            </h6>
                            <hr>
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->
                </div>
                <!-- End Left Column -->

                <!-- Right Column -->
                <div class="w3-twothird">
                    <div class="w3-container w3-card w3-white w3-margin-bottom w3-animate-right">
                        <h2 class="w3-text-grey w3-padding-16"><i
                                class="fas fa-school fas-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Jabatan Kerja
                        </h2>

                        <div class="w3-container">
                            <ul class="w3-ul ms-4">

                                <?php foreach ($data['jabatan'] as $jabatan) { ?>
                                <hr>
                                <div class="list">
                                    <h6>
                                        Jabatan
                                    </h6>
                                    <li class="list-group-item p-1 mb-3"> <?= $jabatan['nama'] ?> </li>

                                </div>

                                <div class="list">

                                    <h6>
                                        Jenjang
                                    </h6>
                                    <li class="list-group-item p-1 mb-3"> <?= $jabatan['nama_jenjang'] ?> </li>
                                </div>

                                <div class="list">
                                    <h6>
                                        Pendidikan
                                    </h6>
                                    <li class="list-group-item p-1 mb-3"> <?= $jabatan['nama_pendidikan'] ?> </li>
                                </div>

                                <div class="list">
                                    <h6>
                                        Pengalaman
                                    </h6>
                                    <li class="list-group-item p-1 mb-3">
                                        <a href="<?= BASEURL ?>/assets/pengalaman/<?= $jabatan['pengalaman'] ?>"
                                            class="btn btn-warning" download>
                                            Download
                                        </a>
                                    </li>
                                    <?php } ?>
                                </div>
                            </ul>
                        </div>

                    </div>
                    <!-- End Right Column -->
                </div>
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Page Container -->
    </div>