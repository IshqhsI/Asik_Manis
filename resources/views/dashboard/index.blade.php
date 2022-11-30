@extends('layouts.mainhome')
@section('container')
    <div class="d-flex toggled" id="wrapper">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>
            </nav>

            <section id="lp-text">
                <div class="gambarmob">
                    <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
                </div>
                <div class="home">
                    <h1>Selamat Datang <span>{{ Auth::user()->name }}</span></h1>
                    <p>Silahkan melakukan pendaftaran sertifikasi konstruksi Kabupaten Banjar</p>

                </div>
                <div class="gambar">
                    <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
                </div>
            </section>
            <div class="footer">
                <p>Copyright © 2022 ASIKMANIS. All Rights Reserved</p>
            </div>
        </div>
    </div>
@endsection
