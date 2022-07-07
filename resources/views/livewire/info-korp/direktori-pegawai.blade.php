<div>
    <div class="container pt-3 pb-2" style="margin-bottom: 100px;">
        <div class="row pt-2">

            <div class="row">
                <div class="col">
                    <div class="text-title-semasa-11" style="padding-bottom: 20px;">
                        Direktori Pegawai
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                        <div class="col">
                            <span>Bahagian</span>
                            <select wire:model='selectedBahagian' class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option value="1" class="department_dropdown_option">PEJABAT KETUA PENGARAH UKUR
                                    DAN
                                    PEMETAAN MALAYSIA</option>
                                <option value="2" class="department_dropdown_option">PEJABAT TIMBALAN KETUA
                                    PENGARAH
                                    UKUR DAN PEMETAAN I</option>
                                <option value="3" class="department_dropdown_option">PEJABAT TIMBALAN KETUA
                                    PENGARAH
                                    UKUR DAN PEMETAAN II</option>
                                <option value="5" class="department_dropdown_option">BAHAGIAN DASAR DAN
                                    PENYELARASAN
                                    PEMETAAN</option>
                                <option value="6" class="">-- Seksyen Dasar Pemetaan</option>
                                <option value="7" class="">-- Seksyen Penyelarasan Pemetaan</option>
                                <option value="8" class="">-- Seksyen Pentadbiran Pemetaan</option>
                                <option value="9" class="department_dropdown_option">BAHAGIAN KADASTER</option>
                                <option value="12" class="">-- Seksyen Naziran Kadaster</option>
                                <option value="10" class="">-- Seksyen Pengurusan dan Pembangunan
                                    Kadaster</option>
                                <option value="11" class="">-- Seksyen Perundangan Kadaster</option>
                                <option value="13" class="department_dropdown_option">BAHAGIAN GEOSPATIAL PERTAHANAN
                                </option>
                                <option value="15" class="">-- Cawangan Urus Tadbir</option>
                                <option value="16" class="">-- Seksyen Perkhidmatan Geo-Dataraya
                                </option>
                                <option value="14" class="">-- Seksyen Teknikal Geospatial Pertahanan
                                </option>
                                <option value="17" class="">-- Seksyen Pembangunan Keupayaan</option>
                                <option value="91" class="">-- Seksyen Keselamatan dan Keupayaan
                                    Sistem
                                </option>
                                <option value="92" class="">-- Seksyen Dasar dan Penyelarasan
                                    Geospatial
                                    Pertahanan</option>
                                <option value="18" class="department_dropdown_option">BAHAGIAN EHWAL PERSEMPADANAN
                                </option>
                                <option value="19" class="">-- Seksyen Sempadan Darat Antarabangsa
                                </option>
                                <option value="21" class="">-- Seksyen Sempadan Maritim Antarabangsa
                                </option>
                                <option value="20" class="">-- Seksyen Sempadan Negeri dan
                                    Penyelarasan
                                </option>
                                <option value="22" class="department_dropdown_option">BAHAGIAN PANGKALAN DATA
                                    GEOSPATIAL NEGARA</option>
                                <option value="28" class="">-- Seksyen Kawalan Kualiti</option>
                                <option value="27" class="">-- Seksyen Pembangunan Data Geospatial
                                </option>
                                <option value="26" class="">-- Seksyen Perkhidmatan Geospatial
                                </option>
                                <option value="25" class="">-- Seksyen Pengurusan Maklumat Dan
                                    Pembangunan Sistem</option>
                                <option value="29" class="department_dropdown_option">BAHAGIAN KARTOGRAFI DAN GIS
                                </option>
                                <option value="33" class="">-- Seksyen Pentadbiran dan Kewangan
                                </option>
                                <option value="31" class="">-- Seksyen Data Geospatial</option>
                                <option value="30" class="">-- Seksyen Penerbitan Peta Digital
                                </option>
                                <option value="32" class="">-- Seksyen Percetakan</option>
                                <option value="34" class="department_dropdown_option">BAHAGIAN PEMETAAN UTILITI
                                </option>
                                <option value="35" class="">-- Seksyen Naziran dan Pembangunan
                                    Pangkalan
                                    Data</option>
                                <option value="36" class="">-- Seksyen Penyelarasan dan Pentadbiran
                                </option>
                                <option value="37" class="department_dropdown_option">BAHAGIAN UKUR GEODETIK
                                </option>
                                <option value="38" class="">-- Seksyen Graviti dan Falak</option>
                                <option value="40" class="">-- Seksyen Infrastruktur Rujukan Spatial
                                </option>
                                <option value="39" class="">-- Seksyen Infrastruktur Rujukan Tegak
                                </option>
                                <option value="41" class="">-- Seksyen Perkhidmatan dan Penyelarasan
                                </option>
                                <option value="42" class="department_dropdown_option">BAHAGIAN PERANCANGAN DAN
                                    KORPORAT</option>
                                <option value="46" class="">-- Seksyen Inovasi Dan Dokumentasi
                                </option>
                                <option value="44" class="">-- Seksyen Pembangunan Kompetensi</option>
                                <option value="45" class="">-- Seksyen Pengurusan Korporat</option>
                                <option value="43" class="">-- Seksyen Pengurusan Sistem Maklumat
                                </option>
                                <option value="47" class="">-- Seksyen Penyelarasan Pembangunan
                                </option>
                                <option value="48" class="">-- Seksyen Perancangan Dan Dasar</option>
                                <option value="49" class="department_dropdown_option">BAHAGIAN KHIDMAT PENGURUSAN
                                </option>
                                <option value="51" class="">-- Seksyen Kewangan</option>
                                <option value="52" class="">-- Seksyen Pentadbiran</option>
                                <option value="50" class="">-- Seksyen Sumber Manusia</option>
                                <option value="53" class="department_dropdown_option">BAHAGIAN PEMETAAN TOPOGRAFI
                                    SEMENANJUNG</option>
                                <option value="57" class="">-- Pejabat Topografi Wilayah Kuala Lumpur
                                </option>
                                <option value="56" class="">-- Pejabat Topografi Wilayah Kuantan
                                </option>
                                <option value="55" class="">-- Pejabat Topografi Wilayah Segamat
                                </option>
                                <option value="54" class="">-- Pejabat Topografi Wilayah Taiping
                                </option>
                                <option value="60" class="">-- Seksyen Fotogrametri</option>
                                <option value="58" class="">-- Seksyen Pangkalan Data Topografi
                                </option>
                                <option value="59" class="">-- Seksyen Tadbir Urus dan Maklumat
                                    Geospatial</option>
                                <option value="61" class="department_dropdown_option">BAHAGIAN PEMETAAN TOPOGRAFI
                                    SABAH</option>
                                <option value="93" class="">-- Cawangan Pentadbiran Dan Kewangan
                                </option>
                                <option value="62" class="">-- Seksyen Pengurusan Maklumat Geospatial
                                </option>
                                <option value="64" class="">-- Seksyen Penawanan Data </option>
                                <option value="63" class="">-- Seksyen Pangkalan Data Topografi
                                </option>
                                <option value="65" class="">-- Pejabat Topografi Wilayah Kota Kinabalu
                                </option>
                                <option value="67" class="">-- Pejabat Topografi Wilayah Sandakan
                                </option>
                                <option value="66" class="">-- Pejabat Topografi Wilayah Tawau
                                </option>
                                <option value="68" class="department_dropdown_option">BAHAGIAN PEMETAAN TOPOGRAFI
                                    SARAWAK</option>
                                <option value="75" class="">-- Cawangan Pentadbiran Dan Kewangan
                                </option>
                                <option value="70" class="">-- Cawangan Aset</option>
                                <option value="72" class="">-- Seksyen Penawanan Data</option>
                                <option value="71" class="">-- Seksyen Pengurusan Maklumat Geospatial
                                </option>
                                <option value="76" class="">-- Seksyen Pangkalan Data Topografi
                                </option>
                                <option value="74" class="">-- Pejabat Topografi Wilayah Kuching
                                </option>
                                <option value="69" class="">-- Pejabat Topografi Wilayah Miri</option>
                                <option value="73" class="">-- Pejabat Topografi Wilayah Sibu</option>
                                <option value="80" class="department_dropdown_option">JUPEM JOHOR</option>
                                <option value="83" class="department_dropdown_option">JUPEM KEDAH</option>
                                <option value="82" class="department_dropdown_option">JUPEM KELANTAN</option>
                                <option value="89" class="department_dropdown_option">JUPEM MELAKA</option>
                                <option value="86" class="department_dropdown_option">JUPEM NEGERI SEMBILAN
                                </option>
                                <option value="79" class="department_dropdown_option">JUPEM PAHANG</option>
                                <option value="78" class="department_dropdown_option">JUPEM PERAK</option>
                                <option value="88" class="department_dropdown_option">JUPEM PERLIS</option>
                                <option value="90" class="department_dropdown_option">JUPEM PULAU PINANG</option>
                                <option value="81" class="department_dropdown_option">JUPEM SELANGOR</option>
                                <option value="87" class="department_dropdown_option">JUPEM TERENGGANU</option>
                                <option value="85" class="department_dropdown_option">JUPEM WP KUALA LUMPUR &
                                    PUTRAJAYA</option>
                                <option value="84" class="department_dropdown_option">JUPEM WP LABUAN</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin-top: 10px;">
                        Nama Pegawai
                        <form role="search" action="{{ route('carian-pegawai', app()->getLocale()) }}"
                            method="get">
                            <div class="input-group rounded">
                                <input type="search" class="form-control rounded form-control-md" name="nama"
                                    placeholder="Sila taip nama pegawai" aria-label="Search"
                                    aria-describedby="search-addon" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5 order-md-2 mb-4 mb-lg-0">
                        @if ($bahagian[0]->name_my == 'KOSONG')
                            <img src="{{ asset('storage/upload/img/default-potrait-1648800867.jpg') }}"
                                class="img-fluid" alt="" width="400" height="400">
                        @else
                            <img src="{{ asset('storage/upload/img/pegawai/' . $bahagian[0]->photo) }}"
                                class="img-fluid" alt="" width="400" height="400">
                        @endif
                    </div>
                    <div class="col-md-7 order-2">
                        <ul class="list list-icons list-icons-style-2 list-icons-sm mt-2 ul-kite">
                            <h4 class="font-weight-bold mb-2 size-text-standard">1.
                                {{ $bahagian[0]->name_my }}
                            </h4>
                            <h2 class="font-weight-bold mb-0 pt-0 mt-0 size-text-standard-2">
                                {{ $bahagian[0]->jawatan_my }}
                            </h2>
                            <li class="li-kite">
                                <i class="fas fa-envelope top-6"></i>
                                <strong>Email:</strong><br>
                                <a href="mailto:{{ $bahagian[0]->email }}">{{ $bahagian[0]->email }}</a>
                            </li>
                            <li class="li-kite">
                                <i class="fas fa-phone top-6"></i>
                                <strong>Tel:</strong><br>
                                {{ $bahagian[0]->phone_no }}
                            </li>
                            <li class="li-kite">
                                <i class="fas fa-fax top-6"></i>
                                <strong>Faks:</strong><br>
                                {{ $bahagian[0]->fax_no }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row pb-0 pt-3 mb-5">
                    @foreach ($bahagian as $key => $pegawai)
                        @if ($key > 0)
                            @if ($pegawai->name_my == 'KOSONG')
                                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset('storage/upload/img/default-potrait-1648800867.jpg') }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <span class="thumb-info-caption">
                                            <ul class="list list-icons list-icons-style-2 list-icons-sm mt-2  ul-kite">
                                                <h4 class="font-weight-bold mb-2 size-text-standard">
                                                    {{ $loop->iteration }}.
                                                    {{ $pegawai->name_my }}</h4>
                                                </h4>
                                                <h2 class="font-weight-bold mb-0 pt-0 mt-0 size-text-standard-2">
                                                    {{ $pegawai->jawatan_my }}
                                                </h2>
                                                <li class="li-kite">
                                                    <i class="fas fa-envelope top-6"></i>
                                                    <strong>Email:</strong><br>
                                                    <a
                                                        href="mailto:{{ $pegawai->email }}">{{ $pegawai->email }}</a>
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-phone top-6"></i>
                                                    <strong>Tel:</strong><br>
                                                    {{ $pegawai->phone_no }}
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-fax top-6"></i>
                                                    <strong>Faks:</strong><br>
                                                    {{ $pegawai->fax_no }}
                                                </li>
                                            </ul>
                                        </span>
                                    </span>
                                </div>
                            @else
                                <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg thumb-info-no-zoom">
                                        <span class="thumb-info-wrapper">
                                            <img src="{{ asset('storage/upload/img/pegawai/' . $pegawai->photo) }}"
                                                class="img-fluid" alt="">
                                        </span>
                                        <span class="thumb-info-caption">
                                            <ul class="list list-icons list-icons-style-2 list-icons-sm mt-2  ul-kite">
                                                <h4 class="font-weight-bold mb-2 size-text-standard">
                                                    {{ $loop->iteration }}.
                                                    {{ $pegawai->name_my }}</h4>
                                                </h4>
                                                <h2 class="font-weight-bold mb-0 pt-0 mt-0 size-text-standard-2">
                                                    {{ $pegawai->jawatan_my }}
                                                </h2>
                                                <li class="li-kite">
                                                    <i class="fas fa-envelope top-6"></i>
                                                    <strong>Email:</strong><br>
                                                    <a
                                                        href="mailto:{{ $pegawai->email }}">{{ $pegawai->email }}</a>
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-phone top-6"></i>
                                                    <strong>Tel:</strong><br>
                                                    {{ $pegawai->phone_no }}
                                                </li>
                                                <li class="li-kite">
                                                    <i class="fas fa-fax top-6"></i>
                                                    <strong>Faks:</strong><br>
                                                    {{ $pegawai->fax_no }}
                                                </li>
                                            </ul>
                                        </span>
                                    </span>
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- <div class="col-lg-3 mt-4 mt-lg-0">
                <aside class="sidebar">
                    <h5 class="font-weight-semi-bold">Senarai Seksyen</h5>
                    @foreach ($bahagiann as $item)
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    {{ $item->name_my }}
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </aside>
            </div> --}}
        </div>
    </div>
</div>
