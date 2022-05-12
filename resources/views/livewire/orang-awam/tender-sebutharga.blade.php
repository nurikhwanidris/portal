<div>
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Tender & Sebut Harga</div>
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
                                    Tender
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Carian</label>
                                        <input class="form-control border-color-quaernary" type="text"
                                            placeholder="Tajuk/Code Tender & Sebutharga"
                                            aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Pilih Tahun</label>
                                        <div class="custom-select-1">
                                            <select class="form-select form-control  border-color-quaernary h-auto"
                                                name="dd-nama" required>
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
                                <!-- Table -->
                                <!-- Datatable - START -->
                                <table id="example" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="table-title-jupem">#</th>
                                            <th class="table-title-jupem">Tajuk Tender</th>
                                            <th class="table-title-jupem">Kod</th>
                                            <th class="table-title-jupem">Tempoh</th>
                                            <th class="table-title-jupem">Masa</th>
                                            <th class="table-title-jupem">Taklimat</th>
                                            <th class="table-title-jupem">Lampiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tender as $item)
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
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Datatable - END -->
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200Two" aria-expanded="false"
                                    aria-controls="collapse200Two">
                                    Sebut Harga
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200Two" class="collapse" aria-labelledby="collapse200HeadingTwo"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <!--  Filtering -->
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Carian</label>
                                        <input class="form-control border-color-quaernary" type="text"
                                            placeholder="Tajuk/Code Tender & Sebutharga"
                                            aria-label="default color input example">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Pilih Tahun</label>
                                        <div class="custom-select-1">
                                            <select class="form-select form-control  border-color-quaernary h-auto"
                                                name="dd-nama" required>
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
                                <!-- Table -->
                                <!-- Datatable - START -->
                                <table id="example" class="table table-striped table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="table-title-jupem">#</th>
                                            <th class="table-title-jupem">Tajuk Sebut Harga</th>
                                            <th class="table-title-jupem">Kod</th>
                                            <th class="table-title-jupem">Tempoh</th>
                                            <th class="table-title-jupem">Masa</th>
                                            <th class="table-title-jupem">Taklimat</th>
                                            <th class="text-center table-title-jupem">Lampiran</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($quote as $item)
                                            <tr>
                                                <td class="align-middle">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ Str::limit($item->title_my, 30) }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ Str::limit($item->kod, 10) }}
                                                </td>
                                                <td class="align-middle"></td>
                                                <td class="align-middle">
                                                    {{ $item->masa }}
                                                </td>
                                                <td class="align-middle">
                                                    {{ Str::limit($item->taklimat, 20) }}
                                                </td>
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
                </div>
            </div>
        </div>
    </div>
    <!-- ACCORDION 1 - END -->
</div>
