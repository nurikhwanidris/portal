<header id="header" class="header-transparent"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 20, 'stickyHeaderContainerHeight': 100}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container" style="padding-right: 30px; height: 100px; min-height: 0px;">
            <div class="header-row">
                <!-- Logo - START -->
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('index', app()->getLocale()) }}">
                                <img alt="{{ __('message.National Coat of Arms') }}" src="/main/img/logo-default/logo-default-208x100.png"
                                    class="logo-size">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Logo - END -->
                <!-- Nama Page - START -->
                <div class="header-column" style="padding: 10px 20px 20px 20px;">
                    <div class="header-row text-header-small">
                        {{ __('message.Official Website') }}
                    </div>
                    <div class="header-row text-header-main">
                        {{ __('message.Department of Survey and Mapping Malaysia') }}
                    </div>
                    <div class="header-row text-header-kementerian">
                        {{ __('message.Ministry of Energy and Natural Resources') }}
                    </div>
                </div>
                <!-- Nama Page  - END -->
                <!-- Buttons -START -->
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <!-- 4 Icons -->
                        <div
                            class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1 hovericon hovercolour">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active"
                                                href="{{ route('faq', app()->getLocale()) }}">
                                                <div class="center-icon">
                                                    <img alt="Soalan Lazim"
                                                        data-change-src="/main/img/shortcut-icon/faq-small.png"
                                                        src="/main/img/shortcut-icon/faq-small.png">
                                                    <div class="text-header-icon">{{ __('message.FAQ') }}
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-mega">
                                            <a class="dropdown-item dropdown-toggle active"
                                                href="{{ route('info-korp', app()->getLocale()) }}#tab-3">
                                                <div class="center-icon">
                                                    <img alt="Soalan Lazim"
                                                        data-change-src="/main/img/shortcut-icon/faq-small.png"
                                                        src="/main/img/shortcut-icon/hubungi-small.png">
                                                    <div class="text-header-icon">{{ __('message.Contact Us') }}
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active"
                                                href="{{ route('maklum-balas-create', app()->getLocale()) }}">
                                                <div class="center-icon">
                                                    <img alt="Soalan Lazim"
                                                        data-change-src="/main/img/shortcut-icon/faq-small.png"
                                                        src="/main/img/shortcut-icon/maklumbalas-small.png">
                                                    <div class="text-header-icon">
                                                        {{ __('message.Feedback & Complaint') }}</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active"
                                                href="{{ route('sitemap', app()->getLocale()) }}">
                                                <div class="center-icon">
                                                    <img alt="Soalan Lazim"
                                                        data-change-src="/main/img/shortcut-icon/faq-small.png"
                                                        src="/main/img/shortcut-icon/peta-small.png">
                                                    <div class="text-header-icon">{{ __('message.Site Map') }}</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <!-- Global Search -->
                        <div
                            class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                    data-focus="headerSearch">
                                    <i class="fas fa-search header-nav-top-icon"></i>
                                </a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed"
                                    id="headerTopSearchDropdown" style="margin-right: -31px; top: 10px;">
                                    <form role="search" action="{{ route('carian', app()->getLocale()) }}"
                                        method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="carian"
                                                type="search" value="{{ old('carian') }}" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"
                                                    style="color:#222 !important;"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- W3C Start -->
                        <div
                            class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div
                                class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                <a href="#" class="header-nav-features-toggle"
                                    style="color: #ffffff;font-weight: 800;font-size: 12px;}">
                                    {{-- <i class="fas fa-life-ring header-nav-top-icon"></i> --}}W3C
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <!-- Menu W3C -->
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <div class="product-details">
                                                <p class="qty-price">{{ __('message.Language') }} </p>
                                                <p class="product-name">
                                                    <a href="/ms"><img src="/main/img/shortcut-icon/my.svg" alt="BM"
                                                            class="header-nav-top-icon-img flag-w3c"> </a>
                                                    <a href="/en"><img src="/main/img/shortcut-icon/gb.svg" alt="ENG"
                                                            class="header-nav-top-icon-img flag-w3c"> </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <div class="product-details">
                                                <p class="qty-price">{{ __('message.Font Color') }}</p>
                                                <p class="product-name">
                                                <div>
                                                    <button class="dot-w3c dot-w3c-1" id="fontColorWhite"
                                                        onclick="changeWhite()"></button>
                                                    <button class="dot-w3c dot-w3c-2" id="fontColorRed"
                                                        onclick="changeRed()"></button>
                                                    <button class="dot-w3c dot-w3c-3" id="fontColorGreen"
                                                        onclick="changeGreen()"></button>
                                                    <button class="dot-w3c dot-w3c-4" id="fontColorBlue"
                                                        onclick="changeBlue()"></button>
                                                    <button class="dot-w3c dot-w3c-5" id="fontColorYellow"
                                                        onclick="changeYellow()"></button>
                                                </div>
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <div class="product-details">
                                                <p class="qty-price">
                                                    {{ __('message.Font Size') }}
                                                </p>
                                                <p class="product-name">
                                                    <a href="#" class="text-decoration-none btn-link"
                                                        onclick="change80()" style="font-size: 10px;">A &nbsp;</a>
                                                    <a href="#" class="text-decoration-none btn-link"
                                                        onclick="change100()" style="font-size: 12px;">A &nbsp;</a>
                                                    <a href="#" class="text-decoration-none btn-link"
                                                        onclick="change150()" style="font-size: 14px;">A &nbsp;</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <div class="product-details">
                                                <p class="qty-price">{{ __('message.Help') }}</p>
                                                <p class="product-name">
                                                    <a href="#">
                                                        <img src="/main/img/shortcut-icon/manual-colour.svg"
                                                            alt="Manual" class="header-nav-top-icon-img manual"
                                                            style="height: 40px;">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- W3C End -->
                    </div>
                </div>
                <!-- Buttons -END -->
            </div>
        </div>
    </div>
</header>
