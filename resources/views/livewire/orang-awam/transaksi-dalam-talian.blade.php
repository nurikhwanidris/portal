<div>
    <section class="parallax section section-parallax section-center" data-plugin-parallax
        data-plugin-options="{'speed': 1.5}" data-image-src="img/section-image/map.png"
        style="margin: 0px 0;padding:0 !important;">

        <div class="container" style="    padding: 24px 0;">

            <!-- Title -->
            <div class="col">
                <h2 class="font-weight-normal text-center text-6">
                    <strong>
                        {{ __('message.Online Transactions') }}
                    </strong>
                </h2>
            </div>

            <!-- Counters -->
            <div class="row counters">
                <!-- row mb-4 counters counters-sm text-dark -->
                <!-- Jumlah -->
                <div class="col-lg-3" style="padding: 10px;">
                    <div class="col-sm-6 col-lg-12 mb-4 mb-lg-0">
                        <div class="counter counter-quaternary">
                            <i class="fas fa-user"></i>
                            <strong style="font-weight: bold;">
                                {{ $transaksiTotal }}
                            </strong>
                            <label class="font-weight-bold">{{ __('message.total_transaction') }}
                                {{ now()->subMonth()->format('F') }} 2022</label>
                        </div>
                    </div>
                </div>
                <!-- Pecahan -->
                <div class="col-lg-9">
                    <!-- Tingkat 1 -->
                    <div class="row counters counters-sm" style="padding-bottom: 20px;">

                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter counter-primary">
                                <i class="fas fa-layer-group"></i>
                                <strong class="font-weight-bold" data-to="{{ $kadaster }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.kadaster') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter counter-secondary">
                                <i class="fas fa-map"></i>
                                <strong data-to="{{ $pemetaan }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.mapping') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                            <div class="counter counter-tertiary">
                                <i class="fas fa-globe"></i>
                                <strong data-to="{{ $geodesi }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.geodesi') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter counter-quinary">
                                <i class="fas fas fa-street-view"></i>
                                <strong data-to="{{ $lesen }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.license') }}</label>
                            </div>
                        </div>
                    </div>

                    <!-- Tingkat 2 -->
                    <div class="row counters counters-sm">
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter counter-primary">
                                <i class="fas fa-satellite"></i>
                                <strong data-to="{{ $rtk }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.rtk_subscription') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                            <div class="counter counter-secondary">
                                <i class="fas  fa-map-pin"></i>
                                <strong data-to="{{ $geodetik }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.geo_service') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                            <div class="counter counter-tertiary">
                                <i class="fas fa-certificate"></i>
                                <strong data-to="{{ $dataTerhad }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.limited_data_application') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter counter-quinary">
                                <i class="fas fa-server"></i>
                                <strong data-to="{{ $permit }}">0</strong>
                                <label class="font-weight-bold">{{ __('message.permit_application') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
