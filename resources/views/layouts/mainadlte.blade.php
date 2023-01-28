<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <title>{{ $title }}</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('app_style/dist/css/adminlte.min.css') }}">
    {{-- SweetALert --}}
    <link rel="stylesheet" href="{{ asset('app_style/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    {{-- iCheck Style --}}
    <link rel="stylesheet" href="{{ asset('app_style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Datatables style -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('app_style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- index css -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('app_style/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('app_style/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_style/plugins/daterangepicker/dater') }}angepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('app_style/plugins/summernote/summernote') }}-bs4.min.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    @yield('container')







    {{-- @if (@session()->has('reg')) {{!!
        <script>
            Swal.fire(
            "Welcome ",
            "Silahkan Daftar",
            "success"
            )
        </script> !!}}
    @endif --}}



    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('app_style/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('app_style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('app_style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('app_style/dist/js/adminlte.js') }}"></script>
    {{-- SweetAlert --}}
    <script src="{{ asset('app_style/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('app_style/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('app_style/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('app_style/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Datatables script -->
    <script src="{{ asset('app_style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app_style/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    {{-- Input --}}
    <script src="{{ asset('app_style/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    {{-- Script Me --}}
    <script src="{{ asset('js/adlte-cb.js') }}"></script>
    <script src="{{ asset('js/adlte-reg.js') }}"></script>
    <script src="{{ asset('js/adlte-edit.js') }}"></script>


    <script>
        $(function() {
            bsCustomFileInput.init();
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    @if (Session::has('daftar'))
        <script>
            Swal.fire(
                'Daftar Sukses',
                '',
                'success'
            )
        </script>
    @endif
    @if (Session::has('addJabatan'))
        <script>
            Swal.fire(
                'Tambah Jabatan Kerja Berhasil',
                '',
                'success'
            )
        </script>
    @endif
    @if (Session::has('edit'))
        <script>
            Swal.fire(
                'Edit Data Berhasil',
                '',
                'success'
            )
        </script>
    @endif
</body>

</html>
