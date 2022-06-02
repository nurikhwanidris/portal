<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{ __('message.Client Charter') }}</div>
        </div>
    </div>
    <!-- LIST TEXT - START -->
    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
        style="padding-top:0 !important;">
        <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
            <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                <li>
                    <i class="fas fa-check"></i>
                    {{ __('message.charter_1') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_2') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_3') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_4') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_5') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_6') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_7') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_8') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_9') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_10') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_11') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_12') }}
                </li>
                <li><i class="fas fa-check"></i>
                    {{ __('message.charter_13') }}
                </li>
            </ul>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <a href="{{ asset('storage/upload/piagam_pelanggan/' . $piagam[0]->filename_my) }}" class="btn btn-success"
            target="_blank"><i class="fas fa-download"></i> {{ __('message.Download') }}
            {{ $piagam[0]->title_my }}</a>
    </div>
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">{{ __('message.keyword') }}</label>
            <input class="form-control border-color-quaernary piagam-filter-text" type="text" placeholder="Tajuk"
                aria-label="default color input example" id="piagam-filter-text">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
            <div class="custom-select-1">
                <select class="form-select form-control  border-color-quaernary h-auto filter-select filter-year"
                    data-column="2" id="piagam-filter-year" name="dd-nama" required>
                    <option value="">Pilih</option>
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

    <div class="row">
        <div class="col-lg-12">
            <table id="piagam-table" class="table table-striped table-filter table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="table-title-jupem align-middle text-center">#</th>
                        <th class="table-title-jupem">{{ __('message.Title') }}</th>
                        <th class="align-middle text-center d-none">Tahun</th>
                        <th class="table-title-jupem text-center">{{ __('message.Attachment') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($piagam as $item)
                        <tr>
                            <td class=" align-middle text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="align-middle">
                                {{ $item->title_my }}
                            </td>
                            <td class="align-middle text-center d-none">
                                {{ $item->created_at->format('Y') }}
                            </td>
                            <td class="align-middle text-center">
                                <a href="{{ asset('storage/upload/piagam_pelanggan/' . $item->filename_my) }}"
                                    target="_blank">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
