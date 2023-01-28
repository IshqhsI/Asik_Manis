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
        <footer class="main-footer" style="z-index: 1">
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

<!-- Modal Checkbox-->
<div class="modal fade" id="modalCheckbox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="/dashboard/profil/jabatan" method="post" enctype="multipart/form-data">
                    @csrf

                    {{-- @method('PUT') --}}
                    <input type="hidden" name="nama" id="nama" class="form-control"
                        value="{{ $one->nama }}">

                    <input type="hidden" name="alamat" id="alamat"
                        class="form-control @error('alamat') is-invalid @enderror" value="{{ $one->alamat }}">

                    <input type="hidden" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ $one->email }}"
                        readonly>

                    <input type="hidden" name="password" id="password" class="form-control"
                        value="{{ $one->password }}">

                    <input type="hidden" name="nohp" id="nohp" class="form-control"
                        value="{{ $one->nohp }}">

                    <input type="hidden" class="custom-file-input" value="{{ $referensi_kerja }}"
                        id="referensi_kerja" accept=".pdf" name="referensi_kerja">

                    <input type="hidden" class="custom-file-input" id="ijazah" accept=".pdf" name="ijazah"
                        value="{{ $ijazah }}">

                    <input type="hidden" class="custom-file-input" id="ktp" accept=".pdf" name="ktp"
                        value="{{ $ktp }}">

                    <input type="hidden" class="custom-file-input" id="npwp" accept=".pdf" name="npwp"
                        value="{{ $npwp }}">

                    <input type="hidden" class="custom-file-input" id="pasphoto"
                        accept=".png, .jpg, .PNG, .JPG, .JPEG, .jpeg" name="pasphoto" value="{{ $pasphoto }}">

                    <div class="jenjang">
                        <div class="jabatan mb-3">
                            <input type="hidden" value="{{ Auth::user()->id }}">
                            <label for="jabatan-kerja" class="d-block">Jabatan Kerja </label>
                            <input type="text" name="jabatan_kerja" id="jabatan-kerja"
                                placeholder="Masukkan Jabatan Kerja" class="form-control mt-2">
                        </div>
                        <label>Jenjang</label>
                        <div class="form-group row mx-auto ">
                            {{-- <div class="d-grid"> --}}
                            @foreach ($jenjang as $jjg)
                                <div class="custom-control custom-radio col-4">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        name="jenjang" value="{{ $jjg->id }}" id="{{ $jjg->id }}">
                                    <label class="custom-control-label"
                                        for="{{ $jjg->id }}">{{ $jjg->nama_jenjang }}</label>
                                </div>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="pendidikan">

                        <div class="default">
                            <label>Pendidikan</label>
                            @foreach ($jenjang as $jenjang)
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $jenjang->id }}-def" name="pendidikan"
                                        value="{{ $jenjang->nama_jenjang }}">
                                    <label for="{{ $jenjang->id }}-def"
                                        class="custom-control-label">{{ $jenjang->nama_jenjang }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group mt-2">

                            <div class="jenjang1">
                                <label>Pendidikan</label>
                                @foreach ($pendidikan1 as $pen)
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input custom-control-input-primary"
                                            type="radio" id="{{ $pen->nama_pendidikan }}1" name="pendidikan"
                                            value="{{ $pen->id }}">
                                        <label for="{{ $pen->nama_pendidikan }}1"
                                            class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="jenjang2">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan2 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}2" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}2"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang3">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan3 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}3" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}3"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang4">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan4 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}4" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}4"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang5">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan5 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}5" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}5"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="jenjang6">
                                <label>Pendidikan</label>
                                <?php foreach ($pendidikan6 as $pen) { ?>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input custom-control-input-primary" type="radio"
                                        id="{{ $pen->nama_pendidikan }}6" name="pendidikan"
                                        value="{{ $pen->id }}">
                                    <label for="{{ $pen->nama_pendidikan }}6"
                                        class="custom-control-label">{{ $pen->nama_pendidikan }}</label>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    {{-- Pengalaman --}}
                    <div class="form-group">
                        <label for="exampleInputFile">Pengalaman</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="pengalaman" accept=".pdf"
                                    name="pengalaman">
                                <label class="custom-file-label" for="pengalaman">Pilih File</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                    {{-- Pengalaman - Min --}}
                    <div class="jenjang1-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman1 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="jenjang2-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman2 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="jenjang3-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman3 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="jenjang4-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman4 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="jenjang5-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman5 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="jenjang6-pengalaman">
                        <ul class="list-group">
                            <?php foreach ($pengalaman6 as $pengalaman) : ?>
                            <li class="list-group-item">
                                {{ $pengalaman->nama_pengalaman }}
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>



                    <div class="input-footer py-5 mx-auto">
                        <button class="btn btn-primary" type="submit">Tambah Jabatan Kerja</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
