<div>
    @if ($annoucements->count() > 0)
        <div class="container-fluid mt-5 bg-noti element-atas" style="background-color: #4e914a !important;">
            <div class="row">
                <div class="col-md-12">
                    <marquee behaviour="scroll" onmouseover="this.stop();" onmouseout="this.start();" direction="left"
                        class="news-scroll">
                        @foreach ($annoucements as $annoucement)
                            <span class="dot-yellow-green"></span>
                            <a href="#" style="color: #000 !important;">
                                {{-- <strong class="text-title-strong"> --}}
                                <strong>
                                    {{ $annoucement->title_my }} :
                                </strong>
                                <span>
                                    {{ $annoucement->excerpt_my }}
                                </span>
                            </a>
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>
    @endif
</div>
