<div>
    @if ($annoucements->count() > 0)
        <div class="container-fluid mt-5 bg-noti element-atas" style="background-color: #4e914a !important;">
            <div class="row">
                <div class="col-md-12">
                    <marquee behaviour="scroll" onmouseover="this.stop();" onmouseout="this.start();" direction="left"
                        class="news-scroll">
                        <span class="dot-yellow-green"></span>
                        @foreach ($annoucements as $annoucement)
                            <a href="{{ route('pengumuman-read', [app()->getLocale(), 'id' => $annoucement->id]) }}"
                                style="color: #000 !important;" class="me-4" target="_blank">
                                {{-- <strong class="text-title-strong"> --}}
                                <strong>
                                    {{ $annoucement->title_my }} :
                                </strong>
                            </a>
                            @if ($annoucement->filename_my != null)
                                <a href="{{ asset('/upload/pengumuman/' . $annoucement->filename_my) }}"
                                    target="_blank" rel="noopener noreferrer" style="color: #000 !important;"
                                    class="me-4">
                                    {{ __('message.Download_attachment') }}
                                </a>
                            @else
                                <a href="{{ route('pengumuman-read', ['id' => $annoucement->id, app()->getLocale()]) }}"
                                    target="_blank" rel="noopener noreferrer">
                                    <span style="color: #000 !important;" class="me-4">
                                        {{ strip_tags($annoucement->excerptMy()) }}
                                    </span>
                                </a>
                            @endif
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    @endif
</div>
