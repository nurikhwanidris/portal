<div>
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{ __('message.Announcement') }}</div>
        </div>
    </div>
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">{{ __('message.Search') }}</label>
            <input class="form-control border-color-quaernary filter-text" type="text" id="pengumuman-filter-text"
                aria-label="default color input example">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">{{ __('message.Select Year') }}</label>
            <div class="custom-select-1">
                <select class="form-select form-control  border-color-quaernary h-auto filter-year"
                    id="pengumuman-filter-year" required>
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
    <table id="pengumuman-table" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="table-title-jupem text-center">#</th>
                <th class="table-title-jupem">{{ __('message.Title') }}</th>
                <th class="table-title-jupem d-none">{{ __('message.Year') }}</th>
                <th class="text-center table-title-jupem">{{ __('message.Date') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengumuman as $item)
                <tr>
                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                    <td class="align-middle w-75">
                        {{-- <a href="/pengumuman/{{ $item->id }}" target="_blank" rel="noopener noreferrer">
                            {{ $item->title_my }}
                        </a> --}}
                        <a href="{{ route('pengumuman-read', [app()->getLocale(), 'id' => $item->id]) }}"
                            target="_blank">
                            @if (app()->getLocale() == 'ms')
                                {{ $item->title_my }}
                            @elseif ($item->title_en == null)
                                {{ $item->title_my }}
                            @else
                                {{ $item->title_en }}
                            @endif
                        </a>
                    </td>
                    <td class="align-middle d-none">
                        {{ Carbon\Carbon::parse($item->show)->format('Y') }}
                    </td>
                    <td class="text-center align-middle w-25">
                        {{ Carbon\Carbon::parse($item->show)->format('d-m-Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Datatable - END -->
</div>
