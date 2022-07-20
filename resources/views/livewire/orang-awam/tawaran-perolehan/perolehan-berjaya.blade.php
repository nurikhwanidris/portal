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
                                        @foreach ($tenders as $tender)
                                            <div class="row p-0 my-2">
                                                <span class="col-1 align-middle"
                                                    style="font-size: 0.85em; font-weight: bold;">
                                                    {{ $loop->iteration }}
                                                </span>
                                                <div class="col-11">
                                                    <span style="font-size: 0.85em; color: #237bfd; font-weight: bold;">
                                                        @if (app()->getLocale() == 'en')
                                                            {{ $tender->title_en }}
                                                        @else
                                                            {{ $tender->title_my }}
                                                        @endif
                                                    </span>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Code') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ $tender->kod }}
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Briefing') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ $tender->taklimat }}
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Attachment') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            <a href="{{ asset('storage/upload/tender/' . $tender->filename) }}"
                                                                target="_blank"
                                                                rel="noopener noreferrer">{{ __('message.Download') }}
                                                                <i class="fas fa-file-download"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
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
                                        @foreach ($quotes as $quote)
                                            <div class="row p-0 my-2">
                                                <span class="col-1 align-middle"
                                                    style="font-size: 0.85em; font-weight: bold;">
                                                    {{ $loop->iteration }}
                                                </span>
                                                <div class="col-11">
                                                    <span
                                                        style="font-size: 0.85em; color: #237bfd; font-weight: bold;">
                                                        @if (app()->getLocale() == 'en')
                                                            {{ $quote->title_en }}
                                                        @else
                                                            {{ $quote->title_my }}
                                                        @endif
                                                    </span>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Code') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ $quote->kod }}
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Briefing') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ $quote->taklimat }}
                                                        </span>
                                                    </div>
                                                    <div class="row">
                                                        <span class="col-2 align-middle"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            {{ __('message.Attachment') }}
                                                        </span>
                                                        <span class="col-10"
                                                            style="font-size: 0.85em; font-weight: bold;">
                                                            <a href="{{ asset('storage/upload/sebutharga/' . $quote->filename) }}"
                                                                target="_blank"
                                                                rel="noopener noreferrer">{{ __('message.Download') }}
                                                                <i class="fas fa-file-download"></i>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-0 my-2">

                                            </div>
                                            <div class="row p-0 my-2">

                                            </div>
                                            <div class="row p-0 my-2">

                                            </div>
                                            <hr>
                                        @endforeach
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
