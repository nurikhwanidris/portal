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
                            <div class="text-title-semasa-11" style="padding-bottom: 20px;">eKadaster Negeri</div>
                        </div>
                    </div>
                    <!-- PAGE TITLE - END-->
                    <div role="main" class="main">
                        <!-- SUB TITLE - START-->
                        {{-- <h2 class="font-weight-normal text-6 mb-3">Subtitle</h2> --}}
                        <!-- SUB TITLE - END-->
                        <!-- FLIP CARD - START -->
                        <!-- Level 1 - START -->
                        <div class="row mb-5 pb-3">
                            <!-- 1 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">PERLIS</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-perlis.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-perlis.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Perlis</h4>
                                            {{-- <p class="font-weight-light text-color-light opacity-5">https://ekadaster.pls.jupem.gov.my/</p> --}}
                                            <a href="https://ekadaster.pls.jupem.gov.my/" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">KEDAH</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-kedah.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-kedah.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Kedah</h4>
                                            <a href="https://ekadaster.kdh.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">PENANG</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-penang.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-penang.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Penang</h4>
                                            <a href="https://ekadaster.png.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">PERAK</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-perak.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-perak.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Perak</h4>
                                            <a href="https://ekadaster.prk.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Level 1 - END -->
                        <!-- Level 2 - START -->
                        <div class="row mb-5 pb-3">
                            <!-- 5 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">SELANGOR</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-selangor.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-selangor.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Selangor</h4>
                                            {{-- <p class="font-weight-light text-color-light opacity-5">https://ekadaster.pls.jupem.gov.my/</p> --}}
                                            <a href="https://ekadaster.sgr.jupem.gov.my/" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">KL & PUTRAJAYA</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-wpklputra.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-wpklputra.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri W. P. Kuala Lumpur & Putrajaya</h4>
                                            <a href="https://ekadaster.kul.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">NEGERI SEMBILAN</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-ns.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-ns.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Negeri Sembilan</h4>
                                            <a href="https://ekadaster.nsn.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">MELAKA</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-melaka.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-melaka.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Melaka</h4>
                                            <a href="https://ekadaster.mlk.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Level 2 - END -->
                        <!-- Level 3 - START -->
                        <div class="row mb-5 pb-3">
                            <!-- 9 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">JOHOR</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-johor.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-johor.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Johor</h4>
                                            <a href="https://ekadaster.jhr.jupem.gov.my/" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 10 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">PAHANG</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-pahang.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-pahang.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Pahang</h4>
                                            <a href="https://ekadaster.phg.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 11 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">TERENGGANU</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-terengganu.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-terengganu.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Terengganu</h4>
                                            <a href="https://ekadaster.trg.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 12 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">KELANTAN</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-kelantan.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-kelantan.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri Kelantan</h4>
                                            <a href="https://ekadaster.ktn.jupem.gov.my/Account/Login" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Level 3 - END -->
                        <!-- Level 4 - START -->
                        <div class="row mb-5 pb-3">
                            <!-- 13 -->
                            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="card flip-card text-center rounded-0">
                                    <div class="flip-front p-5">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-primary text-4">Labuan</h4>
                                            <div class="thumb-info-side-image-wrapper">
                                                <img src="/main/img/flags/flag-labuan.png" class="img-fluid" alt="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url(/main/img/flags/back-labuan.png); background-size: cover; background-position: center;">
                                        <div class="flip-content my-4">
                                            <h4 class="font-weight-bold text-color-light">eKadaster Negeri W.P. Labuan</h4>
                                            <a href="https://ekadaster.lbn.jupem.gov.my/" target="_blank" class="btn btn-light btn-modern text-color-dark font-weight-bold">TERUSKAN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Level 4 - END -->
                    </div>
                </div>
            </div>

                <!-- FLIP CARD  - END -->
			    </div>

			<!-- Footer - START -->
			@include('main.layouts.partials.footer')
			<!-- Footer - END -->

		</div>

		<!-- Vendor -->
		@include('main.layouts.partials.scripts')



	</body>
</html>

