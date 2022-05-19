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
                <!-- PAGE TITLE - START-->
                {{-- <div class="row">
                        <div class="col">
                            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Soalan Lazim</div>
                        </div>
                    </div> --}}
                <!-- PAGE TITLE - END-->
                <!-- TAB STYLE 3 - START -->
                <div class="row">
                    <div class="col">
                        {{-- <div class="tabs tabs-bottom tabs-center tabs-simple"> --}}
                        <div class="tabs tabs-bottom tabs-center tabs-simple">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
                                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                            <span
                                                class="featured-box featured-box-quaternary featured-box-effect-3 p-0 m-0">
                                                <span class="box-content p-0 m-0">
                                                    <i class="icon-featured icon-directions icons"></i>
                                                    {{-- <i class="fa-solid fa-signs-post"></i> --}}
                                                </span>
                                            </span>
                                        </span>
                                        <p class="mb-0 pb-0">Umum</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
                                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                            <span
                                                class="featured-box featured-box-quaternary featured-box-effect-3 p-0 m-0">
                                                <span class="box-content p-0 m-0">
                                                    <i class="icon-featured icon-map icons"></i>
                                                </span>
                                            </span>
                                        </span>
                                        <p class="mb-0 pb-0">Pemetaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tabsNavigationSimpleIcons3" data-bs-toggle="tab">
                                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0">
                                            <span
                                                class="featured-box featured-box-quaternary featured-box-effect-3 p-0 m-0">
                                                <span class="box-content p-0 m-0">
                                                    <i class="icon-featured icon-globe icons"></i>
                                                </span>
                                            </span>
                                        </span>
                                        <p class="mb-0 pb-0">Kadaster</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                    <!-- FILTERING - START -->
                                    <div class="row kotak-filter">
                                        <div class="form-group col-lg-12">
                                            <label class="form-label mb-1 text-2">Pilih</label>
                                            <div class="custom-select-1">
                                                <select class="form-select form-control  border-color-quaernary h-auto"
                                                    name="dd-nama" required>
                                                    <option value="">Pilih Kategori...</option>
                                                    <option value="4">Produk dan Perkhidmatan</option>
                                                    <option value="5">Latihan Amali/Praktikal</option>
                                                    <option value="6">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FILTERING - END -->
                                    @foreach ($faq as $item)
                                        @if ($item->category_parent == 1)
                                            <div class="{{ $item->category_id }} faq pb-4">
                                                <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                                    <div class="col mb-4 mb-lg-0">
                                                        <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
                                                            id="accordion200">
                                                            <!-- 1 -->
                                                            <div class="card card-default">
                                                                <div class="card-header" id="collapse200HeadingOne">
                                                                    <h4 class="card-title m-0">
                                                                        <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#collapse200{{ $item->id }}"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse200{{ $item->id }}">
                                                                            {{ $item->soalan_my }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse200{{ $item->id }}"
                                                                    class="collapse"
                                                                    aria-labelledby="collapse200HeadingOne"
                                                                    data-bs-parent="#accordion200">
                                                                    <div class="card-body pt-0">
                                                                        <!-- PARAGRAPH - START -->
                                                                        <p class="mb-0 para-align">
                                                                            {!! $item->jawapan_my !!}
                                                                        </p>
                                                                        <div class="para-gap"></div>
                                                                        <!-- PARAGRAPH - END -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                    <!-- FILTERING - START -->
                                    <div class="row kotak-filter">
                                        <div class="form-group col-lg-12">
                                            <label class="form-label mb-1 text-2">Pilih</label>
                                            <div class="custom-select-1">
                                                <select class="form-select form-control  border-color-quaernary h-auto"
                                                    name="dd-nama" required>
                                                    <option value="">Pilih Kategori...</option>
                                                    <option value="7">Dron/UAV</option>
                                                    <option value="8">Pemetaan Utiliti</option>
                                                    <option value="9">Maklumat Air Pasang Surut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FILTERING - END -->
                                    @foreach ($faq as $item)
                                        @if ($item->category_parent == 2)
                                            <div class="{{ $item->category_id }} faq pb-4">
                                                <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                                    <div class="col mb-4 mb-lg-0">
                                                        <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
                                                            id="accordion200">
                                                            <!-- 1 -->
                                                            <div class="card card-default">
                                                                <div class="card-header" id="collapse200HeadingOne">
                                                                    <h4 class="card-title m-0">
                                                                        <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                                            data-bs-toggle="collapse"
                                                                            data-bs-target="#collapse200{{ $item->id }}"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapse200{{ $item->id }}">
                                                                            {{ $item->soalan_my }}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse200{{ $item->id }}"
                                                                    class="collapse"
                                                                    aria-labelledby="collapse200HeadingOne"
                                                                    data-bs-parent="#accordion200">
                                                                    <div class="card-body pt-0">
                                                                        <!-- PARAGRAPH - START -->
                                                                        <p class="mb-0 para-align">
                                                                            {!! $item->jawapan_my !!}
                                                                        </p>
                                                                        <div class="para-gap"></div>
                                                                        <!-- PARAGRAPH - END -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                    <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                        {{-- <!-- FILTERING - START -->
                                    <div class="row kotak-filter">
                                        <div class="form-group col-lg-12">
                                            <label class="form-label mb-1 text-2">Pilih</label>
                                            <div class="custom-select-1">
                                                <select class="form-select form-control  border-color-quaernary h-auto"
                                                    name="dd-nama" required>
                                                    <option value="">Pilih Kategori...</option>
                                                    <option value="7">Dron/UAV</option>
                                                    <option value="8">Pemetaan Utiliti</option>
                                                    <option value="9">Maklumat Air Pasang Surut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FILTERING - END --> --}}
                                        @foreach ($faq as $item)
                                            @if ($item->category_parent == 3)
                                                <div class="{{ $item->category_id }} pb-4">
                                                    <div
                                                        class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                                        <div class="col mb-4 mb-lg-0">
                                                            <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
                                                                id="accordion200">
                                                                <!-- 1 -->
                                                                <div class="card card-default">
                                                                    <div class="card-header"
                                                                        id="collapse200HeadingOne">
                                                                        <h4 class="card-title m-0">
                                                                            <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                                                                data-bs-toggle="collapse"
                                                                                data-bs-target="#collapse200{{ $item->id }}"
                                                                                aria-expanded="false"
                                                                                aria-controls="collapse200{{ $item->id }}">
                                                                                {{ $item->soalan_my }}
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse200{{ $item->id }}"
                                                                        class="collapse"
                                                                        aria-labelledby="collapse200HeadingOne"
                                                                        data-bs-parent="#accordion200">
                                                                        <div class="card-body pt-0">
                                                                            <!-- PARAGRAPH - START -->
                                                                            <p class="mb-0 para-align">
                                                                                {!! $item->jawapan_my !!}
                                                                            </p>
                                                                            <div class="para-gap"></div>
                                                                            <!-- PARAGRAPH - END -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TAB STYLE 3 - END -->
                </div>
            </div>

            <!-- Footer - START -->
            @include('main.layouts.partials.footer')
            <!-- Footer - END -->

        </div>

        <!-- Vendor -->
        @include('main.layouts.partials.scripts')


        <script>
            $(document).ready(function() {
                $("select").change(function() {
                    $(this).find("option:selected").each(function() {
                        var optionValue = $(this).attr("value");
                        if (optionValue) {
                            $(".faq").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else {
                            $(".faq").hide();
                        }
                    });
                }).change();
            });
        </script>
</body>

</html>
