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

    {{-- Livewire style --}}
    @livewireStyles

    <!-- CSS & Script -->
    @include('main.layouts.partials.headerlink')
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header-inner')
        <!-- Header - Logo + Icons 4 + Search - END -->

        <div role="main" class="main">

            <!-- Title Section - START -->
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->

            <div class="container" style="margin-bottom: 100px;">
                <div class="row">
                    <div class="col-lg-3">
                        <aside class="sidebar">
                            <div class="tabs tabs-vertical tabs-left tabs-navigation">
                                <ul class="nav nav-tabs col-sm-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-bs-toggle="tab">Produk &
                                            Perkhidmatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-bs-toggle="tab">Penerbitan JUPEM</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-bs-toggle="tab">Tawaran Perolehan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4" data-bs-toggle="tab">Multimedia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-5" data-bs-toggle="tab">Transaksi Dalam
                                            Talian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-6" data-bs-toggle="tab">Data Terbuka</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-pane tab-pane-navigation active" id="tab-1">
                            @livewire('orang-awam.p-and-p')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-2">
                            @livewire('orang-awam.penerbitan-jupem')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-3">
                            @livewire('orang-awam.tawaran-perolehan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-4">
                            @livewire('orang-awam.multimedia')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-5">
                            @livewire('orang-awam.transaksi')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-6">
                            @livewire('orang-awam.data-terbuka-kerajaan')
                        </div>
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

{{-- Livewire script --}}
@livewireScripts

</html>
