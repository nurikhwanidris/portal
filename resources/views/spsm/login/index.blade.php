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
    <link rel="stylesheet" href="/jupem/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/jupem/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        {{-- Success alert --}}
        @if (session()->has('success'))
            <div class="alert alert-secondary" role="alert">
                <div class="text-center">
                    {{ session('success') }}
                </div>
            </div>
        @endif

        {{-- Error alert --}}
        @if (session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                <div class="text-center">
                    {{ session('loginError') }}
                </div>
            </div>
        @endif
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../spsm/login" class="h1"><b>SPSM </b>v2</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Log masuk untuk memulakan sesi anda</p>

                <form action="/spsm/login" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Email..."
                            value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Kata laluan">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <a href="/spsm/sso" class="btn btn-block btn-secondary">
                                <i class="fas fa-key mr-2"></i> Single Sign On
                            </a>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Log Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->
                <p class="mx-auto mt-2 mb-0 text-center">
                    <a href="#">Lupa kata laluan</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/jupem/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/jupem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="/jupem/js/adminlte.js"></script>
</body>

</html>
