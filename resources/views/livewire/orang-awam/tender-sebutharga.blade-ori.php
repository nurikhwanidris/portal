<div>
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{ __('message.Procurement Offer') }}</div>
        </div>
    </div>
    <!-- ACCORDION 1 - START -->
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
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
                                        <input class="form-control border-color-quaernary filter-text" type="text"
                                            placeholder="Tajuk/Code Tender & Sebutharga" id="tender-filter-text"
                                            aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
                                        <div class="custom-select-1">
                                            <select
                                                class="form-select form-control  border-color-quaernary h-auto filter-year"
                                                id="tender-filter-year" name="dd-nama" required>
                                                <option value="">{{ __('message.choose') }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                {{-- <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table -->
                                <!-- Datatable - START -->
                                <table id="tender-table" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center align-middle">#</th>
                                            <th class="align-middle">{{ __('message.Title') }}</th>
                                            <th class="d-none text-center align-middle">{{ __('message.Year') }}</th>
                                            {{-- <th class="align-middle">{{ __('message.Code') }}</th> --}}
                                            {{-- <th class="align-middle">{{ __('message.Period') }}</th> --}}
                                            {{-- <th class="align-middle">{{ __('message.Time') }}</th> --}}
                                            {{-- <th class="align-middle">{{ __('message.Briefing') }}</th> --}}
                                            <th class="text-center align-middle">{{ __('message.Attachment') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tender as $item)
                                            <tr>
                                                <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                                <td class="align-middle">
                                                    <a href="{{ route('tender-read', [app()->getLocale(), 'id' => $item->id]) }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        @if (app()->getLocale() == 'en')
                                                            {{ $item->title_en }}
                                                        @elseif ($item->title_en == null)
                                                            {{ $item->title_my }}
                                                        @else
                                                            {{ $item->title_my }}
                                                        @endif
                                                    </a>
                                                </td>
                                                <td class="text-center align-middle d-none">
                                                    {{ $item->created_at->format('Y') }}</td>
                                                {{-- <td class="align-middle">{{ Str::limit($item->kod, 10) }}</td> --}}
                                                {{-- <td class="align-middle">{{ $item->masa }}</td> --}}
                                                {{-- <td class="align-middle">{{ Str::limit($item->taklimat, 20) }}</td> --}}
                                                {{-- <td class="align-middle"></td> --}}
                                                <td class="align-middle text-center">
                                                    <a href="{{ asset('storage/upload/tender/' . $item->filename) }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Datatable - END -->
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
                        <div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
                                        <input class="form-control border-color-quaernary filter-text" type="text"
                                            placeholder="Tajuk/Code Tender & Sebutharga" id="sebut-harga-filter-text"
                                            aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
                                        <div class="custom-select-1">
                                            <select
                                                class="form-select form-control  border-color-quaernary h-auto filter-year"
                                                name="dd-nama" id="sebut-harga-filter-year" required>
                                                <option value="">{{ __('message.Choose') }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                {{-- <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table -->
                                <!-- Datatable - START -->
                                <table id="sebutHarga-table" class="table table-striped  table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="">#</th>
                                            <th class="">{{ __('message.Title') }}</th>
                                            <th class="text-center align-middle d-none">{{ __('message.Year') }}</th>
                                            {{-- <th class="">{{ __('message.Period') }}</th> --}}
                                            {{-- <th class="">{{ __('message.Time') }}</th> --}}
                                            {{-- <th class="">{{ __('message.Briefing') }}</th> --}}
                                            <th class="text-center ">{{ __('message.Attachment') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($quote as $item)
                                            <tr>
                                                <td class="align-middle">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="align-middle">
                                                    @if (app()->getLocale() == 'en')
                                                        {{ $item->title_en }}
                                                    @elseif ($item->title_en == null)
                                                        {{ $item->title_my }}
                                                    @else
                                                        {{ $item->title_my }}
                                                    @endif
                                                </td>
                                                <td class="text-center align-middle d-none">
                                                    {{ $item->created_at->format('Y') }}</td>
                                                {{-- <td class="align-middle">
                                                    {{ Str::limit($item->kod, 10) }}
                                                </td> --}}
                                                {{-- <td class="align-middle"></td>
                                                <td class="align-middle">
                                                    {{ $item->masa }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ Str::limit($item->taklimat, 20) }}
                                                </td> --}}
                                                <td class="text-center align-middle">
                                                    <a href="{{ asset('storage/upload/sebutharga/' . $item->filename) }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Datatable - END -->
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Three" aria-expanded="false"
                                    aria-controls="collapse200Three">
                                    {{ __('message.perolehan_berjaya') }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Three" class="collapse" aria-labelledby="collapse200HeadingThree"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
                                        <input class="form-control border-color-quaernary" type="text"
                                            placeholder="Tajuk/Code Tender & Sebutharga"
                                            aria-label="default color input example" id="perolehan-berjaya-filter-text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
                                        <div class="custom-select-1">
                                            <select class="form-select form-control  border-color-quaernary h-auto"
                                                name="dd-nama" id="perolehan-berjaya-filter-year" required>
                                                <option value="">{{ __('message.choose') }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table -->
                                <!-- Datatable - START -->
                                <table id="perolehan-table" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="table-title-jupem">#</th>
                                            <th class="table-title-jupem">{{ __('message.Title') }}</th>
                                            <th class="table-title-jupem">{{ __('message.Code') }}</th>
                                            <th class="table-title-jupem">{{ __('message.Period') }}</th>
                                            <th class="table-title-jupem">{{ __('message.Time') }}</th>
                                            <th class="table-title-jupem">{{ __('message.Briefing') }}</th>
                                            <th class="table-title-jupem">{{ __('message.Attachment') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($tender as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ Str::limit($item->title_my, 30) }}</td>
                                                <td>{{ Str::limit($item->kod, 10) }}</td>
                                                <td>{{ $item->masa }}</td>
                                                <td>{{ Str::limit($item->taklimat, 20) }}</td>
                                                <td></td>
                                                <td>
                                                    <a href="{{ asset('storage/upload/tender/' . $item->filename) }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                                <!-- Datatable - END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ACCORDION 1 - END -->
</div>
