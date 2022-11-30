@extends('layouts.main')
@section('container')
    @if ($one->pasphoto == null)
        {{ 'tes' }}
    @endif
    <div class="container-fluid">
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
                <div class="register-box">
                    <form action="/dashboard/admin/edit/{{ $one->id }}" method="post">
                        @csrf

                        <hr class="mt-5">

                        <h2 class="register-text"> Edit Data </h2>

                        <div class="nama">
                            <div class="col-lg-5">
                                <label for="nama" class=" d-flex align-items-start">Nama </label>
                            </div>
                            <div class="col-lg-7">
                                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama"
                                    class="form-control" value="{{ $one->nama }}">
                            </div>
                        </div>
                        <div class="alamat">
                            <div class="col-lg-5">
                                <label for="alamat" class=" d-flex align-items-start">Alamat & Kode Pos </label>
                            </div>
                            <div class="col-lg-7">
                                <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control"> {{ $one->alamat }} </textarea>
                            </div>
                        </div>
                        <div class="account d-flex mt-4 row">
                            <div class="col-lg-5 px-0">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                    class="form-control" value="{{ $one->email }}">
                            </div>
                            <div class="col-lg-5 px-0 ms-auto">
                                <label for="password">Password :</label>
                                <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                    class="form-control" value="{{ $one->password }}">
                            </div>
                            <div class="nohp col-lg-12 mt-3 p-0">
                                <label for="nohp">No HP/WA(AKTIF) :</label>
                                <input type="number" name="nohp" id="nohp" placeholder="Masukkan No HP/WA"
                                    class="form-control wa" value="{{ $one->nohp }}">
                            </div>
                        </div>
                        <div class="jenjang m-auto mt-1" style="width: 80%;">
                            <div class="jabatan">
                                <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                                <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                    placeholder="Masukkan Jabatan Kerja" class="form-control mt-2"
                                    value="{{ $one->nama_jabatan }}">
                            </div>

                            <div class="jenjang">
                                <label for="jenjang" class="d-block mt-2"> Jenjang </label>
                                <input type="text" name="jenjang" id="jenjang" placeholder="Masukkan Jenjang"
                                    class="form-control mt-2" value="{{ $one->nama_jenjang }}">
                            </div>

                            <div class="pendidikan">
                                <label for="pendidikan" class="d-block mt-2"> Pendidikan </label>
                                <input type="text" name="pendidikan" id="pendidikan"
                                    placeholder="Masukkan Pendidikan" class="form-control mt-2"
                                    value="{{ $one->nama_pendidikan }}">
                            </div>
                            <input type="hidden" value="{{ $one->id }}" name="id">
                            <input type="hidden" value="{{ $one->id_user }}" name="id_user">

                        </div>
                </div>

                <hr>

                <div class="container d-flex justify-content-center mt-5 p-5 py-2" style="width: 80%;">
                    <button type="submit" class="btn btn-primary w-50"> Kirim </button>
                </div>
                </form>
                <!-- End Page Container -->
            </div>
        </div>


    </div>
@endsection
