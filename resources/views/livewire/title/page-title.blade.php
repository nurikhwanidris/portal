<div>
    <section class="page-header page-header-modern page-header-md bg-transparent" style="padding: 0 !important;">
        <div class="container" style="margin-top:50px;">
            <div class="row">
                <div class="col-md-6 align-self-center order-2 order-md-1 p-static">
                    <div class="row">
                        <div class="font-weight-normal text-title-small">
                            @if (url()->current() == route('info-korp'))
                                Info Korporat
                            @elseif (url()->current() == route('orang-awam'))
                                Orang Awam
                            @elseif (url()->current() == route('warga-jupem'))
                                Warga Jupem
                                {{-- @elseif (url()->current() == route('faq'))
                                Soalan Lazim --}}
                            @endif
                        </div>
                        <div class="font-weight-normal text-6">
                            <strong class="text-title-strong">
                                @if (url()->current() == route('info-korp'))
                                    Info Korporat
                                @elseif (url()->current() == route('orang-awam'))
                                    Orang Awam
                                @elseif (url()->current() == route('warga-jupem'))
                                    Warga Jupem
                                @elseif (url()->current() == route('faq'))
                                    Soalan Lazim
                                @endif
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb d-block breadcrumb-dark mb-2 mb-md-0">
                        <li>
                            <a href="#">Laman Utama</a>
                        </li>
                        <li class="">
                            @if (url()->current() == route('info-korp'))
                                Info Korporat
                            @elseif (url()->current() == route('orang-awam'))
                                Orang Awam
                            @elseif (url()->current() == route('warga-jupem'))
                                Warga Jupem
                            @elseif (url()->current() == route('faq'))
                                Soalan Lazim
                            @endif
                        </li>
                        {{-- <li class="active" id="currentTab"></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
