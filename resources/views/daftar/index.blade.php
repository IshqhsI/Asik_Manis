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
                                <li class="breadcrumb-item active">Daftar</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                {{-- Tabel Jabatan Kerja --}}
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Jabatan Kerja</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama Jabatan</th>
                                                    <th scope="col">Nama Jenjang</th>
                                                    <th scope="col">Nama Pendidikan</th>
                                                    <th scope="col">Aksi</th>
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
                                                        <td><a href="/daftar/hapus/{{ $all->id }}"
                                                                class="btn btn-danger m-0">Hapus</a></td>
                                                    </tr>

                                                    <?php $i++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- Button trigger modal -->


                                    </div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalCheckbox">
                                        Tambah Jabatan Kerja
                                    </button>

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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi Pribadi</h3>
                                </div>
                                <form action="/daftar" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama" class="">Nama </label>
                                                    <input type="text" name="nama" id="nama"
                                                        placeholder="Masukkan Nama"
                                                        class="form-control @error('nama') is-invalid @enderror"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat" class="">Alamat & Kode Pos
                                                    </label>
                                                    <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat"
                                                        class="form-control @error('alamat') is-invalid @enderror"> {{ old('alamat') }}  </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email :</label>
                                                    <input type="email" name="email" id="email"
                                                        placeholder="Masukkan Email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ Auth::user()->email }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password :</label>
                                                    <input type="text" name="password" id="password"
                                                        placeholder="Masukkan Password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nohp">No HP/WA(AKTIF) :</label>
                                                    <input type="number" name="nohp" id="nohp"
                                                        placeholder="Masukkan No HP/WA"
                                                        class="form-control @error('nohp') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="referensi_kerja">Referensi Kerja</label>
                                                    {{-- <p class="">*Upload PDF</p> --}}
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input  @error('referensi_kerja') is-invalid @enderror"
                                                                id="referensi_kerja" accept=".pdf" name="referensi_kerja">
                                                            <label class="custom-file-label" for="referensi_kerja">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ijazah">Ijazah</label>
                                                    {{-- <p class="">*Upload PDF</p> --}}
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input  @error('ijazah') is-invalid @enderror"
                                                                id="ijazah" accept=".pdf" name="ijazah">
                                                            <label class="custom-file-label" for="ijazah">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ktp">KTP</label>
                                                    {{-- <p class="">*Upload PDF</p> --}}
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input  @error('ktp') is-invalid @enderror"
                                                                id="ktp" accept=".pdf" name="ktp">
                                                            <label class="custom-file-label" for="ktp">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="npwp">NPWP</label>
                                                    {{-- <p class="">*Upload PDF</p> --}}
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input  @error('npwp') is-invalid @enderror"
                                                                id="npwp" accept=".pdf" name="npwp">
                                                            <label class="custom-file-label" for="npwp">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pasphoto">Pasphoto </label>
                                                    {{-- <p class="">*Upload Image</p> --}}
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file"
                                                                class="custom-file-input  @error('pasphoto') is-invalid @enderror"
                                                                id="pasphoto"
                                                                accept=".png, .jpg, .PNG, .JPG, .JPEG, .jpeg"
                                                                name="pasphoto">
                                                            <label class="custom-file-label" for="pasphoto">Pilih
                                                                File</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Upload</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-primary d-block" data-toggle="modal"
                                            style="opacity: 0" data-target="#modalCheckbox">
                                            Tambah Jabatan Kerja
                                        </button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

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
@endsection


@include('layouts.partials.modaljabker')
