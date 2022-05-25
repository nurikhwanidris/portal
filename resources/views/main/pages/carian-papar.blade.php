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
                                        <h4>{{ $post->title_my }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            {!! $post->contents_my !!}
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
                                        <h4>{{ $pengumuman->title_my }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            {!! $pengumuman->content_my !!}
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
                                        <h4>{{ $beritaTerkini->title_my }}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            {!! $beritaTerkini->content_my !!}
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
