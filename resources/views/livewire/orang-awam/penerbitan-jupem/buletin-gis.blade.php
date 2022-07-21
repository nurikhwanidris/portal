<div>
    <div class="row portfolio-list sort-destination">
        @foreach ($gis as $g)
            <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                <div class="portfolio-item">
                    <a href="{{ asset('storage/upload/gis/' . $g->filename) }}">
                        <span class="thumb-info thumb-info-lighten border-radius-0">
                            <span class="thumb-info-wrapper border-radius-0">
                                <img src="{{ asset('storage/upload/gis/' . $g->gambarHadapan) }}"
                                    class="img-fluid border-radius-0" alt="">
                            </span>
                        </span>
                    </a>
                    <p class="mb-0 para-align-label">{{ $g->title_my }}</p>
                </div>
            </div>
        @endforeach
        <div class="mx-auto">
            {{ $gis->links() }}
        </div>
    </div>
</div>
