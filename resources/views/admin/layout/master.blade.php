<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/highcharts/css/highcharts-white.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/fullcalendar/css/main.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datetimepicker/css/classic.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datetimepicker/css/classic.time.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/datetimepicker/css/classic.date.css') }}" rel="stylesheet" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css') }}">
    <!-- loader-->
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    {{-- <link rel="stylesheet" href="{{ asset("admin/assets/css/dark-theme.css") }}" />
	<link rel="stylesheet" href="{{ asset("admin/assets/css/semi-dark.css") }}" />
	<link rel="stylesheet" href="{{ asset("admin/assets/css/header-colors.css") }}" /> --}}
    <title>BrandBook Easy</title>
</head>

<body class="bg-theme bg-theme1">
    <div class="wrapper">

        @if (!View::hasSection('login'))
            @include('admin.layout.nav')
            @include('admin.layout.header')
        @endif

        <div id="app">
            @yield('content')
        </div>

        @if (!View::hasSection('login'))
            <div class="overlay toggle-icon"></div>
            <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <footer class="page-footer">
                <p class="mb-0">Copyright © <?php echo date('Y'); ?>. Todos los derechos
                    -
                    Creado por <a href="https://latagroup.cl" target="_blank">Lata Group</a></p>
            </footer>
        @endif

    </div>

    @if (!View::hasSection('login'))
        <div class="switcher-wrapper">
            <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
            </div>
            <div class="switcher-body">
                <div class="d-flex align-items-center">
                    <h5 class="mb-0 text-uppercase">Cambia el Estilo</h5>
                    <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
                </div>
                <hr />
                <p class="mb-0">Texturas</p>
                <hr>
                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>
                <hr>
                <p class="mb-0">Fondos</p>
                <hr>
                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                </ul>
            </div>
        </div>

        <!--end switcher-->
        <script src="{{ asset('/js/app.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/fullcalendar/js/main.min.js') }}"></script>
        <!-- Vector map JavaScript -->
        <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
        <!-- highcharts js -->
        <script src="{{ asset('admin/assets/plugins/highcharts/js/highcharts.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/index2.js') }}"></script>
        {{-- <script src="{{ asset('admin/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script> --}}
        <script src="{{ asset('admin/assets/plugins/datetimepicker/js/picker.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/datetimepicker/js/picker.time.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/datetimepicker/js/picker.date.js') }}"></script>
        <script src="{{ asset('admin/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js') }}">
        </script>
        <script
            src="{{ asset('admin/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js') }}">
        </script>
        {{-- <script>
            $(document).ready(function() {
                $('#image-uploadify').imageuploadify();
            })
        </script> --}}

        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });

        </script>
        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>
        <script>
            $('.datepicker').pickadate({
                monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                today: 'Fecha actual',
                clear: 'Limpiar',
                close: 'Cerrar',
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd',
                selectMonths: true,
                selectYears: true
            }),
            $('.timepicker').pickatime()
        </script>
        <script>
            $(function() {
                $('#date-time').bootstrapMaterialDatePicker({
                    format: 'YYYY-MM-DD HH:mm'
                });
                $('#date').bootstrapMaterialDatePicker({
                    time: false
                });
                $('#time').bootstrapMaterialDatePicker({
                    date: false,
                    format: 'HH:mm'
                });
            });

        </script>
        <!--app JS-->
        <script src="{{ asset('admin/assets/js/brand.js') }}"></script>
        <script src="{{ asset('admin/assets/js/app.js') }}"></script>
        <script>
            if ($('.dashboard-top-countries').length) {
                new PerfectScrollbar('.dashboard-top-countries');
            }
        </script>
        <script>
            $(document).ready(function() {
                $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                        $('#show_hide_password input').attr('type', 'password');
                        $('#show_hide_password i').addClass("bx-hide");
                        $('#show_hide_password i').removeClass("bx-show");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                        $('#show_hide_password input').attr('type', 'text');
                        $('#show_hide_password i').removeClass("bx-hide");
                        $('#show_hide_password i').addClass("bx-show");
                    }
                });
            });

        </script>
    @endif
</body>

</html>
