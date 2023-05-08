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
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profil</li>
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
                                        <img class="profile-user-img img-rounded"
                                            src="{{ asset('storage/' . $one->pasphoto) }}" alt="User profile picture"
                                            style="width: 150px">
                                    </div>

                                    <h3 class="profile-username text-center my-3">{{ $one->nama }}</h3>

                                    {{-- <p class="text-muted text-center">Software Engineer</p> --}}

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
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        {{-- Berkas --}}
                        <div class="col-lg-8" style="height: 100%">
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
                                                        class="btn btn-warning" download="pengalaman/{{ $one->nama }}">
                                                        Download
                                                    </a>
                                                </div>
                                            </li>

                                            <hr>
                                        @endforeach()
                                    </ul>

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalCheckbox">
                                        Tambah Jabatan Kerja
                                    </button>
                                    <button type="button" class="btn btn-primary d-block" data-toggle="modal"
                                        style="opacity: 0" data-target="#modalCheckbox">
                                        Tambah Jabatan Kerja
                                    </button>
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
        @include('layouts.partials.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection

@include('layouts.partials.modaladdjabker')
