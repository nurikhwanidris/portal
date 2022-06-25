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
                    <span class="" style="font-size: .8em;">
                        {{ __('message.date_published') . $page->created_at->format('d M Y') }}
                    </span>
                </div>
                <div class="row">
                    <!-- SUB TITLE - START-->
                    <h2 class="font-weight-normal text-6 mb-3">
                        @if (app()->getLocale() == 'en')
                            {{ $page->title_en }}
                        @else
                            {{ $page->title_my }}
                        @endif
                    </h2>
                    <!-- SUB TITLE - END-->

                    <!-- CONTENT - START -->

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
                        @if (app()->getLocale() == 'en')
                            {!! $page->content_en !!}
                        @else
                            {!! $page->content_my !!}
                        @endif
                    </p>
                    <!-- PARAGRAPH - END -->

                    <!-- ATTACHMENT - START -->
                    @if (request()->segment(2) == 'pengumuman')
                        @if ($page->filename_my != '')
                            <div class="col-md-12">
                                <div class="text-center">
                                    <a href="{{ asset('storage/upload/pengumuman/' . $page->filename_my) }}"
                                        target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fa fa-download"></i>
                                        {{ __('message.Download') }}
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endif

                    @if (!empty($page->kod))
                        <div class="col border p-4">
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Code') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    {{ $page->kod }}
                                </span>
                            </div>
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Period') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    {{ $page->tempoh }}
                                </span>
                            </div>
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Time') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    @if (empty($page->masa))
                                        TIADA
                                    @else
                                        {{ $page->masa }}
                                    @endif
                                </span>
                            </div>
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Briefing') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    @if (empty($page->taklimat))
                                        TIADA
                                    @else
                                        {{ $page->taklimat }}
                                    @endif
                                </span>
                            </div>
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Question') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    @if (empty($page->pertanyaan))
                                        TIADA
                                    @else
                                        {{ $page->pertanyaan }}
                                    @endif
                                </span>
                            </div>
                            <div class="row">
                                <span class="col-sm-2">{{ __('message.Attachment') }}</span>
                                <span class="col-sm-1">:</span>
                                <span class="col">
                                    @if (empty($page->filename))
                                        TIADA
                                    @else
                                        @if (route('sebut-harga-read', [app()->getLocale(), 'id' => $page->id]))
                                            <a href="{{ asset('storage/upload/sebutharga/' . $page->filename) }}"><i
                                                    class="fas fa-file-pdf"></i> {{ __('message.Download') }}</a>
                                        @elseif (route('tender-read', [app()->getLocale(), 'id' => $page->id]))
                                            <a href="{{ asset('storage/upload/tender/' . $page->filename) }}"><i
                                                    class="fas fa-file-pdf"></i> {{ __('message.Download') }}</a>
                                        @endif
                                    @endif
                                </span>
                            </div>
                        </div>
                    @endif
                    <!-- CONTENT - END -->
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
