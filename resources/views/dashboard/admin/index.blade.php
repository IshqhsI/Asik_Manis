@extends('layouts.main')
@section('container')
    <div class="d-flex toggled" id="wrapper">
        @include('partials.sidebar')
        <!-- Page Content -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total</h3>
                                <p class="fs-5">User Pendaftar</p>
                            </div>
                            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total</h3>
                                <p class="fs-5">File Pendaftar</p>
                            </div>
                            <i class="fas fa-file fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">List Data Pendaftar</h3>
                    {{-- <div class="col table-responive">
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col" class="data-ac">Email</th>
                                    <th scope="col" class="data-ac">Password</th>
                                    <th scope="col">No Hp.</th>
                                    <th scope="col" class="data-ac">Jabatan Kerja</th>
                                    <th scope="col" class="data-ac">Jenjang</th>
                                    <th scope="col" class="data-ac">Pendidikan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Udin</td>
                                    <td class="data-ac">udinkeselekgas@gmail.com</td>
                                    <td class="data-ac">udinnihbos123</td>
                                    <td>08213144415</td>
                                    <td class="data-ac">direktur</td>
                                    <td class="data-ac">jenjang2</td>
                                    <td class="data-ac">smk</td>
                                    <td>
                                        <button type="button" class="btn btn-success">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-danger">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
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
                                        <th scope="row" class="p-lg-3"><?= $i++ ?></th>
                                        <td class="p-lg-3">{{ $data->nama }}</td>
                                        <td class="p-lg-3">{{ $data->alamat }}</td>
                                        <td class="p-lg-3">{{ $data->email }}</td>
                                        <td class="p-lg-3">{{ $data->password }}</td>
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

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    </div>
@endsection
