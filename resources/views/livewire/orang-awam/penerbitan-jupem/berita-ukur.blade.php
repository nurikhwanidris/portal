<div>
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
                                    data-bs-toggle="collapse" data-bs-target="#berita-ukur" aria-expanded="false"
                                    aria-controls="berita-ukur">
                                    Berita Ukur
                                </a>
                            </h4>
                        </div>
                        <div id="berita-ukur" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
