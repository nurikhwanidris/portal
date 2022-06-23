<div>
    <div class="container" style="margin-bottom: 100px;">
        <!-- PAGE TITLE - START-->
        <div class="row">
            <div class="col">
                <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{ __('message.staps') }}</div>
            </div>
        </div>
        <!-- PAGE TITLE - END-->
        <!-- SUB TITLE - START-->
        <h2 class="font-weight-normal text-6 mb-3">{{ __('message.senarai_stesyen') }}</h2>
        <!-- SUB TITLE - END-->
        <!-- Button - Stesen - START -->
        <div class="row">
            <div class="col">
                <button wire:click='selectedStesen(1, "pulau-langkawi")' value="1"
                    class="btn btn-outline btn-quaternary mb-2">Pulau
                    Langkawi</button>
                <button wire:click='selectedStesen(2, "pulau-pinang")' value="2"
                    class="btn btn-outline btn-quaternary mb-2">Pulau
                    Pinang</button>
                <button wire:click='selectedStesen(3, "lumut")' value="3"
                    class="btn btn-outline btn-quaternary mb-2">Lumut</button>
                <button wire:click='selectedStesen(4,"perlabuhan-klang")' value="4"
                    class="btn btn-outline btn-quaternary mb-2">Perlabuhan
                    Klang</button>
                <button wire:click='selectedStesen(5,"tanjung-keling")' value="5"
                    class="btn btn-outline btn-quaternary mb-2">Tanjung
                    Keling</button>
                <button wire:click='selectedStesen(6,"kukup")' value="6"
                    class="btn btn-outline btn-quaternary mb-2">Kukup</button>
                <button wire:click='selectedStesen(7,"johor-bahru")' value="7"
                    class="btn btn-outline btn-quaternary mb-2">Johor
                    Bahru</button>
                <button wire:click='selectedStesen(8,"tanjung-sedili")' value="8"
                    class="btn btn-outline btn-quaternary mb-2">Tanjung
                    Sedili</button>
                <button wire:click='selectedStesen(9,"pulau-tioman")' value="9"
                    class="btn btn-outline btn-quaternary mb-2">Pulau
                    Tioman</button>
                <button wire:click='selectedStesen(10,"tanjung-gelang")' value="10"
                    class="btn btn-outline btn-quaternary mb-2">Tanjung
                    Gelang</button>
                <button wire:click='selectedStesen(11,"cendering")' value="11"
                    class="btn btn-outline btn-quaternary mb-2">Cendering</button>
                <button wire:click='selectedStesen(12,"geting")' value="12"
                    class="btn btn-outline btn-quaternary mb-2">Geting</button>
                <button wire:click='selectedStesen(13,"pulau-lekai")' value="13"
                    class="btn btn-outline btn-quaternary mb-2">Pulau
                    Lekai</button>
                <button wire:click='selectedStesen(14,"sejingkat")' value="14"
                    class="btn btn-outline btn-quaternary mb-2">Sejingkat</button>
                <button wire:click='selectedStesen(15,"bintulu")' value="15"
                    class="btn btn-outline btn-quaternary mb-2">Bintulu</button>
                <button wire:click='selectedStesen(16,"miri")' value="16"
                    class="btn btn-outline btn-quaternary mb-2">Miri</button>
                <button wire:click='selectedStesen(22,"labuan")' value="22"
                    class="btn btn-outline btn-quaternary mb-2">Labuan</button>
                <button wire:click='selectedStesen(17,"kota-kinabalu")' value="17"
                    class="btn btn-outline btn-quaternary mb-2">Kota
                    Kinabalu</button>
                <button wire:click='selectedStesen(18,"kudat")' value="18"
                    class="btn btn-outline btn-quaternary mb-2">Kudat</button>
                <button wire:click='selectedStesen(19,"sandakan")' value="19"
                    class="btn btn-outline btn-quaternary mb-2">Sandakan</button>
                <button wire:click='selectedStesen(20,"lahad-datu")' value="20"
                    class="btn btn-outline btn-quaternary mb-2">Lahad
                    Datu</button>
                <button wire:click='selectedStesen(21,"tawau")' value="21"
                    class="btn btn-outline btn-quaternary mb-2">Tawau</button>
            </div>
        </div>
        <!-- Button - Stesen - END -->

        <!-- Button - Pilih hari - START -->
        <div class="row my-3">
            <div class="col">
                <div class="float-end">
                    <a href="#" class="btn btn-success mb-2" id="2Hari">{{ __('message.2_hari') }}</a>
                    <a href="#" class="btn btn-success mb-2" id="7Hari">{{ __('message.7_hari') }}</a>
                </div>
            </div>
        </div>
        <section class="section section-default border-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-2 text-center">
                        <h3>
                            {!! __('message.jadual_stesyen', ['STESEN' => $namaStesen]) !!}
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-5">
                        <p class="mb-0 para-align text-center">
                            {!! __('message.huraian', ['STESEN' => $namaStesen]) !!}
                        </p>
                    </div>
                </div>
                {{-- <div class="row">
                    {{ $namaStesen }}
                </div> --}}
                <div class="row" id="2-hari">
                    <!-- Table 1 -->
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="tajuk-tab-staps">
                                    <th colspan="3">{{ __('message.jadual_header_current') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[3]->STAP_KETINGGIAN }}cm
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
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen1[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen1[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen1[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen1[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen1) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen1[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen1[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen1[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen1[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen1) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen1[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen1[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen1[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen1[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen1) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen1[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen1[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen1[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen1[3]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" id="7-hari" style="display: none;">
                    <!-- Table 1 -->
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="tajuk-tab-staps">
                                    <th colspan="3">{{ __('message.jadual_header_3rd_day') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen[3]->STAP_KETINGGIAN }}cm
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
                                    <th colspan="3">{{ __('message.jadual_header_4th_day') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen2[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen2[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen2[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen2[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen2) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen2[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen2[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen2[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen2[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen2) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen2[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen2[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen2[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen2[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen2) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen2[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen2[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen2[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen2[3]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Table 3 -->
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="tajuk-tab-staps">
                                    <th colspan="3">{{ __('message.jadual_header_5th_day') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen3[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen3[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen3[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen3[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen3) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen3[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen3[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen3[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen3[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen3) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen3[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen3[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen3[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen3[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen3) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen3[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen3[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen3[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen3[3]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Table 4 -->
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="tajuk-tab-staps">
                                    <th colspan="3">{{ __('message.jadual_header_6th_day') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen4[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen4[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen4[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen4[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen4) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen4[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen4[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen4[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen4[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen4) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen4[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen4[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen4[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen4[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen4) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen4[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen4[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen4[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen4[3]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Table 5 -->
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="tajuk-tab-staps">
                                    <th colspan="3">{{ __('message.jadual_header_7th_day') }}</th>
                                </tr>
                                <tr>
                                    <th class="align-middle">{{ __('message.pasang_surut') }}</th>
                                    <th class="align-middle text-center">
                                        {{ __('message.waktu_pasang_surut') }}</th>
                                    <th class="align-middle text-center">{{ __('message.ketinggian_air') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @if ($stesen5[0]->STAP_KETINGGIAN >= 150)
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
                                        {{ str_pad($stesen5[0]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen5[0]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                    </td>
                                    <td class="align-center text-center">
                                        {{ $stesen5[0]->STAP_KETINGGIAN }}cm
                                    </td>
                                </tr>
                                @if (count($stesen5) >= 2)
                                    <tr>
                                        <td>
                                            @if ($stesen5[1]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen5[1]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen5[1]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen5[1]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen5) >= 3)
                                    <tr>
                                        <td>
                                            @if ($stesen5[2]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen5[2]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen5[2]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen5[2]->STAP_KETINGGIAN }}cm
                                        </td>
                                    </tr>
                                @endif
                                @if (count($stesen5) >= 4)
                                    <tr>
                                        <td>
                                            @if ($stesen5[3]->STAP_KETINGGIAN >= 150)
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
                                            {{ str_pad($stesen5[3]->STAP_JAM, 2, 0, STR_PAD_LEFT) . ':' . str_pad($stesen5[3]->STAP_MINIT, 2, 0, STR_PAD_LEFT) }}
                                        </td>
                                        <td class="align-center text-center">
                                            {{ $stesen5[3]->STAP_KETINGGIAN }}cm
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
</div>
