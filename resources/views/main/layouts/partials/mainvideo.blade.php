<section class="section border-0 video overlay2 overlay-show overlay-op-8 m-0 element-bawah"
    data-video-path="/main/preview-video/landing-portal" data-plugin-video-background
    data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}" style="height: 100vh;">
    <div class="container position-relative z-index-3 h-100">
        <div class="row align-items-center h-100">
            <div class="col">
                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                    <h1 class="text-color-light font-weight-extra-bold text-12 line-height-1 mb-2 appear-animation text-top-video"
                        data-appear-animation="blurIn" data-appear-animation-delay="800"
                        data-plugin-options="{'minWindowWidth': 0}">Pemacu Kesejahteraan Rakyat dan Pembangunan Negara
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

@if ($annoucements)
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
