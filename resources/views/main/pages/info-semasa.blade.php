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
                                        <a class="nav-link active" href="#tab-1"
                                            data-bs-toggle="tab">{{ __('message.Announcement') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2"
                                            data-bs-toggle="tab">{{ __('message.Latest News') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3"
                                            data-bs-toggle="tab">{{ __('message.Procurement Offer') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4"
                                            data-bs-toggle="tab">{{ __('message.Client Charter') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab Sub - END -->
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-pane tab-pane-navigation active" id="tab-1">
                            @livewire('info-semasa.pengumuman')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-2">
                            @livewire('info-semasa.sorotan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-3">
                            @livewire('info-semasa.tawaran-perolehan')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-4">
                            @livewire('info-semasa.piagam-pelanggan')
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
@livewireScripts()

</html>
