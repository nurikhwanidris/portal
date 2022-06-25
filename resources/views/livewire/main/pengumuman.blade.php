<div>
    @if ($annoucements->count() > 0)
        <div class="container-fluid mt-5 bg-noti element-atas" style="background-color: #4e914a !important;">
            <div class="row">
                <div class="col-md-12">
                    <marquee behaviour="scroll" onmouseover="this.stop();" onmouseout="this.start();" direction="left"
                        class="news-scroll">
                        <span class="dot-yellow-green"></span>
                        @foreach ($annoucements as $annoucement)
                            @if ($annoucement->filename_my != '')
                                <a href="{{ route('pengumuman-read', [app()->getLocale(), 'id' => $annoucement->id]) }}"
                                    style="color: #000 !important;" class="me-4" target="_blank">
                                    {{-- <strong class="text-title-strong"> --}}
                                    @if (app()->getLocale() == 'en')
                                        <strong>
                                            {{ $annoucement->title_en }}
                                        </strong>
                                    @else
                                        <strong>
                                            {{ $annoucement->title_my }}
                                        </strong>
                                    @endif
                                </a>
                            @else
                                <a href="{{ route('pengumuman-read', [app()->getLocale(), 'id' => $annoucement->id]) }}"
                                    style="color: #000 !important;" class="me-4" target="_blank">
                                    {{-- <strong class="text-title-strong"> --}}
                                    @if (app()->getLocale() == 'en')
                                        <strong>
                                            {{ $annoucement->title_en }} :
                                        </strong>
                                        <span style="color: #000 !important;" class="me-4">
                                            {!! strip_tags($annoucement->excerptEn()) !!}
                                        </span>
                                    @else
                                        <strong>
                                            {{ $annoucement->title_my }} :
                                        </strong>
                                        <span style="color: #000 !important;" class="me-4">
                                            {!! strip_tags($annoucement->excerptMy()) !!}
                                        </span>
                                    @endif
                                </a>
                            @endif
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    @endif
</div>
