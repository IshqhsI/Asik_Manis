@extends('layouts.main')
@section('container')
    <div class="d-flex" id="wrapper">
        @include('partials.sidebar')
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
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Total </h3>
                                <p class="fs-5">Total Pendaftar Akun</p>
                            </div>
                            <i class="fa-solid fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Data Pendaftar</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover text-center">
                            <thead>
                                <tr class="align-middle">
                                    <th scope="col" class="p-lg-3">#</th>
                                    <th scope="col" class="p-lg-3">Nama</th>
                                    <th scope="col" class="p-lg-3">Alamat</th>
                                    <th scope="col" class="p-lg-3">Email</th>
                                    <th scope="col" class="p-lg-3">Password</th>
                                    <th scope="col" class="p-lg-3">No Hp.</th>
                                    <th scope="col" class="p-lg-3">Jabatan Kerja</th>
                                    <th scope="col" class="p-lg-3">Jenjang</th>
                                    <th scope="col" class="p-lg-3">Pendidikan</th>
                                    <th scope="col" class="p-lg-3">Aksi</th>
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
@endsection
