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
        <!-- Header - Logo + Icons 4 + Search - aaEND -->

        <div role="main" class="main">
            <!-- Title Section - START -->
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->

            <div class="container" style="margin-bottom: 100px;">
                {{-- Alert --}}
                @if (session()->has('success'))
                    <div class="row">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <!-- PAGE TITLE - END-->
                <div role="main" class="main">
                    <div class="row">
                        @if (!empty($post))
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <strong>
                                                Post
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            @if (app()->getLocale() == 'en')
                                                {{ $post->title_en }}
                                            @else
                                                {{ $post->title_my }}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $post->contents_en !!}
                                            @else
                                                {!! $post->contents_my !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($pengumuman))
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <strong>
                                                Pengumuman
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            @if (app()->getLocale() == 'en')
                                                {{ $pengumuman->title_en }}
                                            @else
                                                {{ $pengumuman->title_my }}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $pengumuman->content_en !!}
                                            @else
                                                {!! $pengumuman->content_my !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($beritaTerkini))
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <strong>
                                                Berita Terkini
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            @if (app()->getLocale() == 'en')
                                                {{ $beritaTerkini->title_en }}
                                            @else
                                                {{ $beritaTerkini->title_my }}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $beritaTerkini->content_en !!}
                                            @else
                                                {!! $beritaTerkini->content_my !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($tender))
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <strong>
                                                {{ __('message.Tender') }}
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            @if (app()->getLocale() == 'en')
                                                {{ $tender->title_en }}
                                            @else
                                                {{ $tender->title_my }}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $tender->content_en !!}
                                            @else
                                                {!! $tender->content_my !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (!empty($sebutharga))
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col">
                                        <h3>
                                            <strong>
                                                {{ __('message.sebut_harga') }}
                                            </strong>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h4>
                                            @if (app()->getLocale() == 'en')
                                                {{ $sebutharga->title_en }}
                                            @else
                                                {{ $sebutharga->title_my }}
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            @if (app()->getLocale() == 'en')
                                                {!! $sebutharga->content_en !!}
                                            @else
                                                {!! $sebutharga->content_my !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
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
