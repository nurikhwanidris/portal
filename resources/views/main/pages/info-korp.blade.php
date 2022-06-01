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

    {{-- Livewire --}}
    @livewireStyles
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header-inner')
        <!-- Header - Logo + Icons 4 + Search - END -->

        <div role="main" class="main">

            <!-- Title Section - START -->
            {{-- @include('main.layouts.partials.page-title') --}}
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->


            <div class="container" style="margin-bottom: 100px;">
                <div class="row">
                    <!-- Icon Row - START -->
                    <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6"></div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="/visi-misi"><i class="icon-featured far fa-file-alt"></i></a>
                                        <h4 class="font-weight-normal text-5 mt-3">{{__('message.intro_jupem')}}</h4>
                                        <p class="mb-2 mt-2 text-2">{{__('message.info_korp_visi')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="/tugas-peranan">
                                            <i class="icon-featured far fa-edit"></i>
                                        </a>
                                        <h4 class="font-weight-normal text-5 mt-3">{{__('message.info_korp_objectives')}}</h4>
                                        <p class="mb-2 mt-2 text-2">{{__('message.info_korp_objectives2')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6"></div>
                        </div>
                    </div>
                    <!-- Icon Row - END-->
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <aside class="sidebar">
                            <!-- Tab Sub - START -->
                            <div class="tabs tabs-vertical tabs-right tabs-navigation tabs-navigation-simple">
                                <ul class="nav nav-tabs col-sm-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-bs-toggle="tab" id="tab1">{{__('message.JUPEM Information')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-bs-toggle="tab" id="tab2">{{__('message.Organization Structure')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-bs-toggle="tab" id="tab3">{{__('message.Contact Us')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-4" data-bs-toggle="tab" id="tab4">{{__('message.Subject Matter Expertise')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tab Sub - END -->
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-pane tab-pane-navigation active" id="tab-1">
                            @livewire('info-korp.info-korp-mengenai')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-2">
                            @livewire('info-korp.info-korp-struktur-org')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-3">
                            @livewire('info-korp.info-korp-hubungi')
                        </div>
                        <div class="tab-pane tab-pane-navigation" id="tab-4">
                            @livewire('info-korp.info-korp-sme')
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

@livewireScripts

</html>
