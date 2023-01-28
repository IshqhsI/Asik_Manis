{{-- @extends('layouts.main')
@section('container')
    <div class="container-fluid p-md-0 p-sm-0">
        <div class="d-flex toggled" id="wrapper">
            @include('partials.sidebar')
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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
                                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid p-0">
                    <!-- Page Container -->
                    <div class="w3-content w3-margin-top" style="max-width:1400px;">
                        <!-- The Grid -->
                        <div class="w3-row-padding">
                            <!-- Left Column -->
                            <div class="w3-third">
                                <div class="w3-white w3-text-grey w3-card-4 w3-animate-top">
                                    <div class="w3-display-container">
                                        <img src="{{ asset('storage/' . $one->pasphoto) }}" style="width:100%"
                                            alt="Avatar">
                                        <div class="w3-display-bottomleft w3-container w3-text-black">
                                            <h2 style="background-color:white;padding:8px;"> {{ $one->nama }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="w3-container">
                                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal mt-4"></i>
                                            {{ $one->alamat }} </p>
                                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->email }}
                                        </p>
                                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->nohp }}
                                        </p>
                                        <p><i class="fas fa-lock  w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->password }}
                                        </p>
                                        <br>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b> KTP </b></h5>
                                        <h6 class="w3-text-teal">
                                            <a href="{{ asset('storage/' . $one->ktp) }}" class="btn btn-success"
                                                download="{{ 'ktP-' . $one->nama }}">Download</a>
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b>NPWP</b></h5>
                                        <h6 class="w3-text-teal">
                                            <a href="{{ asset('storage/' . $one->npwp) }}" class="btn btn-success"
                                                download="{{ 'npwp-' . $one->nama }}">Download</a>
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b>Referensi Kerja</b></h5>
                                        <h6 class="w3-text-teal">
                                            <a href="{{ asset('storage/' . $one->referensi_kerja) }}"
                                                class="btn btn-success"
                                                download="{{ 'referensi_kerja   -' . $one->nama }}">Download</a>
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
                                            class="fas fa-school fas-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Jabatan
                                        Kerja
                                    </h2>

                                    <div class="w3-container">
                                        <ol class="list-group">

                                            @foreach ($jabatan as $jbt)
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start list-jabatan">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Jabatan</div>
                                                        {{ $jbt->nama_jabatan }}
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start list-jabatan">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Jenjang</div>
                                                        {{ $jbt->nama_jenjang }}
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start list-jabatan">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Pendidikan</div>
                                                        {{ $jbt->nama_pendidikan }}
                                                    </div>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-start list-jabatan">
                                                    <div class="ms-2 me-auto">
                                                        <div class="fw-bold">Pengalaman</div>
                                                        <a href="{{ asset('storage/public/assets/pengalaman/' . $jbt->pengalaman) }}"
                                                            class="btn btn-warning"
                                                            download="pengalaman/{{ $one->nama }}">
                                                            Download
                                                        </a>
                                                    </div>
                                                </li>

                                                <hr>
                                            @endforeach()
                                        </ol>

                                    </div>

                                </div>

                            </div>
                            <!-- End Right Column -->
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Page Container -->
            </div>
        </div>


    </div>
@endsection --}}

@extends('layouts.mainadlte')
@section('container')
    <div class="wrapper">
        <!-- Navbar -->
        @include('partials.navbaradlte')

        <!-- Main Sidebar Container -->
        @include('partials.sidebaradlte')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $title }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="/dashboard/admin">Admin</a></li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        {{-- Profil --}}
                        <div class="col-lg-4">
                            <!-- Profil -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ asset('app_style/dist/img/user4-128x128.jpg') }}"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ $one->nama }}</h3>

                                    <p class="text-muted text-center">Software Engineer</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <i class="fa fa-home fa-fw mr-2"></i>
                                            <span class=""> {{ $one->alamat }} </span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-envelope fa-fw mr-2"></i>
                                            <span class="">
                                                {{ $one->email }}
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-phone fa-fw mr-2"></i>
                                            <span class="">
                                                {{ $one->nohp }}
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-lock mr-2"></i>
                                            <span class="">
                                                {{ $one->password }}
                                            </span>
                                        </li>
                                    </ul>

                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        {{-- Berkas --}}
                        <div class="col-lg-8">
                            <!-- Berkas Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Berkas</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-book mr-1 mb-3"></i> Ijazah </strong>
                                    <h6 class="">
                                        <a href="{{ asset('storage/' . $one->ijazah) }}" class="btn btn-success"
                                            target="blank">Lihat..</a>
                                        <a href="{{ asset('storage/' . $one->ijazah) }}" class="btn btn-warning"
                                            download="ijazah-{{ $one->nama }}">Download</a>
                                    </h6>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1 mb-3"></i> KTP </strong>
                                    <h6 class="">
                                        <a href="{{ asset('storage/' . $one->ktp) }}" class="btn btn-success"
                                            target="blank">Lihat..</a>
                                        <a href="{{ asset('storage/' . $one->ktp) }}" class="btn btn-warning"
                                            download="ijazah-{{ $one->nama }}">Download</a>
                                    </h6>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1 mb-3"></i> NPWP </strong>
                                    <h6 class="">
                                        <a href="{{ asset('storage/' . $one->npwp) }}" class="btn btn-success"
                                            target="blank">Lihat..</a>
                                        <a href="{{ asset('storage/' . $one->npwp) }}" class="btn btn-warning"
                                            download="ijazah-{{ $one->nama }}">Download</a>
                                    </h6>

                                    <hr>

                                    <strong><i class="fas fa-book mr-1 mb-3"></i> Referensi Kerja </strong>
                                    <h6 class="">
                                        <a href="{{ asset('storage/' . $one->referensi_kerja) }}" class="btn btn-success"
                                            target="blank">Lihat..</a>
                                        <a href="{{ asset('storage/' . $one->referensi_kerja) }}" class="btn btn-warning"
                                            download="ijazah-{{ $one->nama }}">Download</a>
                                    </h6>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>

                    {{-- Jabatan Kerja --}}
                    <!-- /.row -->
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-lg-12">
                            <!-- Berkas Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Jabatan Kerja</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="list-group list-group-unbordered">
                                        @foreach ($jabatan as $jbt)
                                            <li class="list-group-item">
                                                <div class="ms-2 me-auto">
                                                    <div class=""><strong> Jabatan</strong></div>
                                                    {{ $jbt->nama_jabatan }}
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="ms-2 me-auto">
                                                    <div class="">
                                                        <strong>
                                                            Jenjang
                                                        </strong>
                                                    </div>
                                                    {{ $jbt->nama_jenjang }}
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="ms-2 me-auto">
                                                    <div class="">
                                                        <strong>
                                                            Jenjang
                                                        </strong>
                                                    </div>
                                                    {{ $jbt->nama_pendidikan }}
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="ms-2 me-auto">
                                                    <div class="mb-2">
                                                        <strong>
                                                            Pengalaman
                                                        </strong>
                                                    </div>
                                                    <a href="{{ asset('storage/public/assets/pengalaman/' . $jbt->pengalaman) }}"
                                                        target="blank" class="btn btn-success">Lihat..</a>
                                                    <a href="{{ asset('storage/public/assets/pengalaman/' . $jbt->pengalaman) }}"
                                                        class="btn btn-warning"
                                                        download="pengalaman/{{ $one->nama }}">
                                                        Download
                                                    </a>
                                                </div>
                                            </li>

                                            <hr>
                                        @endforeach()
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection
