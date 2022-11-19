@extends('layouts.main')


@section('container')
    <section class="container text-center box-size-a">
        <div class="row">
            <div class="col">
                <img src="/assets/img/{{ $linkgambarlogin }}" alt="login">
                <h2><a href="/login">Login Admin</a></h2>
            </div>
            <div class="col ">
                <img src="/assets/img/{{ $linkgambarreg }}" alt="register">
                <h2><a href="/login">Login User</a></h2>
            </div>
        </div>
    </section>
@endsection
