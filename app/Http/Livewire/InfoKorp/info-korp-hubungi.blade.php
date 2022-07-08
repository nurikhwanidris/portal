<div>
    <div class="container" style="margin-bottom: 100px;">
        <!-- <span class="row">
      <h2 class="font-weight-normal text-6"><strong class="text-title-strong">Hubungi</strong> Kami</h2>
     </span> -->
        <div class="row">
            <div class="col">
                <div class="text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">
                    {{ __('message.Contact Us') }}</div>
            </div>
        </div>
        <div class="row">
            <!-- Icon Row - START -->
            <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                <div class="row">
                    <div>
                        {{ __('message.choose_state') }}
                        <select id="contact-us" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="hq">Ibu Pejabat JUPEM</option>
                            <option value="johor">JUPEM Johor</option>
                            <option value="kedah">JUPEM Kedah</option>
                            <option value="kelantan">JUPEM Kelantan</option>
                            <option value="melaka">JUPEM Melaka</option>
                            <option value="wpkl">JUPEM W.P. Kuala Lumpur & Putrajaya</option>
                            <option value="negeri-sembilan">JUPEM Negeri Sembilan</option>
                            <option value="pahang">JUPEM Pahang</option>
                            <option value="perak">JUPEM Perak</option>
                            <option value="perlis">JUPEM Perlis</option>
                            <option value="pulau-pinang">JUPEM Pulau Pinang</option>
                            <option value="selangor">JUPEM Selangor</option>
                            <option value="terengganu">JUPEM Terengganu</option>
                            <option value="labuan">JUPEM W.P Labuan</option>
                            <option value="sarawak">Topografi Sarawak</option>
                            <option value="sabah">Topografi Sabah</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Icon Row - END-->
        </div>
        {{-- JUPEM HQ --}}
        <div class="row jupem hq" id="" style="display: block">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63739.35934671229!2d101.68325047910156!3d3.1708730000000234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37dd51fff901%3A0x4a80677198e75bfd!2sDepartment%20of%20Survey%20and%20Mapping%20Malaysia%20(JUPEM)!5e0!3m2!1sen!2smy!4v1644058089547!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia </span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Ibu Pejabat JUPEM</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jabatan Ukur Dan Pemetaan Malaysia,<br>
                                    Wisma JUPEM, Jalan Sultan Yahya Petra,<br>
                                    50578 Kuala Lumpur.
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +603-2617 0800
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-fax icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +603-2691 7457
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2 icon-kaler">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    hqweb[at]jupem[dot]gov[dot]my
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            {{-- <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp; --}}
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- JUPEM Johor --}}
        <div class="row jupem johor" id="" style="display: none">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.085815640043!2d103.7581078!3d1.4608999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6715ace5574c079!2sJabatan%20Ukur%20dan%20Pemetaan%20Johor!5e0!3m2!1sen!2smy!4v1654760144518!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Johor</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Tingkat 7, <br>
                                    Blok A, Wisma Persekutuan, <br>
                                    Jalan Air Molek, 80000, <br>
                                    Johor Bahru, Johor
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +607-223 1244
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- JUPEM Kedah --}}
        <div class="row jupem kedah" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3365119493374!2d100.54982641744384!3d5.365533999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304acbeaace6e037%3A0x4f14fdfa69390bf9!2sJabatan%20Ukur%20Dan%20Pemetaan%20Kedah!5e0!3m2!1sen!2smy!4v1654763424737!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Kedah</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    1187 Jalan Raya, <br>
                                    09000 Kulim, <br>
                                    Kedah Darul Aman.
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6044906166
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem kelantan" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.042023108349!2d102.23862121531641!3d6.125047329364954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6afc4fb81ba0d%3A0xcc494592464f5837!2sDepartment%20of%20Survey%20and%20Mapping!5e0!3m2!1sen!2smy!4v1654763894343!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Kelantan</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jalan Hospital, Bandar Kota Bharu, 15000 Kota Bharu, Kelantan
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6097481588
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem melaka" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8458741074273!2d102.2535733153198!3d2.211795858814538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1efd54b97dd7d%3A0xc5d49d3156fc9828!2sJabatan%20Ukur%20Dan%20Pemetaan%20Melaka!5e0!3m2!1sen!2smy!4v1654764573068!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Melaka</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jalan Taming Sari, Kampung Durian Daun Dalam, 75400 Melaka
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6062822844
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem negeri-sembilan" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15941.224065347928!2d101.9422512!3d2.7252176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86d7d7b8adfb0506!2sJabatan%20Ukur%20Dan%20Pemetaan%20Malaysia%2C%20Negeri%20Sembilan!5e0!3m2!1sen!2smy!4v1654813458087!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Sembilan</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Tingkat 8, Wisma Persekutuan, Jalan Dato' Abdul Kadir, Seremban, 70000 Seremban,
                                    Negeri Sembilan
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6067623839
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem pahang" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.8862313348263!2d103.34828951531725!3d3.8345874496244154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31c8bad11872b13d%3A0x1744cea6ebfbfe35!2sJabatan%20Ukur%20dan%20Pemetaan%20Pahang%20(Department%20of%20Survey%20and%20Mapping%20Pahang)!5e0!3m2!1sen!2smy!4v1654813608116!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Pahang</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Taman Pelindung Aman, 25050 Kuantan, Pahang
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6095668511
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem perak" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.965092281783!2d101.08817101531648!3d4.6002754437997275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31caec8a66430afd%3A0x6bc4f67da702c908!2sJabatan%20Ukur%20Dan%20Pemetaan%20Perak%2C%2031350%20Ipoh%2C%20Perak!5e0!3m2!1sen!2smy!4v1654813774788!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Perak</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jalan Dato’ Seri Ahmad Said,
                                    Greentown, 30450 Ipoh,
                                    Perak Darul Ridzuan.
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +605-241 7181
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem perlis" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31716.93320175832!2d100.16884117910156!3d6.443244300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304c99a556155555%3A0x5b1e71eeff9b3fd9!2sPerlis%20Survey%20and%20Mapping%20Department!5e0!3m2!1sen!2smy!4v1654813883136!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Perlis</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Tingkat 6, Bangunan Persekutuan Kangar, Persiaran Jubli Emas, Kangar, Perlis
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6049772128
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem pulau-pinang" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.016193125623!2d100.32765231531631!3d5.414503436560794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac395d1e6b0fd%3A0xa9b31564f25de6aa!2sJabatan%20Ukur%20dan%20Pemetaan%20Pulau%20Pinang!5e0!3m2!1sen!2smy!4v1654813990754!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Pulau Pinang</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Komtar, KOMTAR, Tingkat 39, Pulau Pinang, 10000
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6042611773
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem selangor" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.036292369334!2d101.51907772831291!3d3.08498904723379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc5277f25d61e5%3A0xb29d2e7c5cfa08e9!2sJUPEM%20Selangor!5e0!3m2!1sen!2smy!4v1654814064275!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Selangor</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jabatan Ukur dan Pemetaan Selangor, Tingkat 17, Plaza Masalam, No.2 Jalan Tengku
                                    Ampuan Zabedah, Jalan E9/E, Section 9, 40578 Shah Alam, Selangor
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +60355144000
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem terengganu" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31782.18480223136!2d103.1342398531538!3d5.298062936347359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b7be7a0b9c383f%3A0x420f6296992c2e53!2sJabatan%20Ukur%20dan%20Pemetaan%20Terengganu!5e0!3m2!1sen!2smy!4v1654814168356!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Terengganu</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Wisma Persekutuan, Tingkat 7 & 8, Jalan Sultan Ismail, Terengganu, 20578 Kuala
                                    Terengganu
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6096221144
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem wpkl" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7099385756637!2d101.71378472831383!3d3.170878346533459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37dd51fff901%3A0x4a80677198e75bfd!2sDepartment%20of%20Survey%20and%20Mapping%20Malaysia%20(JUPEM)!5e0!3m2!1sen!2smy!4v1654814264767!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Wilayah Persekutuan Kuala Lumpur & Putrajaya</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Jalan Sultan Yahya Petra, Kampung Datuk Keramat, 54000 Kuala Lumpur, Wilayah
                                    Persekutuan Kuala Lumpur
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +60326170800
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem sarawak" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.572993632177!2d111.81629012830709!3d2.311105253004515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31f77fc4fb1464f9%3A0xec8ff8976d5f37b1!2sJabatan%20Ukur%20Dan%20Pemetaan%20(JUPEM)!5e0!3m2!1sen!2smy!4v1654814425989!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Negeri Sarawak</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Pekan Sibu, 96000 Sibu, Sarawak
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6084314796
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem labuan" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.7099385756637!2d101.71378472831383!3d3.170878346533459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37dd51fff901%3A0x4a80677198e75bfd!2sDepartment%20of%20Survey%20and%20Mapping%20Malaysia%20(JUPEM)!5e0!3m2!1sen!2smy!4v1654814264767!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Wilayah Persekutuan Labuan</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    L7(A1) Tingkat 7 Blok 4 Ujana Kewangan Labuan
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6087412068
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row jupem sabah" id="" style="display: none;">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1015856.6029087919!2d114.95241443124998!3d5.9685702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b69bc3572792b%3A0xd0e7c1b944f300a9!2sJabatan%20Ukur%20dan%20Pemetaan%20Malaysia!5e0!3m2!1sen!2smy!4v1654814975116!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                    <!-- Google Map END -->
                </div>
                <div class="row align-items-center" style="padding-top: 30px;" id="hq">
                    <span class="nama-hubungi-black text-5 fw-bold">Jabatan Ukur Dan Pemetaan Malaysia</span>
                    <br><br>
                    <span class="nama-hubungi-black text-4 fw-bold">Topografi Sabah</span>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary mb-2">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-map-marker-alt icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    Bangunan Kwsp, Tingkat 2, 3, 4 Blok B, Peti Surat 13584 Jalan Karamunsing, Sabah,
                                    88000 Kota Kinabalu
                                </div>
                            </div>
                        </div>
                        <div class="feature-box feature-box-primary">
                            <div class="icon-hubungi-2">
                                <i class="fas fa-phone-volume icon-kaler"></i>
                            </div>
                            <div class="feature-box-info">
                                <div class="info-hubungi-black">
                                    +6088212835
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="/js/jquery-hubungi-kami.js"></script> -->
</div>
