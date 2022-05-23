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

            <div role="main" class="main">

                <div class="container py-5 mt-3">

                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-normal text-7 mb-0">Memaparkan hasil carian bagi <strong
                                    class="font-weight-extra-bold">{{ $search }}</strong></h2>
                            <p class="lead mb-0">{{ $total }} carian ditemui.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col pt-2 mt-1">
                            <hr class="my-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if (count($post) > 0)
                                <h3>Post</h3>
                                <ul class="simple-post-list m-0">
                                    @foreach ($post as $item)
                                        <li>
                                            <div class="post-info">
                                                <a href="/carian/papar">{{ $item->title_my }}</a>
                                                <div class="post-meta">
                                                    @if ($item->type == 'post')
                                                        <span
                                                            class="text-dark text-uppercase font-weight-semibold">Post</span>
                                                    @else
                                                        <span
                                                            class="text-dark text-uppercase font-weight-semibold">Page</span>
                                                    @endif
                                                    |
                                                    Nov 11 2022
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            {!! $post->links() !!}
                        </div>
                    </div>
                </div>

                <section class="section section-default border-0 m-0">
                    <div class="container py-4">

                        <div class="row pb-4">
                            <div class="col">
                                <form action="{{ route('carian') }}" method="get">
                                    <div class="input-group input-group-lg">
                                        <input class="form-control h-auto" placeholder="Search..." name="carian" id="s"
                                            type="text">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </section>

            </div>

            <!-- Footer - START -->
            @include('main.layouts.partials.footer')
            <!-- Footer - END -->

        </div>

        <!-- Vendor -->
        @include('main.layouts.partials.scripts')
</body>

</html>
