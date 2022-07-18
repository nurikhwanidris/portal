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
                <a class="nav-link dropdown-item"
                    href="{{ route('info-korp', app()->getLocale()) }}">{{ __('message.Corporate Information') }}</a>
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link dropdown-item" href="{{ route('info-semasa', app()->getLocale()) }}">
                    {{ __('message.Current Information') }}</a>
            </li>
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
            href="{{ route('info-korp', app()->getLocale()) }}#tab-5" data-bs-toggle="tooltip"
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
