<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Sorotan Peristiwa</div>
        </div>
    </div>
    <!-- PAGE TITLE - END-->
    <!-- Filtering - START -->
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Keyword</label>
            <input class="form-control border-color-quaernary" id="beritaTerkini-filter-text" type="text"
                placeholder="Title/Code" aria-label="default color input example">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Select</label>
            <div class="custom-select-1">
                <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama"
                    id="beritaTerkini-filter-year" required>
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
    <!-- Filtering - END -->
    <!-- Datatable - START -->
    <table id="beritaTerkini-table" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="table-title-jupem">#</th>
                <th class="table-title-jupem">TAJUK</th>
                <th class="d-none">Tahun</th>
                <th class="table-title-jupem">TARIKH PENGUMUMAN</th>
                <th class="table-title-jupem">LAMPIRAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sorotan as $item)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        <a href="/info-semasa/berita-terkini/{{ $item->id }}" target="_blank"
                            rel="noopener noreferrer">{{ $item->title_my }}</a>
                    </td>
                    <td class="d-none">
                        {{ $item->created_at->format('Y') }}
                    </td>
                    <td>
                        {{ $item->created_at->toDatestring() }}
                    </td>
                    <td>
                        <a href="/info-semasa/berita-terkini/{{ $item->id }}" target="_blank"
                            rel="noopener noreferrer">Lampiran</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Datatable - END -->
</div>
