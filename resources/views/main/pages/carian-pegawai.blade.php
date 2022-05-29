<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Laman Web Rasmi JUPEM</title>
    <meta name="keywords" content="Laman Web Rasmi JUPEM" />
    <meta name="description" content="Laman Web Rasmi JUPEM">
    <meta name="author" content="JUPEM">

    <!-- CSS & Script -->
    @include('main.layouts.partials.headerlink')
    @livewireStyles
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header-inner')
        <!-- Header - Logo + Icons 4 + Search - aaEND -->

        <div role="main" class="main">
            <!-- Title Section - START -->
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->

            <div class="container" style="margin-bottom: 100px;">
                {{-- Alert --}}
                @if (session()->has('success'))
                    <div class="row">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <!-- PAGE TITLE - END-->
                <div role="main" class="main">
                    <div class="row">
                        <div style="margin-top: 10px;">
                            Nama Pegawai
                            <form role="search" action="{{ route('carian-pegawai') }}" method="get">
                                <div class="input-group rounded">
                                    <input type="search" class="form-control rounded form-control-md" name="nama"
                                        placeholder="Sila taip nama pegawai" aria-label="Search"
                                        aria-describedby="search-addon" value="{{ $search }}" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div style="margin-top: 10px margin-bottom: 0 !important" class="mt-5">
                            <p class="fs-3">Hasil carian bagi <strong
                                    class="fw-bold text-dark">"{{ $search }}"</strong></p>
                        </div>
                    </div>
                    <div class="row pb-0 pt-3 mb-5">
                        @if (count($pegawais) > 0)
                            @foreach ($pegawais as $pegawai)
                                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset('storage/upload/img/pegawai/' . $pegawai['photo']) }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <span class="thumb-info-caption">
                                            <ul class="list list-icons list-icons-style-2 list-icons-sm mt-2  ul-kite">
                                                <h4 class="font-weight-bold mb-2 size-text-standard">
                                                    {{ $loop->iteration }}.
                                                    {{ $pegawai['name_my'] }}</h4>
                                                </h4>
                                                <h2 class="font-weight-bold mb-0 pt-0 mt-0 size-text-standard-2">
                                                    {{ $pegawai['jawatan_my'] }}
                                                </h2>
                                                <li class="li-kite">
                                                    <i class="fas fa-envelope top-6"></i>
                                                    <strong>Email:</strong><br>
                                                    <a
                                                        href="mailto:{{ $pegawai['email'] }}">{{ $pegawai['email'] }}</a>
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-phone top-6"></i>
                                                    <strong>Tel:</strong><br>
                                                    {{ $pegawai['phone_no'] }}
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-fax top-6"></i>
                                                    <strong>Faks:</strong><br>
                                                    {{ $pegawai['fax_no'] }}
                                                </li>
                                            </ul>
                                        </span>
                                    </span>
                                </div>
                            @endforeach
                            <div class="row my-4">
                                {!! $pegawais->appends(request()->query())->links() !!}
                            </div>
                        @else
                            <div class="col-sm-6 col-lg-4">
                                <p class="text-danger">Tiada rekod yang dijumpai</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer - START -->
        @include('main.layouts.partials.footer')
        <!-- Footer - END -->

    </div>

    <!-- Vendor -->
    @include('main.layouts.partials.scripts')

</body>

</html>
