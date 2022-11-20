@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-flex" id="wrapper">
            @include('partials.sidebar')
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
                <div class="container-fluid">
                    <div class="main container mt-5">
                        <div class="bg-primary text-light head">
                            <h3 class="fs-3 p-3">PENDAFTARAN ASIK MANIS</h3>
                            <p class="fs-6 p-3 mb-0">APLIKASI SERTIFIKASI KONSTRUKSI MANIS</p>
                        </div>
                        <div class="register">
                            <div class="register-box">
                                <form action="/daftar" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="register-text">
                                        Jabatan Kerja
                                    </h2>

                                    <table class="table table-striped table-hover w-75 m-auto mt-5">
                                        <thead>
                                            <tr class="border-bottom border-dark">
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama Jabatan</th>
                                                <th scope="col">Nama Jenjang</th>
                                                <th scope="col">Nama Pendidikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach ($jenjangAll as $all)
                                                <tr>
                                                    <th scope="row"><?= $i ?></th>
                                                    <td>{{ $all->nama_jabatan }}</td>
                                                    <td>{{ $all->nama_jenjang }}</td>
                                                    <td>{{ $all->nama_pendidikan }}</td>
                                                </tr>

                                                <?php $i++; ?>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="container d-flex justify-content-center px-0 mt-4 mb-3" style="width: 75%;">
                                        <a href="/daftar/jabatan" class="btn btn-primary"> Tambah Jabatan Kerja</a>
                                    </div>

                                    <hr class="mt-5">

                                    <h2 class="register-text">Informasi Pribadi</h2>

                                    <div class="nama">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                        <div class="col-lg-5">
                                            <label for="nama" class=" d-flex align-items-start">Nama </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama"
                                                class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="alamat">
                                        <div class="col-lg-5">
                                            <label for="alamat" class=" d-flex align-items-start">Alamat & Kode Pos
                                            </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control"> </textarea>
                                        </div>
                                    </div>
                                    <div class="account d-flex mt-4 row">
                                        <div class="col-lg-5 px-0">
                                            <label for="email">Email :</label>
                                            <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                                class="form-control" value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-lg-5 px-0 ms-auto">
                                            <label for="password">Password :</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="Masukkan Password" class="form-control">
                                        </div>
                                        <div class="nohp col-lg-12 mt-3 p-0">
                                            <label for="nohp">No HP/WA(AKTIF) :</label>
                                            <input type="number" name="nohp" id="nohp"
                                                placeholder="Masukkan No HP/WA" class="form-control wa">
                                        </div>
                                    </div>

                                    <div class="account">
                                        <div class="referensi-kerja mt-3">
                                            <label for="referensi-kerja">Referensi Kerja :</label>
                                            <p class="">*Upload PDF</p>
                                            <input type="file" accept=".pdf" name="referensi_kerja"
                                                id="referensi-kerja" class="form-control">
                                        </div>

                                        <div class="ktp mt-3">
                                            <label for="ktp">KTP :</label>
                                            <p class="">*Upload Gambar</p>
                                            <input type="file" accept=".png, .jpg, .PNG, .jpeg, .JPEG" name="ktp"
                                                id="ktp" class="form-control"></p>
                                        </div>
                                        <div class="npwp mt-3">
                                            <label for="npwp">NPWP :</label>
                                            <p class="">*Upload Gambar</p>
                                            <p><input type="file" accept=".png, .jpg, .PNG, .jpeg, .JPEG"
                                                    name="npwp" id="npwp" class="form-control"></p>
                                        </div>
                                        <div class="pasphoto mt-3">
                                            <label for="pasphoto">Pasphoto latar <span>merah</span> berukuran <span>3x4 =
                                                    354 X
                                                    472
                                                    PX</span></label>
                                            <p class="">*Upload Gambar</p>
                                            <input type="file" accept=".png, .jpg, .PNG, .jpeg, .JPEG" name="pasphoto"
                                                id="pasphoto" class="form-control">
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="container d-flex justify-content-center mt-5 p-5 py-2"
                                        style="width: 80%;">
                                        <button type="submit" class="btn btn-primary w-50"> Kirim </button>
                                    </div>
                                </form>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
@endsection
