@extends('layouts.main2')


@section('container')
    <div class="background"></div>
    <div class="card mx-auto">
        <img class="logo" src="/assets/img/register.png" />
        <h2>Daftar Account</h2>
        <form class="form" method="POST" action="/register">
            @csrf
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
            <input type="text" placeholder="Email" name="email" value="{{ old('email') }}">
            <input type="password" placeholder="Password" name="password" />
            <button type="submit">Daftar</button>
        </form>
        <footer>
            Sudah punya Account? Login
            <a href="/login">disini</a>
        </footer>


    </div>
@endsection
