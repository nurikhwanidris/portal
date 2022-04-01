<div class="container-fluid" style="margin-bottom: -100px;">
    <div class="row" style="padding: 10px 40px;">
        <!-- Column 1 -->
        <div class="col-lg-4" style="padding: 20px 30px 20px 30px;">
            <div class="row text-title-semasa-1">Sorotan Terkini</div>
            <br>
            <div>
                <div class="owl-carousel owl-theme"
                    data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <!-- 1 -->
                    @foreach ($beritaTerkini as $news)
                        <div>
                            <div class="row">
                                <div class="col" style="width: 180px;">
                                    <img src="upload/img/{{ $news->gambarHadapan }}">
                                </div>
                                <div class="col" style="width: 180px;">
                                    <img src="/main/img/blog/small/blog-1.jpg">
                                </div>
                            </div>
                            <br>
                            <div class="recent-posts">
                                <article class="post">
                                    <div class="row">
                                        <div class="col-auto pe-0">
                                            <div class="post-date">
                                                <span class="day text-color-dark font-weight-extra-bold">
                                                    {{ $news->created_at->day }}
                                                </span>
                                                <span class="month">
                                                    {{ $news->created_at->format('F') }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col ps-1">
                                            <div>
                                                <h4 class="line-height-3"><a href="#"
                                                        class="text-decoration-none text-show-line-tajuk">
                                                        {{ $news->title_my }}
                                                    </a>
                                                </h4>
                                                <div>
                                                    <div class="mb-1 info-semasa-paragraph text-show-line">
                                                        {{ $news->excerpt_my }}
                                                    </div>
                                                    <a href="blog-post.html"
                                                        class="read-more text-color-dark font-weight-bold text-2">MAKLUMAT
                                                        TERPERINCI <i class="fas fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Column 2 -->
        <div class="col-sm-10 col-md-7 col-lg-4" style="padding:20px 30px 20px 30px;">
            <div class="row text-title-semasa-1">Tawaran Perolehan</div>
            <br>
            <div>

                <div class="parent">
                    <div class="row"><text class="text-head-space">Tender</text></div>
                    <div class="row"><text class="info-semasa-paragraph overflow-tajuk"><a href="#">JUPEM
                                T2/2022 : Perolehan Membekal, Menghantar, Menguji Dan Mentauliah Empat Belas (14) Set
                                Alat Penerima Global Navigation Satellite System (GNSS) Untuk Jabatan Ukur Dan Pemetaan
                                Malaysia (JUPEM), Kementerian Tenaga Dan Sumber Asli (KetSA)</text></a></div>
                    <div class="row"><text class="info-semasa-paragraph overflow-tajuk"><a href="#">JUPEM
                                T2/2022 : Perolehan Membekal, Menghantar, Menguji Dan Mentauliah Empat Belas (14) Set
                                Alat Penerima Global Navigation Satellite System (GNSS) Untuk Jabatan Ukur Dan Pemetaan
                                Malaysia (JUPEM), Kementerian Tenaga Dan Sumber Asli (KetSA)</text></a></div>

                    <div class="row" style="padding-top: 24px;"><text
                            class="text-head-space">Sebutharga</text></div>
                    <div class="row"><text class="info-semasa-paragraph">Tiada Sebutharga buat masa
                            ini</text></div>
                    <div class="row child"><a href="#"
                            class="read-more text-color-dark font-weight-bold text-2">MAKLUMAT TERPERINCI <i
                                class="fas fa-chevron-right"></i></a></div>
                </div>
            </div>
        </div>

        <!-- Column 3 -->
        <div class="col-sm-10 col-md-7 col-lg-4">
            @include('main.layouts.partials.waktu-solat-compressed')
        </div>
    </div>
</div>
