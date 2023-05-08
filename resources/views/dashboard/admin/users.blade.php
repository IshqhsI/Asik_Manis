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
                                <li class="breadcrumb-item active">Admin</li>
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
                            <div class="row">
                                <div class="col-lg-6 col-6">

                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>{{ $jumlahPendaftar }}</h3>
                                            <p>Jumlah Pendaftar</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-6">

                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>{{ $jumlahFile }}</h3>
                                            <p>Jumlah File</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-stats-bars"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">List Data Pendaftar</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">No Hp</th>
                                                    <th scope="col">Jabatan</th>
                                                    <th scope="col">Jenjang</th>
                                                    <th scope="col">Pendidikan</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($sertifikasi as $data)
                                                    <input type="hidden" value="">
                                                    <tr>
                                                        <th scope="row" class="d-flex justify-content-center">
                                                            {{ $i++ }}</th>
                                                        <td class="p-lg-3">{{ $data->nama }}</td>
                                                        <td class="p-lg-3">{{ $data->alamat }}</td>
                                                        <td class="p-lg-3">{{ $data->email }}</td>
                                                        <td class="p-lg-3">{{ $data->nohp }}</td>
                                                        <td class="p-lg-3">{{ $data->nama_jabatan }}</td>
                                                        <td class="p-lg-3">{{ $data->nama_jenjang }}</td>
                                                        <td class="p-lg-3">{{ $data->nama_pendidikan }}</td>
                                                        <td class="p-lg-3">
                                                            <a href="/dashboard/admin/edit/{{ $data->id }}"
                                                                class="btn btn-primary m-0">Edit</a>
                                                            <a href="/dashboard/admin/hapus/{{ $data->id }}"
                                                                class="btn btn-danger m-0">Hapus</a>
                                                            <a href="/dashboard/admin/detail/{{ $data->id_user }}"
                                                                class="btn btn-success m-0">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        @include('layouts.partials.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
@endsection
