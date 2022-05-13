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
                                        <a href="/info-korp"><i class="icon-featured far fa-file-alt"></i></a>
                                        <h4 class="font-weight-normal text-5 mt-3">Mengenai <strong
                                                class="font-weight-extra-bold">JUPEM</strong></h4>
                                        <p class="mb-2 mt-2 text-2">Maklumat JUPEM dan Info Korporat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="/visi-misi"><i class="icon-featured far fa-file-alt"></i></a>
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
            <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" style="padding-top: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="font-weight-normal text-center text-6">Tugas <strong
                                    class="font-weight-extra-bold">dan Peranan</strong></h2>
                            <p class="mb-0 text-center ">Tiga (3) aktiviti utama JUPEM dalam menyediakan infrastruktur
                                ukur di seluruh Negara, iaitu:</p>
                            <div class="text-center text-title-semasa-11"
                                style="padding-top: 10px;padding-bottom: 35px;">Aktiviti Pemetaan</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Penyediaan Kemudahan
                                        Infrastruktur Ukur Geodetik</h4>
                                    <ul>
                                        <li>Ukur Aras</li>
                                        <li>Ukur Graviti</li>
                                        <li>Cerapan Air Pasang Surut</li>
                                        <li>Jaringan Global Navigation Satellite System (GNSS)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Ukuran Pemetaan
                                        Topografi</h4>
                                    <ul>
                                        <li>Penggambaran Udara (Fotogrametri)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Penyediaan Peta</h4>
                                    <ul>
                                        <li>Peta Topografi Pelbagai Skala</li>
                                        <li>Peta Tematik Pelbagai Skala</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 16px;">
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Ukuran Pengesanan
                                        Utiliti Bawah Tanah</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Penyediaan &
                                        Pengurusan Pangkalan Data</h4>
                                    <ul>
                                        <li>Topografi</li>
                                        <li>Kartografi</li>
                                        <li>Utiliti</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div
                                class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover tinggi-kad-1">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Penyelarasan
                                        Aktiviti Standardisasi</h4>
                                    <ul>
                                        <li>Penentuan Nama Geografi</li>
                                        <li>Geomatik</li>
                                        <li>Geoinformasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 16px;">
                        <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover"
                                style="height:265px;">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Ukuran Penentuan
                                        Sempadan</h4>
                                    <ul>
                                        <li>Sempadan Antarabangsa (Darat & Maritim)</li>
                                        <ul>
                                            <li>Malaysia - Thailand</li>
                                            <li>Malaysia - Indonesia</li>
                                            <li>Malaysia - Singapura</li>
                                            <li>Malaysia - Brunei Darussalam</li>
                                            <li>Pelantar Benua</li>
                                        </ul>
                                        <li>Sempadan Antara Negeri</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                            <div class="card border-radius-0 bg-color-light box-shadow-1 box-shadow-1-hover"
                                style="height:265px;">
                                <div class="card-body">
                                    <h4 class="card-title mb-1 text-4 font-weight-bold text-center">Perpustakaan Peta
                                        Negara</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
            <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0" style="padding-top: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center text-title-semasa-11"
                                style="padding-top: 40px;padding-bottom: 20px;">Aktiviti Geospatial Pertahanan</div>
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
            </section>
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
