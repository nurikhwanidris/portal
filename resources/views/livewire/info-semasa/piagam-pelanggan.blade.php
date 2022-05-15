<div>
    <!-- PAGE TITLE - START-->
    <div class="row">
        <div class="col">
            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Piagam Pelanggan</div>
        </div>
    </div>
    <!-- LIST TEXT - START -->
    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
        style="padding-top:0 !important;">
        <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
            <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                <li>
                    <i class="fas fa-check"></i>
                    Menyiapkan kerja ukur kadaster sehingga penyediaan Pelan Akui dalam tempoh tidak melebihi 180 hari
                    dari tarikh penerimaan Permohonan Ukur yang lengkap dan teratur serta didaftarkan dalam sistem.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan penyemakan ke atas kerja kerja Jurukur Tanah Berlesen (JTB) disiapkan dalam tempoh 60
                    hari dari tarikh penyerahan dokumen yang lengkap dan teratur.
                </li>
                <li><i class="fas fa-check"></i>
                    Memproses Pelan Strata dalam tempoh 30 hari dan Pelan Akui Strata dalam tempoh 50 hari dari tarikh
                    penerimaan permohonan yang lengkap dan teratur.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan pengeluaran nombor-nombor lot dilakukan dalam tempoh tidak melebihi 7 hari dari tarikh
                    permohonan yang lengkap dan teratur daripada Jurukur Tanah Berlesen.
                </li>
                <li><i class="fas fa-check"></i>
                    Menyedia serta membekalkan data-data ukur untuk penyediaan suratan hakmilik ke Pejabat Tanah/Pejabat
                    Pengarah Tanah dan Galian dalam tempoh 7 hari dari penerimaan permohonan yang sempurna dan teratur.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan dokumen geospatial terperingkat dibekalkan dalam masa 2 hari selepas menerima kelulusan
                    tapisan keselamatan.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan data pasca proses MyRTKNet dapat diurus dan dibekalkan dalam masa 4 jam.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan sebarang permohonan pembelian maklumat geodetik tidak terhad dapat diurus dan dibekalkan
                    dalam masa 1 hari.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan sebarang permohonan perkhidmatan transformasi koordinat, penukaran koordinat, unjuran
                    peta dan interpolasi geoid dapat diurus dan dibekalkan dalam masa 1 hari.
                </li>
                <li><i class="fas fa-check"></i>
                    Memproses Pelan Strata dalam tempoh 30 hari dan Pelan Akui Strata dalam tempoh 50 hari dari tarikh
                    penerimaan permohonan yang lengkap dan teratur.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan sebarang permohonan perkhidmatan / pembelian bagi setiap salinan data ukur/peta tidak
                    terhad di kaunter JUPEM dapat diuruskan dalam masa 1 jam.
                </li>
                <li><i class="fas fa-check"></i>
                    Memastikan data-data ukur dapat diakses dan diperolehi melalui eBiz pada capaian 99.5% setahun.
                </li>
                <li><i class="fas fa-check"></i>
                    Membuat pembayaran bil dan invois tidak melebihi 14 hari dari tarikh penerimaan lengkap diterima.
                </li>
                <li><i class="fas fa-check"></i>
                    Mengeluarkan akuan penerimaan dan maklumbalas awal bagi aduan dalam tempoh 1 hari bekerja dari
                    tarikh aduan diterima</li>
            </ul>
        </div>
    </div>
    <div class="row mt-2 mb-4">
        <a href="{{ asset('storage/upload/piagam_pelanggan/' . $piagam[0]->filename_my) }}" class="btn btn-success"
            target="_blank"><i class="fas fa-download"></i> Muat Turun
            {{ $piagam[0]->title_my }}</a>
    </div>
    <div class="row kotak-filter">
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Kata Kunci</label>
            <input class="form-control border-color-quaernary piagam-filter-text" type="text" placeholder="Tajuk"
                aria-label="default color input example" id="piagam-filter-text">
        </div>
        <div class="form-group col-lg-6">
            <label class="form-label mb-1 text-2">Pilih Tahun</label>
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
                        <th class="table-title-jupem">Tajuk</th>
                        <th class="align-middle text-center d-none">Tahun</th>
                        <th class="table-title-jupem text-center">Muat Turun</th>
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
