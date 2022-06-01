<style>
    .flex-container {
        display: flex;
        padding: 10px;
    }

    .flex-child {
        flex: 1;
        /*border: 2px solid yellow;*/
    }

</style>
<footer id="footer" class="kaler-kaki-1">
    <!-- Kaki atas -->
    <div class="container">
        <!-- <div class="footer-ribbon">
   <span>Get in Touch</span>
  </div> -->
        <div class="row py-5 my-4">
            <!-- Column 1 -->
            <div class="col-lg-4 col-sm-6 col-md-4  col-xs-12 mb-4 mb-lg-0">
                <h5 class="text-kaki-atas-1 mb-3 pb-1">{{ __('message.Operating Hours') }}</h5>
                <img alt="QR Code Laman Web Rasmi JUPEM" width="20%" src="/main/img/logo-default/logo_JUPEM.svg">
                <!-- 1 -->
                <div style="padding-top: 10px;"></div>
                <div class="flex-container">
                    <div class="flex-child text-kaki-atas-2">
                        {{ __('message.Monday - Thursday') }}
                    </div>
                    <div class="flex-child text-kaki-atas-3">
                        {{ __('message.7:45 am - 12:30 pm') }}<br>
                        {{ __('message.2:00 pm - 4:45 pm') }}
                    </div>
                    <br><br>
                </div>
                <!-- 2 -->
                <div class="flex-container">
                    <div class="flex-child text-kaki-atas-2">
                        {{ __('message.Friday') }}
                    </div>
                    <div class="flex-child text-kaki-atas-3">
                        {{ __('message.7:45 am - 12:00 pm') }}<br>
                        {{ __('message.2:45 pm - 4:45 pm') }}
                    </div>
                    <br><br>
                </div>
                <!-- 3 -->
                <div class="flex-container">
                    <div class="flex-child text-kaki-atas-2">
                        {{ __('message.Saturday - Sunday / Regional Holiday') }}
                    </div>
                    <div class="flex-child text-kaki-atas-3">
                        {{ __('message.Closed') }}
                    </div>
                    <br><br>
                </div>


            </div>
            <!-- Column 2 -->
            <div class="col-lg-4 col-sm-6 col-md-4  col-xs-12 mb-4 mb-lg-0">
                <h5 class="text-kaki-atas-1 mb-3 pb-1">{{ __('message.Portal Information') }}</h5>
                <div class="text-kaki-atas-2">{{ __('message.Visitors') }}:</div>
                <div class="row mb-4 counters counters-sm text-light">
                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="counter" style="text-align: left !important;">
                            <strong data-to="{{ $counter }}" data-append="+"
                                style="font-size: 30px !important;">0</strong>
                            <label>{{ now()->format('F') }}</label>
                        </div>
                    </div>
                </div>
                <div class="text-kaki-atas-2">{{ __('message.Latest Update') }}:</div>
                <p class="text-8 text-color-light font-weight-bold">
                    {{ date('d-m-Y', strtotime($activity->log_date)) }}</p>
                <!-- <div class="text-kaki-atas-2">Pengiktirafan:</div> -->
                <h5 class="text-kaki-atas-1 mb-3 pb-1">{{ __('message.Recognition') }}</h5>
                <img src="/main/img/iso/iso-label-1.jpg" data-thumb="/main/img/iso/iso-label-1.jpg" alt="ISO 1"
                    style="padding-bottom:5px;" />
                <img src="/main/img/iso/iso-label-2.jpg" data-thumb="/main/img/iso/iso-label-2.jpg" alt="ISO 2" />
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4 col-sm-6 col-md-4 col-xs-12 mb-4 mb-lg-0">
                <h5 class="text-kaki-atas-1 mb-3 pb-1">{{ __('message.Find Us on') }}</h5>

                <ul class="footer-social-icons social-icons mt-4" style="padding-bottom: 20px;">
                    <li class="social-icons-facebook"><a href="https://www.facebook.com/jupemKeTSA/" target="_blank"
                            title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                    <li class="social-icons-twitter"><a href="https://twitter.com/jupemKeTSA" target="_blank"
                            title="Twitter"><i class="fab fa-twitter text-2"></i></a></li>
                    <li class="social-icons-instagram"><a href="https://www.instagram.com/jupemketsa/" target="_blank"
                            title="Instagram"><i class="fab fa-instagram text-2"></i></a></li>
                    <li class="social-icons-youtube"><a href="https://www.youtube.com/channel/UCwXaXGuEbIjeUhnOmapR79A"
                            target="_blank" title="YouTube"><i class="fab fa-youtube text-2"></i></a></li>
                </ul>
                <div class="text-kaki-atas-2">{{ __('message.Quick Links') }}:</div>
                <img alt="QR Code Laman Web Rasmi JUPEM" width="50%"
                    src="/main/img/logo-default/jupem-qr-code-trans.svg">
            </div>
        </div>
    </div>
    <!-- Kaki bawah -->
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-7 align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <!-- <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0"> -->
                    <div class="text-kaki-copyright-1">Hakcipta Terpelihara 2022 © Jabatan Ukur dan Pemetaan Malaysia
                        (JUPEM)</div>
                    <div class="text-kaki-copyright-2">Paparan terbaik adalah dengan menggunakan Internet Explorer versi
                        10 ke atas, Mozilla Firefox versi 3 ke atas dan Google Chrome</div>
                </div>
                <div
                    class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end text-kaki-2">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="dasar-privasi"
                                    class="ms-1 text-decoration-none"> Dasar
                                    Privasi</a></li>
                        </ul>
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="dasar-keselamatan"
                                    class="ms-1 text-decoration-none"> Dasar
                                    Keselamatan</a></li>
                        </ul>
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="penafian" class="ms-1 text-decoration-none">
                                    Penafian</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
