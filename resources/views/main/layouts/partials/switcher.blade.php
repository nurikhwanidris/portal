<style>
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>

<div id="mySidenav" class="sidenav">
    <nav class="sidebar card py-2 mb-4 border-0">
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item">
                <a class="nav-link" href="/"> {{ __('message.Main Menu') }} </a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link dropdown-item dropdown-toggle"
                    href="#">{{ __('message.Corporate Information') }}</a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-korp', app()->getLocale()) }}#tab-1">{{ __('message.JUPEM Information') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-korp', app()->getLocale()) }}#tab-2">{{ __('message.structure') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-korp', app()->getLocale()) }}#tab-3">{{ __('message.Contact Us') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-korp', app()->getLocale()) }}#tab-4">{{ __('message.Subject Matter Expertise') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link dropdown-item dropdown-toggle" href="#">
                    {{ __('message.Current Information') }}</a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-semasa', app()->getLocale()) }}#tab-1">{{ __('message.Announcement') }}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-semasa', app()->getLocale()) }}#tab-2">{{ __('message.Latest News') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-semasa', app()->getLocale()) }}#tab-3">{{ __('message.Procurement Offer') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('info-semasa', app()->getLocale()) }}#tab-4">{{ __('message.Client Charter') }}</a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item has-submenu">
                <a class="nav-link dropdown-item dropdown-toggle" href="#">{{ __('message.JUPEM Staff') }}</a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-1">{{ __('message.Work Sheet') }}</a>
                    </li>
                    <li>
                        <a class="nav-lin link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-2">{{ __('message.Staff Exchange') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-3">{{ __('message.Meeting Report') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-4">{{ __('message.Public Sector Inovation') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-5">{{ __('message.Development Paper') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-6">{{ __('message.Policy, Budget & Offical Documents') }}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-7">{{ __('message.Certificate & Recognition Documents') }}
                        </a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-8">{{ __('message.General Instruction') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-9">{{ __('message.Policy, Circular and Guidelines') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-10">{{ __('message.Departmental Documents') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('warga-jupem', app()->getLocale()) }}#tab-11">{{ __('message.Download JUPEM Forms') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link dropdown-item dropdown-toggle" href="#"> {{ __('message.Public') }}</a>
                <ul class="submenu collapse">
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-1">{{ __('message.product_and_service') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-2">{{ __('message.Development Paper') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-3">{{ __('message.Publication & Publishing') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-4">{{ __('message.Staff Directory') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-5">Multimedia </a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-6">{{ __('message.Procurement Offer') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-7">{{ __('message.Online Transactions') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-8">{{ __('message.News & Press Release') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-9">{{ __('message.Download Mapping Forms') }}</a>
                    </li>
                    <li>
                        <a class="nav-link link-no-deco"
                            href="{{ route('orang-awam', app()->getLocale()) }}#tab-10">{{ __('message.Government Open Data') }}</a>
                    </li>
                </ul>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="#"> Something </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> Other link </a>
            </li> --}}
        </ul>
    </nav>
</div>

<legend class="butang-tepi">
    <div id="myDIV">
        <a id="satu" class="tepi-menu-utama gerak-khas satu" href="#" data-bs-toggle="tooltip"
            data-bs-animation="false" data-bs-placement="right" title="" onclick="myFunction();openNav();">
            <i class="fas fa-bars img-fluid icon-menu-tepi"></i>
            <div class="text-menu-tepi">{{ __('message.Main Menu') }}</div>
        </a>
    </div>

    <div id="myDIV2" style="display:none" onclick="myFunction();closeNav();">
        <a id="satu-2" class="tepi-menu-utama-2 gerak-khas satu hamburguer-btn" href="#"
            data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="">
            <i class="fas fa-bars img-fluid icon-menu-tepi"></i>
            <div class="text-menu-tepi">{{ __('message.Main Menu') }}</div>
        </a>
    </div>

    <div id="myDIV3">
        <a id="dua" class="tepi-menu-direktori gerak-khas"
            href="{{ route('orang-awam', app()->getLocale()) }}#tab-4" data-bs-toggle="tooltip"
            data-bs-animation="false" data-bs-placement="right" title="">
            <i class="fas fa-user-tie img-fluid icon-menu-tepi"></i>
            <div class="text-menu-tepi">{{ __('message.Staff Directory') }}</div>
        </a>
    </div>
    <div id="myDIV4">
        <a id="tiga" class="tepi-menu-warga gerak-khas" href="{{ route('warga-jupem', app()->getLocale()) }}"
            data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="">
            <i class="fas fa-briefcase img-fluid icon-menu-tepi"></i>
            <div class="text-menu-tepi">{{ __('message.JUPEM Staff') }}</div>
        </a>
    </div>
    <div id="myDIV5">
        <a id="empat" class="tepi-menu-awam gerak-khas" href="{{ route('orang-awam', app()->getLocale()) }}"
            data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="">
            <i class="fas fa-users img-fluid icon-menu-tepi"></i>
            <div class="text-menu-tepi">{{ __('message.Public') }}</div>
        </a>
    </div>
</legend>
