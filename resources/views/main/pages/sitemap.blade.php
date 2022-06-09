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
    @livewireStyles
</head>

<body data-plugin-page-transition>
    <div class="body">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header-inner')
        <!-- Header - Logo + Icons 4 + Search - aaEND -->

        <div role="main" class="main">
            <!-- Title Section - START -->
            @livewire('title.page-title')
            <!-- Title Section - END -->

            <!-- Menu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Menu - END -->

            <div class="container" style="margin-bottom: 100px;">
                <!-- PAGE TITLE - START-->
                <div class="row">
                    <div class="col">
                        <div class="text-title-semasa-11" style="padding-bottom: 20px;">Peta Laman</div>
                    </div>
                </div>
                <!-- PAGE TITLE - END-->
                <div role="main" class="main">
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-sm-3">
                            <!-- Utama -->
                            <h3 class="font-weight-bold text-4 mb-2">LAMAN UTAMA</h3>
                            <ul class="list list-icons">
                                <li><a href="/"><i class="fas fa-file"></i> Landing Page</a></li>
                            </ul>

                            <!-- Sub Category - INFO SEMASA -->
                            <h3 class="font-weight-bold text-4 mb-2">INFO SEMASA</h3>
                            <ul class="list list-icons list-icons-sm mb-4">
                                <li><a href="{{ route('info-semasa', app()->getLocale()) }}#tab-1"><i
                                            class="fas fa-file"></i> Pengumuman</a></li>
                                <li><a href="{{ route('info-semasa', app()->getLocale()) }}#tab-2"><i
                                            class="fas fa-file"></i> Sorotan Peristiwa</a></li>
                                <li><a href="{{ route('info-semasa', app()->getLocale()) }}#tab-3"><i
                                            class="fas fa-file"></i> Tawaran Perolehan</a></li>
                                <li><a href="{{ route('info-semasa', app()->getLocale()) }}#tab-4"><i
                                            class="
                                        fas fa-file"></i> Piagam
                                        Pelanggan</a>
                                </li>
                            </ul>
                        </div>
                        <!-- ======== -->
                        <!-- Column 2 -->
                        <div class="col-sm-3">
                            <!-- Utama -->
                            <!-- Sub Category - INFO KORPORAT -->
                            <h3 class="font-weight-bold text-4 mb-2">INFO KORPORAT</h3>
                            <!-- Sub Sub Category -->
                            <ul class="list list-icons list-icons-sm mb-4">
                                <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                            class="fas fa-file"></i> Mengenai JUPEM</a></li>
                                <!-- Anak Sub -->
                                <ul class="list list-icons ul-subsub">
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Perutusan Ketua Pengarah</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Perjanjian & Konvensyen</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Visi, Misi, Moto, Dasar Kualiti,
                                            Kod Etika dan Definisi Logo</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Tugas, Peranan dan Punca
                                            Kuasa</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Penglibatan dan Sumbangan</a>
                                    </li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Mantan Ketua Pengarah Ukur</a>
                                    </li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Majlis Bersama Jabatan</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-1"><i
                                                class="fas fa-caret-right"></i> Anugerah & Pencapaian</a></li>
                                </ul>
                                <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                            class="fas fa-file"></i> Struktur Organisasi</a></li>
                                <!-- Anak Sub -->
                                <ul class="list list-icons ul-subsub">
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                                class="fas fa-caret-right"></i> Pengurusan Tertinggi</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                                class="fas fa-caret-right"></i> JUPEM Negeri</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                                class="fas fa-caret-right"></i> Carta Organisasi Ibu Pejabat</a>
                                    </li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                                class="fas fa-caret-right"></i> Carta Organisasi Kementerian</a>
                                    </li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-2"><i
                                                class="fas fa-caret-right"></i> Ketua Pegawai Maklumat (CIO)</a>
                                    </li>
                                </ul>
                                <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-3"><i
                                            class="fas fa-file"></i> Hubungi Kami</a></li>
                                <!-- Anak Sub -->
                                <ul class="list list-icons ul-subsub">
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-3"><i
                                                class="fas fa-caret-right"></i> Alamat Negeri-negeri</a></li>
                                </ul>
                                <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-4"><i
                                            class="fas fa-file"></i> Kepakaran Bidang Khusus</a></li>
                                <!-- Anak Sub -->
                                <ul class="list list-icons ul-subsub">
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-4"><i
                                                class="fas fa-caret-right"></i> Mengenai SME & Bidang
                                            Kepakaran</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-4"><i
                                                class="fas fa-caret-right"></i> Permohonan SME & Hubungi Kami</a>
                                    </li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-4"><i
                                                class="fas fa-caret-right"></i> Punca Kuasa</a></li>
                                    <li><a href="{{ route('info-korp', app()->getLocale()) }}#tab-4"><i
                                                class="fas fa-caret-right"></i> Aktiviti SME</a></li>
                                </ul>
                            </ul>
                        </div>
                        <!-- ======== -->
                        <!-- Column 3 -->
                        <div class="col-sm-3">
                            <!-- Utama -->
                            <!-- Sub Category - INFO KORPORAT -->
                            <h3 class="font-weight-bold text-4 mb-2">WARGA JUPEM</h3>
                            <!-- Sub Sub Category -->
                            <ul class="list list-icons list-icons-sm mb-4">
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-1"><i
                                            class="fas fa-file"></i> Kertas Kerja</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-2"><i
                                            class="fas fa-file"></i> Pertukaran Pegawai</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-3"><i
                                            class="fas fa-file"></i> Laporan Mesyuarat</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-4"><i
                                            class="fas fa-file"></i> Inovasi Sektor Awam</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-5"><i
                                            class="fas fa-file"></i> Kertas Pembentangan</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-6"><i
                                            class="fas fa-file"></i> Polisi/Belanjawan/Dokumen Sah</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-7"><i
                                            class="fas fa-file"></i> Dokumen Pensijilan & Pengiktirafan</a>
                                </li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-8"><i
                                            class="fas fa-file"></i> Garis Panduan Umum</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-9"><i
                                            class="fas fa-file"></i> Dasar & Pekeliling</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-10"><i
                                            class="fas fa-file"></i> Dokumen Jabatan</a></li>
                                <li><a href="{{ route('warga-jupem', app()->getLocale()) }}#tab-11"><i
                                            class="fas fa-file"></i> Muat Turun Borang JUPEM</a></li>

                            </ul>
                        </div>
                        <!-- ======== -->
                        <!-- Column 4 -->
                        <div class="col-sm-3">
                            <!-- Utama -->
                            <!-- Sub Category - INFO KORPORAT -->
                            <h3 class="font-weight-bold text-4 mb-2">ORANG AWAM</h3>
                            <!-- Sub Sub Category -->
                            <ul class="list list-icons list-icons-sm mb-4">
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-1"><i
                                            class="fas fa-file"></i> Produk & Perkhidmatan</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-2"><i
                                            class="fas fa-file"></i> Kertas Pembentangan</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-3"><i
                                            class="fas fa-file"></i> Buku & Penerbitan</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"><i
                                            class="fas fa-file"></i> Direktori Pegawai</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-5"><i
                                            class="fas fa-file"></i> Multimedia</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-6"><i
                                            class="fas fa-file"></i> Tender & Sebutharga</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-7"><i
                                            class="fas fa-file"></i> Transaksi Dalam Talian</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-8"><i
                                            class="fas fa-file"></i> Keratan Akhbar</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-9"><i
                                            class="fas fa-file"></i> Muat Turun Borang Pemetaan</a></li>
                                <li><a href="{{ route('orang-awam', app()->getLocale()) }}#tab-10"><i
                                            class="fas fa-file"></i> Dokumen Jabatan</a></li>

                            </ul>
                        </div>
                        <!-- ======== -->
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

</html>
