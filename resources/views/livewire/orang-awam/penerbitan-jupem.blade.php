<div>
    <div>
        <div class="tabs tabs-bottom tabs-center tabs-simple">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#buletin-gis" data-bs-toggle="tab">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="fas fa-book"></i>
                                </span>
                            </span>
                        </span>
                        <p class="mb-0 pb-0" style="font-size: 10px;">Buletin GIS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#berita-ukur" data-bs-toggle="tab">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="fas fa-book"></i>
                                </span>
                            </span>
                        </span>
                        <p class="mb-0 pb-0" style="font-size: 10px;">Berita Ukur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#keratan-akhbar" data-bs-toggle="tab">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="fas fa-book"></i>
                                </span>
                            </span>
                        </span>
                        <p class="mb-0 pb-0" style="font-size: 10px;">Keratan Akhbar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#laporan-tahunan" data-bs-toggle="tab">
                        <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                            <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                                <span class="box-content p-0 m-0">
                                    <i class="fas fa-book"></i>
                                </span>
                            </span>
                        </span>
                        <p class="mb-0 pb-0" style="font-size: 10px;">Laporan Tahunan</p>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="buletin-gis">
                    <div>
                        <!-- Buletin GIS - START -->
                        @livewire('orang-awam.penerbitan-jupem.buletin-gis')
                        <!-- Buletin GIS - END -->
                    </div>
                </div>
                <div class="tab-pane" id="berita-ukur">
                    <div>
                        <!-- Berita Ukur - START -->
                        @livewire('orang-awam.penerbitan-jupem.berita-ukur')
                        <!-- Berita Ukur - END -->
                    </div>
                </div>
                <div class="tab-pane" id="keratan-akhbar">
                    <div>
                        <!-- Keratan Akhbar - START -->
                        @livewire('orang-awam.penerbitan-jupem.keratan-akhbar')
                        <!-- Keratan Akhbar - END -->
                    </div>
                </div>
                <div class="tab-pane" id="laporan-tahunan">
                    <div>
                        <!-- Laporan Tahunan - START -->
                        @livewire('orang-awam.penerbitan-jupem.laporan-tahunan')
                        <!-- Laporan Tahunan - END -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
