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
                                    {{ __('message.pengarah_jupem') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-perutusan')
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
                                    {{ __('message.perjanjian_konvensyen') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200TwoA" class="collapse" aria-labelledby="collapse200HeadingTwoA"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-perjanjian')
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
                                    {{ __('message.sumbangan') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-penglibatan')
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Three" aria-expanded="false"
                                    aria-controls="collapse200Three">
                                    {{ __('message.anggota_pentadbir') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-anggota')
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingFour">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Four" aria-expanded="false"
                                    aria-controls="collapse200Four">
                                    {{ __('message.majlis_bersama_jabatan') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Four" class="collapse" aria-labelledby="collapse200HeadingFour"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-bersama-jabatan')
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingFive">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Five" aria-expanded="false"
                                    aria-controls="collapse200Five">
                                    {{ __('message.anugerah_pencapaian') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Five" class="collapse" aria-labelledby="collapse1HeadingFive"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                @livewire('info-korp.mengenai-anugerah')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
