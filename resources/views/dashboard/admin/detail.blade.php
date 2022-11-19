@extends('layouts.main')
@section('container')
    <div class="container-fluid p-md-0 p-sm-0">
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
                <div class="container-fluid p-0">
                    <!-- Page Container -->
                    <div class="w3-content w3-margin-top" style="max-width:1400px;">
                        <!-- The Grid -->
                        <div class="w3-row-padding">
                            <!-- Left Column -->
                            <div class="w3-third">
                                <div class="w3-white w3-text-grey w3-card-4 w3-animate-top">
                                    <div class="w3-display-container">
                                        <img src="{{ asset('storage/' . $one->pasphoto) }}" style="width:100%"
                                            alt="Avatar">
                                        <div class="w3-display-bottomleft w3-container w3-text-black">
                                            <h2 style="background-color:white;padding:8px;"> {{ $one->nama }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="w3-container">
                                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal mt-4"></i>
                                            {{ $one->alamat }} </p>
                                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->email }}
                                        </p>
                                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->nohp }}
                                        </p>
                                        <p><i class="fas fa-lock  w3-margin-right w3-large w3-text-teal"></i>
                                            {{ $one->password }}
                                        </p>
                                        <br>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b> KTP </b></h5>
                                        <h6 class="w3-text-teal">
                                            <img src="{{ asset('storage/' . $one->ktp) }}" class="w-100"></img>
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b>NPWP</b></h5>
                                        <h6 class="w3-text-teal">
                                            <img src="{{ asset('storage/' . $one->npwp) }}" class="w-100"></img>
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="w3-container">
                                        <h5 class="w3-opacity"><b>Referensi Kerja</b></h5>
                                        <h6 class="w3-text-teal">
                                            <img src="{{ asset('storage/' . $one->referensi_kerja) }}" class="w-100"></img>
                                        </h6>
                                        <hr>
                                    </div>
                                </div>
                                <!-- /#page-content-wrapper -->
                            </div>
                            <!-- End Left Column -->

                            <!-- Right Column -->
                            <div class="w3-twothird">
                                <div class="w3-container w3-card w3-white w3-margin-bottom w3-animate-right">
                                    <h2 class="w3-text-grey w3-padding-16"><i
                                            class="fas fa-school fas-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Jabatan
                                        Kerja
                                    </h2>

                                    <div class="w3-container">
                                        <ul class="w3-ul ms-4">
                                            @foreach ($jabatan as $jbt)
                                                <hr>
                                                <div class="list">
                                                    <h6>
                                                        Jabatan
                                                    </h6>
                                                    <li class="list-group-item p-1 mb-3"> {{ $jbt->nama_jabatan }} </li>

                                                </div>

                                                <div class="list">

                                                    <h6>
                                                        Jenjang
                                                    </h6>
                                                    <li class="list-group-item p-1 mb-3"> {{ $jbt->nama_jenjang }}</li>
                                                </div>

                                                <div class="list">
                                                    <h6>
                                                        Pendidikan
                                                    </h6>
                                                    <li class="list-group-item p-1 mb-3"> {{ $jbt->nama_pendidikan }}
                                                    </li>
                                                </div>

                                                <div class="list">
                                                    <h6>
                                                        Pengalaman
                                                    </h6>
                                                    <li class="list-group-item p-1 mb-3">
                                                        <a href="{{ asset('storage/public/assets/pengalaman/' . $jbt->pengalaman) }}"
                                                            class="btn btn-warning"
                                                            download="pengalaman/{{ $one->nama }}">
                                                            Download
                                                        </a>
                                                    </li>
                                                </div>
                                            @endforeach()
                                        </ul>
                                    </div>

                                </div>

                            </div>
                            <!-- End Right Column -->
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Page Container -->
            </div>
        </div>


    </div>
@endsection
