@extends('layouts.mainhome')


@section('container')
    {{-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> --}}
    <!-- <header id="lp-header"> -->
    <div class="container-fluid lp-header">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                {{-- <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-logo"> --}}
                <a class="navbar-brand asikmanis" href="#">ASIK MANIS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" href="#">Tutorial</a>
                        <a class="nav-link btn-nav" href="/login">Login/Daftar</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section id="lp-text">
        <div class="gambarmob">
            <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
        </div>
        <div class="home">
            <h1>Selamat Datang di<span> Web/App Asik Manis</span></h1>
            <p>Aplikasi Sertifikasi Konstruksi Kabupaten Banjar, jika anda sudah memiliki account silahkan login & jika
                anda belum meiliki account silahkan daftar, pada tombol di bawah ini ! </p>

            <a class="btn btn-alt" href="/login">Login Account</a>
            <a class="btn" href="/register">Daftar Account</a>

        </div>
        <div class="gambar">
            <img src="{{ asset('assets/img/landing.png') }}" alt="Landing Image">
        </div>
    </section>
    <div class="footer">
        <p>Copyright © 2022 ASIKMANIS. All Rights Reserved</p>
    </div>
@endsection
