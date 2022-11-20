<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styleg.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/stylelog.css') }}">

</head>

<body class="">

    <div class="container" style="margin-top: -2rem">
        @yield('container')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js"></script>

    @if (Session::has('loginError'))
        <script>
            Swal.fire(
                'Login Gagal',
                '',
                'error'
            )
        </script>
    @endif
    @if (Session::has('reg'))
        <script>
            Swal.fire(
                'Register Berhasil',
                'Silahkan Login',
                'success'
            )
        </script>
    @endif
    @error('email')
        <script>
            Swal.fire(
                'Email Tidak Valid,
                '',
                'error'
            );
        </script>
    @enderror

    @error('name')
        <script>
            Swal.fire(
                'Name Error',
                '',
                'error'
                // 'success'
            );
        </script>
    @enderror
    @error('email')
        <script>
            Swal.fire(
                'Email Tidak Valid,
                '',
                'error'
            );
        </script>
    @enderror
</body>
<html>
