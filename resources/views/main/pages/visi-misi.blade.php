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


            <div class="container" style="margin-bottom: 100px;">
                <div class="row">
                    <!-- Icon Row - START -->
                    <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6"></div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="featured-box featured-box-quaternary featured-box-effect-3">
                                    <div class="box-content box-content-border-0">
                                        <a href="{{ route('info-korp', app()->getLocale()) }}"><i
                                                class="icon-featured far fa-file-alt"></i></a>
                                        <h4 class="font-weight-normal text-5 mt-3">Mengenai <strong
                                                class="font-weight-extra-bold">JUPEM</strong></h4>
                                        <p class="mb-2 mt-2 text-2">Maklumat JUPEM dan Info Korporat</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6"></div>
                        </div>
                    </div>
                    <!-- Icon Row - END-->
                </div>

                <div class="container">
                    <div class="row text-center pt-3">
                        <div class="col-md-10 mx-md-auto">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter">
                                <!-- <span>Porto is </span> -->
                                <span class="word-rotator-words bg-dark">
                                    <b class="is-visible">Visi</b>
                                    <b>Misi</b>
                                    <b>Moto</b>
                                    <b>Dasar Kualiti</b>
                                    <b>Kod Etika</b>
                                    <b>Logo</b>
                                </span>
                                <span> JUPEM.</span>
                            </h1>
                            <!-- <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
        </p> -->
                        </div>
                    </div>
                </div>


                <div class="featured-boxes featured-boxes-style-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="featured-box featured-box-primary  featured-box-effect-5">
                                <div class="box-content">
                                    <i class="icon-featured far fa-file-alt"></i>
                                    <h4 class="font-weight-normal text-5 mt-3"><strong
                                            class="font-weight-extra-bold">Visi</strong> kami</h4>
                                    <p class="mb-0">Menjadikan JUPEM terbilang dalam Perkhidmatan dan
                                        Pengurusan Ukur, Pemetaan dan Geospatial bagi memenuhi wawasan Negara.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4">
        <div class="featured-box featured-box-quaternary featured-box-effect-5">
         <div class="box-content">
          <i class="icon-featured far fa-star"></i>
          <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Misi</strong> kami</h4>
          <p class="mb-0">Menyediakan Perkhidmatan dan Pengurusan Ukur, Pemetaan dan Geospatial yang berkualiti melalui sistem terbaik, sumber manusia yang kompeten dan persekitaran kerja yang kondusif.</p>
         </div>
        </div>
       </div> -->
                        <div class="col-lg-4">
                            <div class="featured-box featured-box-secondary featured-box-effect-5">
                                <div class="box-content">
                                    <i class="icon-featured far fa-star"></i>
                                    <h4 class="font-weight-normal text-5 mt-3"><strong
                                            class="font-weight-extra-bold">Misi</strong> kami</h4>
                                    <p class="mb-0">Menyediakan Perkhidmatan dan Pengurusan Ukur, Pemetaan dan
                                        Geospatial yang berkualiti melalui sistem terbaik, sumber manusia yang kompeten
                                        dan persekitaran kerja yang kondusif.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="featured-box featured-box-tertiary featured-box-effect-5">
                                <div class="box-content">
                                    <i class="icon-featured far fa-edit"></i>
                                    <h4 class="font-weight-normal text-5 mt-3"><strong
                                            class="font-weight-extra-bold">Moto</strong> kami</h4>
                                    <p class="mb-0">Pemacu Kesejahteraan Rakyat dan Pembangunan Negara. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 my-4" src="img/section-image/dasar-kualiti.jpg"
                            alt="style switcher" />
                    </div>
                    <div class="col-md-8 ps-md-5">
                        <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Dasar</strong>
                            Kualiti</h2>
                        <p>
                            JUPEM komited kepada pemberian perkhidmatan ukur kadaster dan pemetaan serta penyebaran
                            maklumat geospatial yang berkualiti mengikut standard yang ditetapkan dan kepada usaha
                            penambahbaikan yang berterusan bagi memenuhi kehendak pelanggan.
                        </p>
                    </div>
                </div>

                <hr class="solid my-5">
                <div class="row">
                    <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                        <li>
                            <!-- 1 -->
                            <i class="fas fa-check"></i>
                            Amanah dan jujur dalam melaksanakan tugas yang dipertanggungjawabkan tanpa menyalahgunakan
                            kuasa dan kedudukan.
                        </li>
                        <li>
                            <!-- 2 -->
                            <i class="fas fa-check"></i>
                            Sentiasa sabar, tenang dan cekal dalam semua situasi.
                        </li>
                        <li>
                            <!-- 3 -->
                            <i class="fas fa-check"></i>
                            Benar, tulus dan ikhlas dalam menjalankan sebarang urusan.
                        </li>
                        <li>
                            <!-- 4 -->
                            <i class="fas fa-check"></i>
                            Berdisiplin dan berhemah tinggi.
                        </li>
                        <li>
                            <!-- 5 -->
                            <i class="fas fa-check"></i>
                            Yakin, tepat, adil dan konsisten dalam membuat sebarang keputusan.
                        </li>
                        <li>
                            <!-- 6 -->
                            <i class="fas fa-check"></i>
                            Sentiasa mengamalkan ciri-ciri kreatif, inovatif, bermotivasi, berdaya saing dan
                            akuantabiliti.
                        </li>
                        <li>
                            <!-- 7 -->
                            <i class="fas fa-check"></i>
                            Menjalinkan semangat kerjasama, muhibbah dan kasih sayang pada semua peringkat.
                        </li>
                        <li>
                            <!-- 8 -->
                            <i class="fas fa-check"></i>
                            Berbangga menjadi warga JUPEM dan sentiasa berusaha meninggikan martabat dan imej jabatan.
                        </li>
                        <li>
                            <!-- 9 -->
                            <i class="fas fa-check"></i>
                            Memberi perkhidmatan yang efisien dan berkualiti.
                        </li>
                        <li>
                            <!-- 10 -->
                            <i class="fas fa-check"></i>
                            Berusaha memastikan produk-produk jabatan adalah berkualiti dan memenuhi kehendak pelanggan.
                        </li>
                        <li>
                            <!-- 11 -->
                            <i class="fas fa-check"></i>
                            Sentiasa berwaspada dalam pengendalian maklumat tanpa membocori rahsia Negara kepada pihak
                            yang tidak berhak menerimanya.
                        </li>
                    </ul>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="col-md-8 pe-md-5 mb-5 mb-md-0">
                        <h2 class="font-weight-normal text-6 mb-3"><strong
                                class="font-weight-extra-bold">Definisi</strong> Logo</h2>
                        <p class="text-4">
                            Logo JUPEM pada keseluruhannya adalah lebih energetik, dinamik, progresif serta mampu
                            bersaing dalam menghadapi cabaran-cabaran yang bersifat sejagat khususnya dalam penyediaan
                            infrastruktur ukur dan pemetaan bagi mendukung Dasar Pembangunan Negara.
                        </p>
                        <p>
                        <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                            <li><i class="fas fa-check"></i><!-- 1 -->
                                Reka bentuk logo JUPEM terdiri daripada 3 bentuk asas iaitu titik-titik, bulatan gedang
                                dan garisan orbit. Titik-titik ini terpisah dua oleh garisan orbit mencerminkan dua
                                aktiviti utama JUPEM iaitu aktiviti pengukuran kadaster dan aktiviti pengukuran
                                pemetaan.
                            </li>
                            <li><i class="fas fa-check"></i><!-- 2 -->
                                Warna oren melambangkan keceriaan, kegemilangan, kepekaan JUPEM kepada kehendak
                                pelanggan dan menyatakan kewujudan dan kepentingan JUPEM kepada masyarakat dan negara.
                            </li>
                            <li><i class="fas fa-check"></i><!-- 3 -->
                                Warna hijau adalah warna rasmi jabatan dan dipilih bagi menunjukkan bahawa JUPEM
                                senantiasa prihatin dan memberi perhatian serius kepada aspek alam semula jadi dalam
                                pemeliharaan persekitaran yang sihat.
                            </li>
                            <li><i class="fas fa-check"></i><!-- 4 -->
                                Penampilan titik-titik memberi petunjuk bahawa JUPEM menggunakan teknologi elektronik
                                dan sistem jaring untuk memperkasakan maklumat ukur dan pemetaan.
                            </li>
                            <li><i class="fas fa-check"></i><!-- 5 -->
                                Garisan orbit pula menitikberatkan betapa pentingnya komunikasi, penyebaran maklumat dan
                                rangkaian.
                            </li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-4 px-5 px-md-3">
                        <img class="img-fluid scale-2 my-4" src="img/logo-default/logo_JUPEM.svg"
                            alt="style switcher" />
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
