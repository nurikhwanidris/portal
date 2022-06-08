<div>
    <section class="section section-default border-0">
        <div class="container">
            <div class="row">
                <div class="col-12" style="padding-bottom: 20px;">
                    <p class="mb-0 para-align-title">{{ __('message.jadual_stesyen', ['STESEN' => 'Pulau Langkawi']) }}
                    </p>
                    <p class="mb-0 para-align">{!! __('message.huraian', ['STESEN' => 'Pulau Langkawi']) !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Table 1 -->
                <div class="col-lg-6">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="tajuk-tab-staps">
                                <th colspan="3">{{ __('message.jadual_header_current') }}</th>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                <th class="align-middle text-center">{{ __('message.waktu_pasang_surut') }}</th>
                                <th class="align-middle text-center">{{ __('message.ketinggian_air') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if ($staps[0]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps[0]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps[0]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($staps[1]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps[1]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps[1]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($staps[2]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps[2]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps[2]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            @if (count($staps) >= 4)
                                <tr>
                                    <td>
                                        @if ($staps[3]->STAP_KETINGGIAN >= 150)
                                            <span
                                                class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                                {{ __('message.air_pasang') }}
                                            </span>
                                        @else
                                            <span
                                                class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                                {{ __('message.air_surut') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="align-center text-center">
                                        {{ str_pad($staps[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps[3]->STAP_MINIT }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $staps[3]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Table 2 -->
                <div class="col-lg-6">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="tajuk-tab-staps">
                                <th colspan="3">{{ __('message.jadual_header_next_day') }}</th>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                <th class="align-middle text-center">{{ __('message.waktu_pasang_surut') }}</th>
                                <th class="align-middle text-center">{{ __('message.ketinggian_air') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    @if ($staps1[0]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps1[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps1[0]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps1[0]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($staps1[1]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps1[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps1[1]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps1[1]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($staps1[2]->STAP_KETINGGIAN >= 150)
                                        <span
                                            class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_pasang') }}
                                        </span>
                                    @else
                                        <span
                                            class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                            {{ __('message.air_surut') }}
                                        </span>
                                    @endif
                                </td>
                                <td class="align-center text-center">
                                    {{ str_pad($staps1[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps1[2]->STAP_MINIT }}
                                </td>
                                <td class="align-center text-center">
                                    {{ $staps1[2]->STAP_KETINGGIAN }}cm
                                </td>
                            </tr>
                            @if (count($staps1) >= 4)
                                <tr>
                                    <td>
                                        @if ($staps1[3]->STAP_KETINGGIAN >= 150)
                                            <span
                                                class="badge badge-secondary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                                {{ __('message.air_pasang') }}
                                            </span>
                                        @else
                                            <span
                                                class="badge badge-tertiary badge-sm rounded-pill text-uppercase px-2 py-1 me-1">
                                                {{ __('message.air_surut') }}
                                            </span>
                                        @endif
                                    </td>
                                    <td class="align-center text-center">
                                        {{ str_pad($staps1[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . $staps1[3]->STAP_MINIT }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $staps1[3]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
