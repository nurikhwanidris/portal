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
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-bs-toggle="tab">Maklumat
                                            Kakitangan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-bs-toggle="tab">Dasar & Garis
                                            Panduan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-bs-toggle="tab">Aktiviti Jabatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4" data-bs-toggle="tab">Sistem Dalaman</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-5" data-bs-toggle="tab">Repositori Dokumen</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-6" data-bs-toggle="tab">Anugerah Pencapaian</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab Sub - END -->
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-pane tab-pane-navigation active" id="tab-1">
                            @livewire('warga-jupem.maklumat-kakitangan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-2">
                            @livewire('warga-jupem.dasar-garis-panduan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-3">
                            @livewire('warga-jupem.aktiviti-jabatan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-4">
                            @livewire('warga-jupem.sistem-dalaman')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-5">
                            @livewire('warga-jupem.repositori-dokumen')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-6">
                            @livewire('info-korp.mengenai-anugerah')
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
