@extends('layouts.main')

@section('container')
    <div class="container-fluid">
        <div class="d-flex toggled" id="wrapper">
            @include('partials.sidebar')
            <div id="page-content-wrapper" bgcolor="black">
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
                                    <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}
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
                    <div class="main container mt-2">

                        <div class="register">
                            <div class="bg-primary text-light head">
                                <h3 class="fs-3 p-3">PENDAFTARAN ASIK MANIS</h3>
                            </div>
                            <div class="register-box">
                                <form action="/daftar" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h2 class="register-text">
                                        Jabatan Kerja
                                    </h2>

                                    <table class="table table-striped table-hover w-75 m-auto mt-5 align-middle">
                                        <thead>
                                            <tr class="border-dark">
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

                                    {{-- <div class="container d-flex justify-content-center px-0 mt-4 mb-3" style="width: 75%;">
                                        <a href="/daftar/jabatan" class="btn btn-primary"> Tambah Jabatan Kerja</a>
                                    </div> --}}
                                    <div class="container d-flex justify-content-center px-0 mt-4 mb-3" style="width: 75%;">
                                        <button type="button" class="btn btn-primary mx-auto" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Tambah Jabatan Kerja
                                        </button>
                                    </div>

                                    <hr class="mt-5">

                                    <h2 class="register-text">Informasi Pribadi</h2>

                                    <div class="nama">
                                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                        <div class="col-lg-5">
                                            <label for="nama" class="d-block info-name">Nama </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama"
                                                class="form-control  @error('nama') is-invalid @enderror info-pribadi"
                                                value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="alamat">
                                        <div class="col-lg-5">
                                            <label for="alamat" class="alamat-label">Alamat & Kode
                                                Pos
                                            </label>
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat"
                                                class="form-control  @error('alamat') is-invalid @enderror info-pribadi"> </textarea>
                                        </div>
                                    </div>
                                    <div class="account d-flex mt-4 row">
                                        <div class="col-lg-5 px-0">
                                            <label for="email">Email :</label>
                                            <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                                class="form-control  @error('email') is-invalid @enderror"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-lg-5 px-0 ms-auto">
                                            <label for="password">Password :</label>
                                            <input type="password" name="password" id="password"
                                                placeholder="Masukkan Password"
                                                class="form-control  @error('password') is-invalid @enderror">
                                        </div>
                                        <div class="nohp col-lg-12 mt-3 p-0">
                                            <label for="nohp">No HP/WA(AKTIF) :</label>
                                            <input type="number" name="nohp" id="nohp"
                                                placeholder="Masukkan No HP/WA"
                                                class="form-control wa  @error('nohp') is-invalid @enderror">
                                        </div>
                                    </div>

                                    <div class="account">
                                        <div class="referensi-kerja mt-3">
                                            <label for="referensi-kerja">Referensi Kerja :</label>
                                            <p class="">*Upload PDF</p>
                                            <input type="file" accept=".pdf" name="referensi_kerja"
                                                id="referensi-kerja"
                                                class="form-control @error('referensi_kerja') is-invalid @enderror">
                                            <a href="{{ asset('assets/contoh/refer.pdf') }}" target="blank"> Contoh </a>
                                        </div>

                                        <div class="ktp mt-3">
                                            <label for="ktp">KTP :</label>
                                            <p class="">*Upload PDF</p>
                                            <input type="file" accept=".pdf" name="ktp" id="ktp"
                                                class="form-control  @error('ktp') is-invalid @enderror"></p>
                                        </div>
                                        <div class="npwp mt-3">
                                            <label for="npwp">NPWP :</label>
                                            <p class="">*Upload PDF</p>
                                            <p><input type="file" accept=".pdf" name="npwp" id="npwp"
                                                    class="form-control @error('npwp') is-invalid @enderror"></p>
                                        </div>
                                        <div class="pasphoto mt-3">
                                            <label for="pasphoto">Pasphoto latar <span>merah</span> berukuran
                                                <span>3x4</span></label>
                                            <p class="">*Upload Image</p>
                                            <input type="file" accept=".png, .PNG, .jpg, .JPG, .JPEG" name="pasphoto"
                                                id="pasphoto"
                                                class="form-control  @error('pasphoto') is-invalid @enderror">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jabatan Kerja</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form action="/daftar/jabatan" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- @method('PUT') --}}

                    <div class="jenjang">
                        <div class="jabatan">
                            <input type="hidden" value="{{ Auth::user()->id }}">
                            <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                            <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                placeholder="Masukkan Jabatan Kerja" class="form-control mt-2">
                        </div>
                        <p class="mb-0 mt-2">
                            Jenjang
                        </p>

                        <div class="form-group">
                            @foreach ($jenjang as $jjg)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenjang"
                                        value="{{ $jjg->id }}" id="{{ $jjg->id }}">
                                    <label class="form-check-label"
                                        for="{{ $jjg->id }}">{{ $jjg->nama_jenjang }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pendidikan">
                        <p class="mb-0 mt-2">
                            Pendidikan
                        </p>
                        <div class="default">
                            <div class="form-group">
                                @foreach ($jenjang as $jenjang)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenjang-def"
                                            value="{{ $jenjang->nama_jenjang }}"
                                            id="{{ $jenjang->nama_jenjang }}-def">
                                        <label class="form-check-label" for="{{ $jenjang->nama_jenjang }}-def">
                                            {{ $jenjang->nama_jenjang }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="jenjang1">
                            <?php foreach ($pendidikan1 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="jenjang2">
                            <?php foreach ($pendidikan2 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="jenjang3">
                            <?php foreach ($pendidikan3 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="jenjang4">
                            <?php foreach ($pendidikan4 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="jenjang5">
                            <?php foreach ($pendidikan5 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="jenjang6">
                            <?php foreach ($pendidikan6 as $pen) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pendidikan"
                                    value="{{ $pen->id }}">
                                <label class="form-check-label">{{ $pen->nama_pendidikan }}</label>
                            </div>
                            <?php } ?>
                        </div>



                    </div>

                    <div class="pengalaman mt-3">
                        <label for="">Pengalaman :</label>

                        <p class="format">* Menggunakan Format PDF</p>
                        <input type="file" accept=".pdf" name="pengalaman" class="form-control">
                        <a href="{{ asset('assets/contoh/ketker.pdf') }}" target="blank"> Contoh </a>

                        <div class="<?= 'jenjang1-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman1 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="<?= 'jenjang2-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman2 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="<?= 'jenjang3-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman3 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="<?= 'jenjang4-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman4 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="<?= 'jenjang5-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman5 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="<?= 'jenjang6-pengalaman' ?>">
                            <ul class="list-group">
                                <?php foreach ($pengalaman6 as $pengalaman) : ?>
                                <li class="list-group-item">
                                    {{ $pengalaman->nama_pengalaman }}
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>



            </div>
            <div class="input-footer p-5 mx-auto">
                <button class="btn btn-primary" type="submit">Tambah Jabatan Kerja</button>
            </div>
            </form>
            </form>
        </div>
    </div>
</div>
