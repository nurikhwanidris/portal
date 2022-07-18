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
                                    data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false"
                                    aria-controls="collapse200One">
                                    Kertas Kerja
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('warga-jupem.sistem-dalaman.kertas-kerja')
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
                                    Intranet
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200TwoA" class="collapse" aria-labelledby="collapse200HeadingTwoA"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('warga-jupem.sistem-dalaman.intranet')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
