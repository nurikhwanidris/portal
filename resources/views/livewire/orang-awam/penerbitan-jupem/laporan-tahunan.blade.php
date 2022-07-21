<div>
    <div class="row portfolio-list sort-destination">
        @foreach ($laporan_tahunan as $item)
            <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                <div class="portfolio-item">
                    <a href="{{ asset('storage/upload/laporan_tahunan/' . $item->filename) }}">
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
        {{ $laporan_tahunan->links() }}
    </div>
</div>
