<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPSM | {{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/spsm/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/spsm/css/adminlte.min.css">
    <!-- CKeditor 5 -->
    <script src="/spsm/js/ckeditor/ckeditor.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/spsm/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/spsm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/spsm/js/adminlte.js"></script>
    <!-- Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- Navbar starts here --}}
        @include('spsm.layouts.partials.navbar')

        {{-- Sidebar starts here --}}
        @include('spsm.layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ $title }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/spsm">Utama</a></li>
                                @if ($leadCrumbs !='')
                                <li class="breadcrumb-item"><a href="/spsm/{{ $link }}">{{ $leadCrumbs }}</a></li>
                                @endif
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content mx-2">
                @yield('content')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-{{ date('Y') }} <a href="https://jupem.gov.my">JUPEM | SPSM</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.1
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- OPTIONAL SCRIPTS -->
    <script src="/spsm/plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/spsm/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/spsm/js/pages/dashboard3.js"></script>

    {{-- Datatable --}}
    <!-- DataTables  & Plugins -->
    <script src="/spsm/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/spsm/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/spsm/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/spsm/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/spsm/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/spsm/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/spsm/plugins/jszip/jszip.min.js"></script>
    <script src="/spsm/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/spsm/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/spsm/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/spsm/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/spsm/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $(".table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "ordering": false,
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        // Image Preview
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
</body>

</html>
