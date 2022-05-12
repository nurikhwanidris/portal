<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Buku & Penerbitan</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- ACCORDION 1 - START -->
    <div class="row pb-4">
        <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
            <div class="col mb-4 mb-lg-0">
                <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
                    id="accordion200">
                    <!-- 1 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false"
                                    aria-controls="collapse200One">
                                    Buletin GIS
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!-- GALLERY - START -->
                                <div class="row">
                                    <div class="col">
                                        <div class="row portfolio-list sort-destination">
                                            @foreach ($gis as $item)
                                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                                    <div class="portfolio-item">
                                                        <a
                                                            href="{{ asset('storage/upload/gis/' . $item->filename) }}">
                                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                                <span class="thumb-info-wrapper border-radius-0">
                                                                    <img src="{{ asset('storage/upload/gis/' . $item->gambarHadapan) }}"
                                                                        class="img-fluid border-radius-0" alt="">
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <p class="mb-0 para-align-label">{{ $item->title_my }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- GALLERY - END -->
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingTwoA">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200TwoA" aria-expanded="false"
                                    aria-controls="collapse200Two">
                                    Berita Ukur
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200TwoA" class="collapse" aria-labelledby="collapse200HeadingTwoA"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="row portfolio-list sort-destination">
                                            @foreach ($berita_ukur as $item)
                                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                                    <div class="portfolio-item">
                                                        <a
                                                            href="{{ asset('storage/upload/berita_ukur/' . $item->filename) }}">
                                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                                <span class="thumb-info-wrapper border-radius-0">
                                                                    <img src="{{ asset('storage/upload/berita_ukur/' . $item->gambarHadapan) }}"
                                                                        class="img-fluid border-radius-0" alt="">
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <p class="mb-0 para-align-label">{{ $item->title_my }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Three" aria-expanded="false"
                                    aria-controls="collapse200Three">
                                    Laporan Tahunan
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="row portfolio-list sort-destination">
                                            @foreach ($laporan_tahunan as $item)
                                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                                    <div class="portfolio-item">
                                                        <a
                                                            href="{{ asset('storage/upload/laporan_tahunan/' . $item->filename) }}">
                                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                                <span class="thumb-info-wrapper border-radius-0">
                                                                    <img src="{{ asset('storage/upload/laporan_tahunan/' . $item->gambar) }}"
                                                                        class="img-fluid border-radius-0" alt="">
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <p class="mb-0 para-align-label">{{ $item->title_my }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingFour">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Four" aria-expanded="false"
                                    aria-controls="collapse200Four">
                                    Buku Perancangan Latihan
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="row portfolio-list sort-destination">
                                            @foreach ($laporan_tahunan as $item)
                                                <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                                    <div class="portfolio-item">
                                                        <a
                                                            href="{{ asset('storage/upload/laporan_tahunan/' . $item->filename) }}">
                                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                                <span class="thumb-info-wrapper border-radius-0">
                                                                    <img src="{{ asset('storage/upload/laporan_tahunan/' . $item->gambar) }}"
                                                                        class="img-fluid border-radius-0" alt="">
                                                                </span>
                                                            </span>
                                                        </a>
                                                        <p class="mb-0 para-align-label">{{ $item->title_my }}</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingFive">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Five" aria-expanded="false"
                                    aria-controls="collapse200Five">
                                    Buku
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Five" class="collapse" aria-labelledby="collapse200HeadingFive"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                Content 5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
