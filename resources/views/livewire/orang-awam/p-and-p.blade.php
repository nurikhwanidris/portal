<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Produk & Perkhidmatan</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- TAB STYLE 3 - START -->
    <div class="row">
        <div class="col">
            <div class="tabs tabs-bottom tabs-center tabs-simple">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                    <span class="box-content p-0 m-0">
                                        <i class="icon-map icons"></i>
                                    </span>
                                </span>
                            </span>
                            <p class="mb-0 pb-0" style="font-size: 10px;">PEMETAAN</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                    <span class="box-content p-0 m-0">
                                        <i class="icon-globe icons"></i>
                                    </span>
                                </span>
                            </span>
                            <p class="mb-0 pb-0" style="font-size: 10px;">KADASTER</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons3" data-bs-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                    <span class="box-content p-0 m-0">
                                        <i class="fas fa-globe-asia"></i>
                                    </span>
                                </span>
                            </span>
                            <p class="mb-0 pb-0" style="font-size: 10px;">GEODETIK</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons4" data-bs-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                    <span class="box-content p-0 m-0">
                                        <i class="fas fa-satellite"></i>
                                    </span>
                                </span>
                            </span>
                            <p class="mb-0 pb-0" style="font-size: 10px;">PERKHIDMATAN GEODETIK</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#tabsNavigationSimpleIcons5" data-bs-toggle="tab">
                            <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                    <span class="box-content p-0 m-0">
                                        <i class="  fas fa-laptop"></i>
                                    </span>
                                </span>
                            </span>
                            <p class="mb-0 pb-0" style="font-size: 10px;">PERMOHONAN DALAM TALIAN</p>
                        </a>
                    </li> --}}
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                        <div>
                            <!-- Pemetaan - START -->
                            @livewire('orang-awam.p-p.pemetaan')
                            <!-- Pemetaan - END -->
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                        <div>
                            <!-- kadaster - START -->
                            @livewire('orang-awam.p-p.kadaster')
                            <!-- kadaster - END -->
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                        <div>
                            <!-- geodetik - START -->
                            @livewire('orang-awam.p-p.geodetik')
                            <!-- geodetik - END -->
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                        <div>
                            <!-- geoservice - START -->
                            @livewire('orang-awam.p-p.geoservice')
                            <!-- geoservice - END -->
                        </div>
                    </div>
                    <div class="tab-pane" id="tabsNavigationSimpleIcons5">
                        <div>
                            <!-- online - START -->
                            @livewire('orang-awam.p-p.online')
                            <!-- online - END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TAB STYLE 3 - END -->
</div>
