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
                                <li class="breadcrumb-item"><a href="/dashboard/admin">Admin</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data</h3>
                                </div>
                                <form action="/dashboard/admin/edit/{{ $one->id }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nama" class="">Nama </label>
                                                    <input type="text" name="nama" id="nama"
                                                        placeholder="Masukkan Nama" class="form-control"
                                                        value="{{ $one->nama }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat" class="">Alamat & Kode Pos
                                                    </label>
                                                    <textarea type="textarea" name="alamat" id="alamat" placeholder="Masukkan Alamat" class="form-control"> {{ $one->alamat }} </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email :</label>
                                                    <input type="email" name="email" id="email"
                                                        placeholder="Masukkan Email" class="form-control"
                                                        value="{{ $one->email }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password :</label>
                                                    <input type="password" name="password" id="password"
                                                        placeholder="Masukkan Password" class="form-control"
                                                        value="{{ $one->password }}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nohp">No HP/WA(AKTIF) :</label>
                                                    <input type="number" name="nohp" id="nohp"
                                                        placeholder="Masukkan No HP/WA" class="form-control wa"
                                                        value="{{ $one->nohp }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                                                    <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                                        placeholder="Masukkan Jabatan Kerja" class="form-control mt-2"
                                                        value="{{ $one->nama_jabatan }}">
                                                </div>
                                                <div class="form-group mt-2">
                                                    <label>Jenjang</label>
                                                    <select name="jenjang" id="jenjang" class="form-control select2">
                                                        <option value="{{ $one->nama_jenjang }}" class="default" selected>
                                                            {{ $one->nama_jenjang }}</option>
                                                        @foreach ($jenjang as $jjg)
                                                            <option value="{{ $jjg->id }}">Jenjang
                                                                {{ $jjg->id }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="pendidikan">
                                                    <div class="">
                                                        <div class="form-group mt-2">
                                                            <label for="pendidikan">Pendidikan</label>
                                                            <select name="pendidikan" class="form-control select2"
                                                                id="pendidikan">
                                                                {{-- <option>..</option> --}}
                                                                <option selected class="default">
                                                                    {{ $one->nama_pendidikan }} </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="{{ $one->id }}" name="id">
                                                <input type="hidden" value="{{ $one->id_user }}" name="id_user">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
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
