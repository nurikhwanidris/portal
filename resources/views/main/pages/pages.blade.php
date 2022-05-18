<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laman Web Ramsi JUPEM | {{ $page->title_my }}</title>

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

            {{-- I died a little inside lah --}}
            <div class="container" style="margin-bottom: 100px;">
                <div class="row">
                    <!-- SUB TITLE - START-->
                    <h2 class="font-weight-normal text-6 mb-3">{{ $page->title_my }}</h2>
                    <!-- SUB TITLE - END-->

                    <!-- IMAGE - Start-->
                    @if ($page->gambarHadapan)
                        <div class="col-md-12">
                            <div class="text-center">
                                <img src="{{ asset('storage/upload/img/' . $page->gambarHadapan) }}"
                                    alt="{{ $page->title_my }}" class="img-fluid">
                            </div>
                        </div>
                    @endif
                    <!-- IMAGE - END-->

                    <!-- PARAGRAPH - START -->
                    <p class="mt-3 mb-0 para-align">
                        {!! $page->content_my !!}
                    </p>
                    <!-- PARAGRAPH - END -->
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
