<div>
    <div class="container">
        <div class="row pb-4">
            <div class="col">
                <div class="text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">
                    {{ __('message.structure') }}</div>
            </div>
        </div>
        <div class="row">
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
                                        {{ __('message.pengurusan_tertinggi') }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                                data-bs-parent="#accordion200">
                                <div class="card-body pt-0">
                                    @livewire('info-korp.mengenai-pengurusan-tertinggi')
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="card card-default">
                            <div class="card-header" id="collapse200HeadingTwoA">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse200TwoA"
                                        aria-expanded="false" aria-controls="collapse200Two">
                                        {{ __('message.states') }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200TwoA" class="collapse" aria-labelledby="collapse200HeadingTwoA"
                                data-bs-parent="#accordion200">
                                <div class="card-body pt-0">
                                    @livewire('info-korp.struktur-negeri')
                                </div>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="card card-default">
                            <div class="card-header" id="collapse200HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse200Two" aria-expanded="false"
                                        aria-controls="collapse200Two">
                                        {{ __('message.Organization_structure_jupem') }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo"
                                data-bs-parent="#accordion200">
                                <div class="card-body pt-0">
                                    @livewire('info-korp.struktur-hq')
                                </div>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="card card-default">
                            <div class="card-header" id="collapse200HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse200Three"
                                        aria-expanded="false" aria-controls="collapse200Three">
                                        {{ __('message.Organization_structure_ministry') }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree"
                                data-bs-parent="#accordion200">
                                <div class="card-body pt-0">
                                    @livewire('info-korp.struktur-ketsa')
                                </div>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="card card-default">
                            <div class="card-header" id="collapse200HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse200Four"
                                        aria-expanded="false" aria-controls="collapse200Four">
                                        {{ __('message.cio') }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour"
                                data-bs-parent="#accordion200">
                                <div class="card-body pt-0">
                                    @livewire('info-korp.struktur-cio')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
