@extends('layouts.main2')


@section('container')
    <div class="background"></div>
    <div class="card mx-auto">
        <img class="logo" src="{{ '/assets/img/login.png' }}" />
        <h2>Login Account</h2>
        <form class="form" method="POST" action="/login">
            @csrf
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit">Login</button>
        </form>
        <footer>
            Belum punya Account? Daftar
            <a href="/register">disini</a>
        </footer>
    </div>
    @error('email')
        {{ 'tes' }}
    @enderror
    @error('password')
        {{ 'pass' }}
    @enderror
@endsection
