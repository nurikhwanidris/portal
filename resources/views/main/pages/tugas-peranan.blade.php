<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Laman Web Rasmi JUPEM</title>
    <meta name="keywords" content="Laman Web Rasmi JUPEM" />
    <meta name="description" content="Laman Web Rasmi JUPEM">
    <meta name="author" content="JUPEM">

    <!-- CSS & Script -->
    @include('main.layouts.partials.headerlink')

    {{-- Livewire --}}
    @livewireStyles
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header-inner')
        <!-- Header - Logo + Icons 4 + Search - END -->

        <div role="main" class="main">

            <!-- Title Section - START -->
            {{-- @include('main.layouts.partials.page-title') --}}
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->


            <div class="container">
                <div class="row">
                    <!-- Icon Row - START -->
                    <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                        <div class="row">
                            <!-- <div class="col-lg-3 col-sm-6"></div> -->

                            <div class="col-lg-6 col-sm-6">
                                <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="{{ route('info-korp', app()->getLocale()) }}"><i
                                                class="icon-featured far fa-file-alt"></i></a>
                                        <h4 class="font-weight-normal text-5 mt-3">Mengenai <strong
                                                class="font-weight-extra-bold">JUPEM</strong></h4>
                                        <p class="mb-2 mt-2 text-2">Maklumat JUPEM dan Info Korporat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="{{ route('visi-misi', app()->getLocale()) }}"><i
                                                class="icon-featured far fa-file-alt"></i></a>
                                        <h4 class="font-weight-normal text-5 mt-3">Info <strong
                                                class="font-weight-extra-bold">JUPEM</strong></h4>
                                        <p class="mb-2 mt-2 text-2">Visi, Misi, Moto, Dasar Kualiti, Kod Etika dan
                                            Definisi Logo.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-lg-3 col-sm-6"></div> -->
                        </div>
                    </div>
                    <!-- Icon Row - END-->
                </div>
            </div>

            <!-- ======================== -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">
                            Aktiviti Pemetaan</div>
                    </div>
                </div>
                <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
                    style="padding-top:0 !important;">
                    <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Penyediaan Kemudahan Infrastruktur Ukur Geodetik</b>
                                <ul>
                                    <li>
                                        Ukur Aras
                                    </li>
                                    <li>
                                        Ukur Graviti
                                    </li>
                                    <li>
                                        Cerapan Air Pasang Surut
                                    </li>
                                    <li>
                                        Jaringan Global Navigation Satellite System (GNSS)
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Ukuran Pemetaan Topografi</b>
                                <ul>
                                    <li>Penggambaran Udara (Fotogrametri)</li>
                                </ul>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Penyediaan Peta</b>
                                <ul>
                                    <li>Peta Topografi Pelbagai Skala</li>
                                    <li>Peta Tematik Pelbagai Skala</li>
                                </ul>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Penyediaan & Pengurusan Pangkalan Data</b>
                                <ul>
                                    <li>Topografi</li>
                                    <li>Kartografi</li>
                                    <li>Utiliti</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 px-5 px-md-3">
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Penyelarasan Aktiviti Standardisasi</b>
                                <ul>
                                    <li>Penentuan Nama Geografi</li>
                                    <li>Geomatik</li>
                                    <li>Geoinformasi</li>
                                </ul>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Ukuran Penentuan Sempadan</b>
                                <ul>
                                    <li>
                                        Sempadan Antarabangsa (Darat & Maritim)
                                        <ul>
                                            <li>Malaysia - Thailand</li>
                                            <li>Malaysia - Indonesia</li>
                                            <li>Malaysia - Singapura</li>
                                            <li>Malaysia - Brunei Darussalam</li>
                                            <li>Pelantar Benua</li>
                                        </ul>
                                    </li>
                                    <li>Sempadan Antara Negeri</li>
                                </ul>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Ukuran Pengesanan Utiliti Bawah Tanah</b>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <b>Perpustakaan Peta Negara</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ======================== -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">
                            Aktiviti Kadaster</div>
                    </div>
                </div>
                <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
                    style="padding-top:0 !important;">
                    <div class="col-md-6 pe-md-5 mb-5 mb-md-0">
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li><i class="fas fa-check"></i>Memberi khidmat nasihat berkaitan persekitaran Kadaster
                                kepada umum.</li>
                            <li><i class="fas fa-check"></i>Menjalankan kerja Ukuran Hakmilik Tanah (UHMT) yang
                                berhubung kait dengan penyediaan pelan hakmilik tanah mematuhi Kanun Tanah Negara (KTN)
                                1965 dan Pekeliling Ketua Pengarah Ukur dan Pemetaan Malaysia/Surat Pekeliling dan
                                lain-lain undang-undang/pekeliling berkaitan yang berkuat kuasa bagi tujuan ukur seperti
                                yang berikut:</li>
                            <ol class="list list-ordened list-ordened-style-2 list-tertiary list-icons-sm">
                                <li>Pelupusan tanah bagi pemberimilikan dan perizaban;</li>
                                <li>Pecah sempadan;</li>
                                <li>Pecah bahagian;</li>
                                <li>Cantuman;</li>
                                <li>Pengambilan tanah dan sebagainya.</li>
                            </ol>
                            <li><i class="fas fa-check"></i>Menjalankan semakan kerja Ukuran Hakmilik Strata.</li>
                            <li><i class="fas fa-check"></i>Memantau dan mengawal kualiti kerja Juruukur Tanah
                                Berlesen (JTB).</li>

                        </ul>
                    </div>
                    <div class="col-md-6 px-5 px-md-3">
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li><i class="fas fa-check"></i>Menyediakan Pelan Akui (PA), Pelan Akui Strata (PAB),
                                Pelan Warta dan Lembar Piawai.</li>
                            <li><i class="fas fa-check"></i>Menyediakan Suratan Hakmilik Tanah (B1)/Strata
                                (B4)/Stratum.</li>
                            <li><i class="fas fa-check"></i>Menyediakan dan menyelenggara maklumat Pangkalan Data Ukur
                                Kadaster Berdigit Kebangsaan (NDCDB).</li>
                            <li><i class="fas fa-check"></i>Membangun dan menyelenggara infrastruktur kawalan ukur
                                kadaster (terabas piawai/Cadastral Reference Mark (CRM)/NDCDB).</li>
                            <li><i class="fas fa-check"></i>Menyediakan dan menyelenggara maklumat Pangkalan Data GLMS
                                (Geographical Layer Management System).</li>
                            <li><i class="fas fa-check"></i>Menjalankan kalibrasi piawai ke atas semua Tapak Ujian
                                Electronic Distance Measurement (EDM) dan Global Navigation Satellite System (GNSS) di
                                seluruh Negara dan mengemas kini data/maklumat kalibrasi dalam eMalaysia EDM
                                Accredential System (eMEDMAS).</li>
                            <li><i class="fas fa-check"></i>Melaksanakan dan mengemas kini maklumat kalibrasi piawai
                                tapak ujian EDM/GNSS di seluruh negara;</li>
                            <li><i class="fas fa-check"></i>Menyelaras penggubalan polisi dan dasar teknikal ukur
                                kadaster termasuk ukuran hakmilik tanah, strata, stratum dan marin.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- ======================== -->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="text-center text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">
                            Aktiviti Geospatial Pertahanan</div>
                    </div>
                </div>
                <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter"
                    style="padding-top:0 !important;">
                    <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li>
                                <i class="fas fa-check"></i><!-- 1 -->
                                Menyediakan produk dan perkhidmatan web geospatial pertahanan untuk keperluan
                                operasi dan latihan Angkatan Tentera Malaysia (ATM).
                            </li>
                            <li>
                                <i class="fas fa-check"></i><!-- 2 -->
                                Memberikan bantuan khidmat geospatial pertahanan untuk keperluan bantuan kemanusian
                                dan pengurusan bencana alam.
                            </li>
                            <li>
                                <i class="fas fa-check"></i><!-- 3 -->
                                Menyediakan khidmat nasihat teknikal berkaitan geospatial untuk keperluan program
                                pembangunan ATM.
                            </li>
                            <li>
                                <i class="fas fa-check"></i><!-- 4 -->
                                Menguatkuasakan Arahan Keselamatan Geosptial Terperingkat.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer - START -->
        @include('main.layouts.partials.footer')
        <!-- Footer - END -->

    </div>

    <!-- Vendor -->
    @include('main.layouts.partials.scripts')

</body>

@livewireScripts

</html>
