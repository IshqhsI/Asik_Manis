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
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="home">
                                <h1>Selamat Datang <span>{{ Auth::user()->name }}</span></h1>
                                <p>Silahkan melakukan pendaftaran sertifikasi konstruksi Kabupaten Banjar</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gambar">
                                <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="gambarmob">
                        <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
                    </div> --}}
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
