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
                            <option value="0" selected="selected">{{ __('message.hq') }}</option>
                            <option value="1">JUPEM Johor</option>
                            <option value="2">JUPEM Kedah</option>
                            <option value="3">JUPEM Kelantan</option>
                            <option value="4">JUPEM Melaka</option>
                            <option value="5">JUPEM W.P. Kuala Lumpur & Putrajaya</option>
                            <option value="6">JUPEM Negeri Sembilan</option>
                            <option value="7">JUPEM Pahang</option>
                            <option value="8">JUPEM Perak</option>
                            <option value="9">JUPEM Perlis</option>
                            <option value="10">JUPEM Pulau Pinang</option>
                            <option value="12">JUPEM Selangor</option>
                            <option value="13">JUPEM Terengganu</option>
                            <option value="14">JUPEM W.P Labuan</option>
                            <option value="15">Topografi Sarawak</option>
                            <option value="16">Topografi Sabah</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Icon Row - END-->
        </div>
        {{-- JUPEM HQ --}}
        <div class="row">
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
                            <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                            <a href="{{ route('orang-awam', app()->getLocale()) }}#tab-4"
                                class="btn btn-modern btn-secondary mb-2">Direktori
                                Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- JUPEM Johor --}}
        <div class="row" id="johor" style="display: none">
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
        <div class="row" id="kedah">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3365119493374!2d100.54982641744384!3d5.365533999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304acbeaace6e037%3A0x4f14fdfa69390bf9!2sJabatan%20Ukur%20Dan%20Pemetaan%20Kedah!5e0!3m2!1sen!2smy!4v1654763424737!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
        <div class="row" id="kelantan">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.042023108349!2d102.23862121531641!3d6.125047329364954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6afc4fb81ba0d%3A0xcc494592464f5837!2sDepartment%20of%20Survey%20and%20Mapping!5e0!3m2!1sen!2smy!4v1654763894343!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
        <div class="row" id="melaka">
            <div class="container" style="padding-top:20px;">
                <div class="row align-items-center">
                    <!-- Google Map START -->
                    <div id="googlemapsHalfContainer" class="google-map m-0"
                        style="height: 350px;box-shadow: 0px 0px 10px #ccc;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8458741074273!2d102.2535733153198!3d2.211795858814538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1efd54b97dd7d%3A0xc5d49d3156fc9828!2sJabatan%20Ukur%20Dan%20Pemetaan%20Melaka!5e0!3m2!1sen!2smy!4v1654764573068!5m2!1sen!2smy"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    </div>

    <!-- <script src="/js/jquery-hubungi-kami.js"></script> -->
</div>
