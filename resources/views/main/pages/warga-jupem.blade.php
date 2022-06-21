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
                            <!-- Tab Sub - START -->
                            <!-- <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple"> -->
                            <div class="tabs tabs-vertical tabs-left tabs-navigation">
                                <ul class="nav nav-tabs col-sm-3">
                                    {{-- <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-bs-toggle="tab">Kertas Kerja</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-bs-toggle="tab">Pertukaran
                                            Pegawai</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-bs-toggle="tab">Laporan
                                            Mesyuarat</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4" data-bs-toggle="tab">Inovasi Sektor
                                            Awam</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-5" data-bs-toggle="tab">Kertas
                                            Pembentangan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-6" data-bs-toggle="tab">Arkib Polisi,
                                            Belanjawan
                                            dan Dokumen Sah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7" data-bs-toggle="tab">Dokumen Persijilan
                                            & Pengiktirafan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-8" data-bs-toggle="tab">Garis Panduan
                                            Umum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-9" data-bs-toggle="tab">Dasar dan
                                            Pekeliling</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-10" data-bs-toggle="tab">Dokumen
                                            Jabatan</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="#tab-11" data-bs-toggle="tab">Muat Turun Borang
                                            JUPEM</a>
                                        <!-- Sama page Orang Awam > Muat Turun Borang Pemetaan -->
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" target="_blank" href="https://app.jupem.gov.my">Sistem
                                            Dalaman</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab Sub - END -->
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-pane tab-pane-navigation" id="tab-1">
                            @livewire('warga-jupem.kertas-kerja')
                        </div>
                        <div class="tab-pane tab-pane-navigation active" id="tab-2">
                            @livewire('warga-jupem.pertukaran-pegawai')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-3">
                            @livewire('warga-jupem.laporan-mesyuarat')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-4">
                            @livewire('warga-jupem.inovasi')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-5">
                            @livewire('warga-jupem.kertas-pembentangan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-6">
                            @livewire('warga-jupem.dokumen-sah')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-7">
                            @livewire('warga-jupem.pensijilan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-8">
                            @livewire('warga-jupem.garis-panduan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-9">
                            @livewire('warga-jupem.dasar-pekeliling')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-10">
                            {{-- @livewire('warga-jupem.dokumen-jabatan') --}}
                            {{-- sama dengan orang awam > muat-turun --}}
                            @livewire('orang-awam.muat-turun')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-12">
                            @livewire('warga-jupem.sistem-dalaman')
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

</html>
