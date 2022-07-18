<div>
    <div class="row pb-4">
        <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
            <div class="col mb-4 mb-lg-0">
                <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow"
                    id="accordion200">
                    {{-- Pertukaran Pegawai --}}
                    <!-- 1 -->
                    <div class="card card-default">
                        <div class="card-header" id="collapse200HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false"
                                    aria-controls="collapse200One">
                                    Pertukaran Pegawai
                                </a>
                            </h4>
                        </div>
                        <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne"
                            data-bs-parent="#accordion200">
                            <div class="card-body pt-0">
                                <div class="row kotak-filter">
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Kata Kunci</label>
                                        <input class="form-control border-color-quaernary" type="text"
                                            placeholder="Title/Code" aria-label="default color input example"
                                            id="pertukaran-pegawai-filter-text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="form-label mb-1 text-2">Pilih</label>
                                        <div class="custom-select-1">
                                            <select class="form-select form-control  border-color-quaernary h-auto"
                                                name="" id="pertukaran-pegawai-filter-selection" required>
                                                <option value="">Choose...</option>
                                                <option value="Lantikan Baharu">Lantikan Baharu</option>
                                                <option value="Bertukar Negeri">Bertukar Negeri</option>
                                                <option value="Bertukar Bahagian">Bertukar Bahagian</option>
                                                <option value="Bertukar Jabatan/Kementerian">Bertukar
                                                    Jabatan/Kementerian</option>
                                                <option value="Bertukar Seksyen">Bertukar Seksyen</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filtering - END -->
                                <!-- Datatable - START -->
                                <table id="pertukaranPegawai-table" class="table table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="table-title-jupem align-middle">#</th>
                                            <th class="table-title-jupem align-middle">TARIKH PERTUKARAN</th>
                                            <th class="table-title-jupem align-middle">NAMA PEGAWAI</th>
                                            <th class="table-title-jupem align-middle">DARI</th>
                                            <th class="table-title-jupem align-middle">KE</th>
                                            <th class="table-title-jupem align-middle">STATUS PERTUKARAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pertukaran as $item)
                                            <tr>
                                                <td class="text-left align-middle text-uppercase">
                                                    {{ $loop->iteration }}</td>
                                                <td class="text-left align-middle text-uppercase">
                                                    {{-- {{ $item->tarikh_pertukaran-> }}</td> --}}
                                                    {{ \Carbon\Carbon::parse($item->tarikh_pertukaran)->format('d-m-Y') }}
                                                </td>
                                                <td class="text-left align-middle text-uppercase">{{ $item->name }}
                                                </td>
                                                <td class="text-left align-middle text-uppercase">
                                                    {{ $item->jawatan_dari_my }}</td>
                                                <td class="text-left align-middle text-uppercase">
                                                    {{ $item->jawatan_ke_my }}</td>
                                                <td class="text-left align-middle text-uppercase">
                                                    {{ $item->status_pertukaran_my }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
