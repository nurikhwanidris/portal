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
                                    {{ __('message.Tender') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="show collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
                                        <input wire:model='searchTender'
                                            class="form-control border-color-quaernary filter-text" type="text"
                                            id="tender-filter-text" aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
                                        <div class="custom-select-1">
                                            <select wire:model='selectTenderYear'
                                                class="form-select form-control  border-color-quaernary h-auto filter-year"
                                                id="tender-filter-year" name="dd-nama" required>
                                                <option value="">{{ __('message.choose') }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tender - START -->
                                <div class="row">
                                    <div class="col">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>No. Siri Perolehan</th>
                                                        <th>Tajuk Perolehan</th>
                                                        <th>Syarikat</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tenders as $tender)
                                                        <tr>
                                                            <td>{{ $tender->siri_perolehan }}</td>
                                                            <td>{{ $tender->tajuk_perolehan }}</td>
                                                            <td>{{ $tender->nama_syarikat }}</td>
                                                            <td>RM {{ number_format($tender->nilai_perolehan, 2, '.', ',') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {!! $tenders->links() !!}
                                </div>
                                <!-- Tender - END -->
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Two" aria-expanded="false"
                                    aria-controls="collapse200Two">
                                    {{ __('message.sebut_harga') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Two" class="show collapse" aria-labelledby="collapse200HeadingTwo"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
                                        <input class="form-control border-color-quaernary filter-text" type="text"
                                            wire:model='searchQuote' id="sebut-harga-filter-text"
                                            aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
                                        <div class="custom-select-1">
                                            <select
                                                class="form-select form-control  border-color-quaernary h-auto filter-year"
                                                wire:model='selectQuoteYear' required>
                                                <option value="">{{ __('message.choose') }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table -->
                                <!-- Sebut Harga - START -->
                                <div class="row">
                                    <div class="col">
<div class="table-responsive">
                                            <table class="table table-bordered table-hover table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>No. Siri Perolehan</th>
                                                        <th>Tajuk Perolehan</th>
                                                        <th>Syarikat</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($quotes as $quote)
                                                        <tr>
                                                            <td>{{ $quote->siri_perolehan }}</td>
                                                            <td>{{ $quote->tajuk_perolehan }}</td>
                                                            <td>{{ $quote->nama_syarikat }}</td>
                                                            <td>RM {{ number_format($quote->nilai_perolehan, 2, '.', ',') }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {!! $quotes->links() !!}
                                </div>
                                <!-- Sebut Harga - END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
