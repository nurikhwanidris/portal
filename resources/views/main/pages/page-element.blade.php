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
			<!-- Header - Logo + Icons 4 + Search - END -->

			<div role="main" class="main">
				<!-- Title Section - START -->
				@livewire('title.page-title')
				<!-- Title Section - END -->

				<!-- Menu - START -->
				@include('main.layouts.partials.switcher')
				<!-- Menu - END -->

                <div role="main" class="main">
                    <div class="container" style="margin-bottom: 100px;">
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TABLE</h4>
                        (paging + record + filtering)<br>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>TITLE</th>
                                    <th>TITLE</th>
                                    <th>TITLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>autoincrement</td>
                                    <td>text</td>
                                    <td>text</td>
                                    <td>text</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- ============== -->
                        <br>

                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">BUTTONS</h4>

                        <br>
                        Button - Outline Button (view more + center)
                        <div class="text-center"><a href="" class="btn btn-outline-dark">Maklumat Terkini <i class="fas fa-chevron-right"></i></a></div>


                        Button - Hubungi Kami
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-primary col-sm-9" style="padding-top: 90px;">
                                <a href="#" class="btn btn-modern btn-tertiary mb-2">Peta Wisma JUPEM</a>&nbsp;
                                <a href="#" class="btn btn-modern btn-secondary mb-2">Direktori Pegawai</a>
                            </div>
                        </div>
                        <!-- ============== -->
                        <br>
                        <hr class="solid">

                        <h4 class="text-light bg-color-primary">ACCORDION 1</h4>

                        <!-- ACCORDION 1 - START -->
                        <div class="row pb-4">
                            <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                <div class="col mb-4 mb-lg-0">
                                    <div class="accordion accordion-modern-status accordion-modern-status-borders accordion-modern-status-arrow" id="accordion200">
                                        <!-- 1 -->
                                        <div class="card card-default">
                                            <div class="card-header" id="collapse200HeadingOne">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200One" aria-expanded="false" aria-controls="collapse200One">
                                                        1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne" data-bs-parent="#accordion200">
                                                <div class="card-body pt-0">
                                                    Content 1
                                                </div>
                                            </div>
                                        </div>
                                        <!-- 2 -->
                                        <div class="card card-default">
                                            <div class="card-header" id="collapse200HeadingTwoA">
                                                <h4 class="card-title m-0">
                                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse200TwoA" aria-expanded="false" aria-controls="collapse200Two">
                                                        2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse200TwoA" class="collapse" aria-labelledby="collapse200HeadingTwoA" data-bs-parent="#accordion200">
                                                <div class="card-body pt-0">
                                                    Content 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ACCORDION 1 - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">

                        <h4 class="text-light bg-color-primary">ACCORDION 2</h4>

                        <!-- ACCORDION 2 - START -->
                        <div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
                            <!-- 1 -->
                            <section class="toggle">
                                    <span class="toggle-title text-4">
                                        <div class="accordion-jupem-negeri">11111111111111111111111111</div>
                                    </span>
                                    <div class="toggle-content margin-content-2">
                                        111
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                            </section>
                        </div>
                        <!-- ACCORDION 2 - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">PARAGRAPH</h4>
                        <br>

                        <!-- PARAGRAPH - START -->
                        <p class="mb-0 para-align-title">Para Title:</p>
                        <p class="mb-0 para-align">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <div class="para-gap"></div>
                        <!-- PARAGRAPH - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">CAROUSEL</h4>

                        <div class="col-lg-4" style="padding: 20px 30px 20px 30px;">
                            <div class="row text-title-semasa-1">Sorotan Terkini</div>
                            <br>
                            <div>
                                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 3000}" >
                                    <!-- 1 -->
                                    <div>
                                        <div class="row">
                                            <div class="col" style="width: 180px;"><img src="img/blog/small/blog-1.jpg"></div>
                                            <div class="col" style="width: 180px;"><img src="img/blog/small/blog-1.jpg"></div>
                                        </div>
                                        <br>
                                        <div class="recent-posts">
                                            <article class="post">
                                                <div class="row">
                                                    <div class="col-auto pe-0">
                                                        <div class="post-date">
                                                            <span class="day text-color-dark font-weight-extra-bold">15</span>
                                                            <span class="month">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-1">
                                                        <div><h4 class="line-height-3"><a href="#" class="text-decoration-none text-show-line-tajuk">Mesyuarat Jawatankuasa Pemetaan dan Data Spatial Negara (JPDSN) Ke-72 Mesyuarat Jawatankuasa Pemetaan dan Data Spatial Negara (JPDSN) Ke-72</a></h4><div>
                                                        <div class="mb-1 info-semasa-paragraph text-show-line">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </div>
                                                        <!-- <a href="" class="read-more text-color-dark font-weight-bold text-2">MAKLUMAT TERPERINCI <i class="fas fa-chevron-right"></i></a> -->
                                                        <!-- <button type="button" class="btn btn-outline-dark">Maklumat Terkini</button> -->
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div>
                                        <div class="row">
                                            <div class="col" style="width: 180px;"><img src="img/blog/small/blog-1.jpg"></div>
                                            <div class="col" style="width: 180px;"><img src="img/blog/small/blog-1.jpg"></div>
                                        </div>
                                        <br>
                                        <div class="recent-posts">
                                            <article class="post">
                                                <div class="row">
                                                    <div class="col-auto pe-0">
                                                        <div class="post-date">
                                                            <span class="day text-color-dark font-weight-extra-bold">15</span>
                                                            <span class="month">JAN</span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-1">
                                                        <div><h4 class="line-height-3"><a href="#" class="text-decoration-none text-show-line-tajuk">Mesyuarat Jawatankuasa Pemetaan dan Data Spatial Negara (JPDSN) Ke-72 Mesyuarat Jawatankuasa Pemetaan dan Data Spatial Negara (JPDSN) Ke-72</a></h4><div>
                                                        <div class="mb-1 info-semasa-paragraph text-show-line">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><a href="" class="btn btn-outline-dark">Maklumat Terkini <i class="fas fa-chevron-right"></i></a></div>
                            </div>
                        </div>
                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">CAROUSEL - CLIENT</h4>

                        <!-- CAROUSEL - CLIENT -  START -->
                        <div  class="container">
                            <div class="row">
                                <div class="col">
                                    <h2 class="font-weight-normal text-center text-6" style="margin-bottom: 5px;"><strong class="text-title-strong">Pautan</strong> Laman Web Kerajaan</h2>
                                    <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/jkptg-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/ketsa-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/jmg-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/perhilitan-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/jpsm-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/frim-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/instun-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/mygov-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/ljt-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/seda-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/ec-colour.png" alt="">
                                        </div>
                                        <div>
                                            <img class="img-fluid opacity-6 icon-client" src="img/logo-default/icon-pautan/yahijau-colour.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- CAROUSEL - CLIENT -  END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">LIST - ADDRESS</h4>

                        <!-- LIST ADDRESS  - START -->
                        <div class="row mb-lg-4">
                            <!-- Alamat 1 -->
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-info padding-right-alamat-jupem-negeri">
                                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-4">
                                            <span class="thumb-info-caption">
                                                <ul class="list list-icons list-icons-style-2 list-icons-sm mt-2 appear-animation ul-kite" data-appear-animation="maskUp" data-appear-animation-delay="300">
                                                    <h4 class="font-weight-bold mb-2 size-text-standard">Jabatan Ukur dan Pemetaan Johor</h4>
                                                    <h2 class="font-weight-bold mb-0 pt-0 mt-0 size-text-standard-2" >
                                                        Pengarah: Sr MOHD LATIF BIN ZAINAL
                                                    </h2>
                                                    <li class="li-kite">
                                                        <i class="fas fa-envelope top-6"></i>
                                                        <strong>Email:</strong><br>
                                                        <a href="mailto:ali@ketsa.gov.my">mohdlatif@jupem.gov.my</a>
                                                    </li>
                                                    <li class="li-kite">
                                                        <i class="fas fa-map-marker-alt top-6"></i>
                                                        <strong>Alamat:</strong><br>
                                                        Tingkat 7, 8 & 9, Blok A, Wisma Persekutuan,
                                                        Jalan Air Molek, 80000 Johor Bahru,
                                                        Johor Darul Takzim.
                                                    </li>
                                                    <li class="li-kite">
                                                        <i class="fas fa-phone top-6"></i>
                                                        <strong>Tel:</strong><br>
                                                        07-223 1244 ext 900
                                                    </li>
                                                    <li class="li-kite">
                                                        <i class="fas fa-fax top-6"></i>
                                                        <strong>Faks:</strong><br>
                                                        07-223 8535
                                                    </li>
                                                </ul>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- LIST ADDRESS  - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">LIST - TEXT</h4>
                        List 1
                        <!-- LIST TEXT - START -->
                        <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" style="padding-top:0 !important;">
                            <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
                                <ul class="list list-icons list-icons-style-3 list-tertiary list-icons-sm">
                                    <li><i class="fas fa-check"></i><a href="#">1</a></li>
                                    <li><i class="fas fa-check"></i><a href="#">2</a></li>
                                    <li><i class="fas fa-check"></i><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- LIST TEXT - END -->

                        List 1 Reverse
                        <!-- LIST TEXT - START -->
                        <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" style="padding-top:0 !important;">
                            <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
                                <ul class="list list-icons list-icons-style-2 list-tertiary list-icons-sm">
                                    <li><i class="fas fa-check"></i><a href="#">1</a></li>
                                    <li><i class="fas fa-check"></i><a href="#">2</a></li>
                                    <li><i class="fas fa-check"></i><a href="#">3</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- LIST TEXT - END -->

                        List 2 - Number
                        <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter" style="padding-top:0 !important;">
                            <div class="col-md-12 pe-md-5 mb-5 mb-md-0">
                                <ol class="list list-ordened list-ordened-style-2 list-tertiary list-icons-sm">
                                    <li>Lorem ipsum</li>
                                    <li>Consectetur adipi</li>
                                    <li>Integer molestie</li>
                                    <li>Facilisis in pre</li>
                                    <li>Faucibus porta la</li>
                                </ol>
                            </div>
                        </div>

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">LIGHTBOX</h4>

                        <!-- LIGHTBOX - START -->
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a class="img-thumbnail img-thumbnail-no-borders d-block lightbox" href="img/carta-organisasi/jupem-johor.jpg" data-plugin-options="{'type':'image'}">
                                            <img class="img-fluid" src="img/carta-organisasi/jupem-johor.jpg" alt="Project Image">
                                            <span class="zoom">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- LIGHTBOX - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TAB - FOR NAVIGATION</h4>

                        <!-- TAB NAVI - START -->
                        <div class="row">
                            <div class="col-lg-3">
                                <aside class="sidebar">
                                    <!-- Tab Sub - START -->
                                        <div class="tabs tabs-vertical tabs-left tabs-navigation">
                                        <ul class="nav nav-tabs col-sm-3">
                                            <li class="nav-item">
                                                <a class="nav-link active"  href="#tab-1" data-bs-toggle="tab">1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-2" data-bs-toggle="tab">2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-3" data-bs-toggle="tab">3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tab-4" data-bs-toggle="tab">4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab Sub - END -->
                                </aside>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-pane tab-pane-navigation active" id="tab-1">
                                    test 1
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tab-2">
                                    test 2
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tab-3">
                                    test 3
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                                <div class="tab-pane tab-pane-navigation" id="tab-4">
                                    test 4
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                        <!-- TAB NAVI - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TITLE MAIN + BREADCRUMB</h4>

                        <!-- MAIN TITLE - START-->
                        <section class="page-header page-header-modern page-header-md bg-transparent" style="padding: 0 !important;">
                            <div class="container" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-md-6 align-self-center order-2 order-md-1 p-static">
                                        <div class="row">
                                            <div class="font-weight-normal text-title-small">Info Korporat</div>
                                            <div class="font-weight-normal text-6"><strong class="text-title-strong">Mengenai</strong> JUPEM</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 align-self-center order-1 text-md-end">
                                        <ul class="breadcrumb d-block breadcrumb-block breadcrumb-light mb-2 mb-md-0">
                                            <li><a href="#">Laman Utama</a></li>
                                            <li><a href="#">Info Korporat</a></li>
                                            <li class="active">Mengenai JUPEM</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- MAIN TITLE - END-->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TITLE MAIN + BREADCRUMB 2</h4>

                        <!-- MAIN TITLE + BREADCRUMB 2 - START-->
                        <section class="page-header page-header-modern page-header-md bg-transparent" style="padding: 0 !important;">
                            <div class="container" style="margin-top:50px;">
                                <div class="row">
                                    <div class="col-md-6 align-self-center order-2 order-md-1 p-static">
                                        <div class="row">
                                            <div class="font-weight-normal text-title-small">
                                                Lorem ipsum - Top Page
                                            </div>
                                            <div class="font-weight-normal text-6">
                                                <strong class="text-title-strong">
                                                Lorem ipsum
                                                </strong>
                                                Sub Page
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 align-self-center order-1 text-md-end">
                                        <ul class="breadcrumb d-block breadcrumb-block breadcrumb-light mb-2 mb-md-0">
                                            <li><a href="#">Laman Utama</a></li>
                                            <li class="#">Lorem ipsum - Sub Page</li>
                                            <li class="active">Lorem ipsum - Current Page</li>
                                        </ul>
                                    </div> --}}
                                </div>
                                <div class="row">
                                    <div class="col-md-12 align-self-center order-1">
                                        <ul class="breadcrumb d-block breadcrumb-dark mb-2 mb-md-0">
                                            <li><a href="#">Laman Utama</a></li>
                                            <li class="#">Lorem ipsum - Sub Page</li>
                                            <li class="active">Lorem ipsum - Current Page</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- MAIN TITLE + BREADCRUMB 2 - END-->

                        <!-- ============== -->
                        <h2 class="font-weight-normal text-6 mb-3">
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TITLE PAGE</h4>

                        <!-- PAGE TITLE - START-->
                        <div class="row">
                            <div class="col">
                                <div class="text-center text-title-semasa-11" style="padding-top: 40px;padding-bottom: 20px;">Page Title</div>
                            </div>
                        </div>
                        <!-- PAGE TITLE - END-->

                        Title left
                        <div class="row">
                            <div class="col">
                                <div class="text-title-semasa-11" style="padding-bottom: 20px;">Tajuk Page</div>
                            </div>
                        </div>

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">TITLE SUB</h4>

                        <!-- SUB TITLE - START-->
                        <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Tajuk</strong> Tajuk &amp; Tajuk</h2>
                        <!-- SUB TITLE - END-->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">FANCY TITLE</h4>

                        <!-- FANCY TITLE - START-->
                        <div class="container">
                            <div class="row text-center pt-3">
                                <div class="col-md-10 mx-md-auto">
                                    <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                                        <!-- <span>Porto is </span> -->
                                        <span class="word-rotator-words bg-dark">
                                            <b class="is-visible">Visi</b>
                                            <b>1</b>
                                            <b>2</b>
                                            <b>3 </b>
                                            <b>4</b>
                                            <b>5</b>
                                        </span>
                                        <span> JUPEM.</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <!-- FANCY TITLE - END-->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">ICON BOXES - Link to another page</h4>

                        <div class="row">
                            <!-- Icon Row - START -->
                            <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                <div class="row">
                                    <!-- <div class="col-lg-3 col-sm-6"></div> -->
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                            <div class="box-content box-content-border-0">
                                                <a href="#"><i class="icon-featured far fa-file-alt"></i></a>
                                                <h4 class="font-weight-normal text-5 mt-3">Info  <strong class="font-weight-extra-bold">JUPEM</strong></h4>
                                                <p class="mb-2 mt-2 text-2">Visi, Misi, Moto, Dasar Kualiti, Kod Etika dan Definisi Logo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="featured-box featured-box-quaternary  featured-box-effect-3">
                                            <div class="box-content box-content-border-0">

                                                <a href="#"><i class="icon-featured far fa-edit"></i></a>
                                                <h4 class="font-weight-normal text-5 mt-3">Tugas <strong class="font-weight-extra-bold">dan Peranan</strong> </h4>
                                                <p class="mb-2 mt-2 text-2">Tugan, Peranan dan Punca Kuasa.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-3 col-sm-6"></div> -->
                                </div>
                            </div>
                            <!-- Icon Row - END-->
                        </div>
                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">ICON BOXES - Info</h4>

                        <div class="featured-boxes featured-boxes-style-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="featured-box featured-box-primary  featured-box-effect-5">
                                            <div class="box-content">
                                                <i class="icon-featured far fa-file-alt"></i>
                                                <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Visi</strong> kami</h4>
                                                <p class="mb-0">Menjadikan JUPEM terbilang dalam Perkhidmatan dan Pengurusan Ukur, Pemetaan dan Geospatial bagi memenuhi wawasan Negara.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="featured-box featured-box-secondary featured-box-effect-5">
                                            <div class="box-content">
                                                <i class="icon-featured far fa-star"></i>
                                                <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Misi</strong> kami</h4>
                                                <p class="mb-0">Menyediakan Perkhidmatan dan Pengurusan Ukur, Pemetaan dan Geospatial yang berkualiti melalui sistem terbaik, sumber manusia yang kompeten dan persekitaran kerja yang kondusif.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="featured-box featured-box-tertiary featured-box-effect-5">
                                            <div class="box-content">
                                                <i class="icon-featured far fa-edit"></i>
                                                <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Moto</strong> kami</h4>
                                                <p class="mb-0">Pemacu Kesejahteraan Rakyat dan Pembangunan Negara. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">SECTION + TEXT</h4>

                        <!-- SECTION + TEXT TO LEFT - START -->
                        <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="img-thumbnail img-thumbnail-no-borders d-block lightbox" href="img/style-switcher.png" data-plugin-options="{'type':'image'}">
                                                <img class="img-fluid" src="img/style-switcher.png" alt="Project Image">
                                                <span class="zoom">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 ps-md-5">
                                <!-- PARAGRAPH - START -->
                                <p class="mb-0 para-align-title">Jenis Peta:</p>
                                <p class="mb-0 para-align">
                                    PETA TOPOGRAFI SEMENANJUNG (SIRI DNMM5101)
                                </p>
                                <div class="para-gap"></div>
                                <p class="mb-0 para-align-title">Keterangan:</p>
                                <p class="mb-0 para-align">
                                    Peta versi Tidak Terhad berskala 1:50 000 merupakan peta yang meliputi kawasan seluruh Semenanjung Malaysia. Peta ini diterbitkan bagi kegunaan awam berdasarkan spesifikasi yang telah ditetapkan merangkumi ciri-ciri seperti rupa muka bumi semulajadi, ciri - ciri buatan, hidrografi, hypsografi, demarcation dan relief beserta anotasi. Ciri-ciri yang ditunjukkan adalah sempadan antarabangsa, negeri, daerah, mukim dan rizab. Relief digambarkan dengan garis kontur bersela 100 meter; ukur tinggi dalam ukuran meter. Jalan dikelaskan kepada lebuhraya kembar dan tunggal, lorong boleh berkereta motor, lorong jalan kaki dan jalan sedang dibina. Tumbuh-tumbuhan ditunjukkan dengan simbol, bandar dan kawasan tepubina ditunjukkan dengan simbol tertentu dan hidrografi juga ditunjukkan. Peta ini telah disusun di atas Unjuran Bentuk Benar Serong Ditepati Malaya
                                </p>
                                <!-- PARAGRAPH - END -->
                            </div>
                        </div>
                        <!-- SECTION + TEXT TO LEFT - END -->

                        <!-- SECTION + TEXT TO RIGHT - START -->
                        <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
                            <div class="col-md-8 pe-md-5 mb-5 mb-md-0">
                                <!-- PARAGRAPH - START -->
                                <p class="mb-0 para-align-title">Jenis Peta:</p>
                                <p class="mb-0 para-align">
                                    PETA TOPOGRAFI SEMENANJUNG (SIRI DNMM5101)
                                </p>
                                <div class="para-gap"></div>
                                <p class="mb-0 para-align-title">Keterangan:</p>
                                <p class="mb-0 para-align">
                                    Peta versi Tidak Terhad berskala 1:50 000 merupakan peta yang meliputi kawasan seluruh Semenanjung Malaysia. Peta ini diterbitkan bagi kegunaan awam berdasarkan spesifikasi yang telah ditetapkan merangkumi ciri-ciri seperti rupa muka bumi semulajadi, ciri - ciri buatan, hidrografi, hypsografi, demarcation dan relief beserta anotasi. Ciri-ciri yang ditunjukkan adalah sempadan antarabangsa, negeri, daerah, mukim dan rizab. Relief digambarkan dengan garis kontur bersela 100 meter; ukur tinggi dalam ukuran meter. Jalan dikelaskan kepada lebuhraya kembar dan tunggal, lorong boleh berkereta motor, lorong jalan kaki dan jalan sedang dibina. Tumbuh-tumbuhan ditunjukkan dengan simbol, bandar dan kawasan tepubina ditunjukkan dengan simbol tertentu dan hidrografi juga ditunjukkan. Peta ini telah disusun di atas Unjuran Bentuk Benar Serong Ditepati Malaya
                                </p>
                                <!-- PARAGRAPH - END -->
                            </div>
                            <div class="col-md-4 px-5 px-md-3">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="img-thumbnail img-thumbnail-no-borders d-block lightbox" href="img/style-switcher.png" data-plugin-options="{'type':'image'}">
                                                <img class="img-fluid" src="img/style-switcher.png" alt="Project Image">
                                                <span class="zoom">
                                                    <i class="fas fa-search"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION + TEXT TO RIGHT - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">FORM ELEMENT</h4>


                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">STEPS/PROCESS/TIMELINE</h4>

                        <!-- STEPS/PROCESS/TIMELINE - START -->
                        <div class="row">
                            <div class="col">
                                <div class="container" style="display: flex;">
                                    <div style="width: 30%;padding-left:0;">
                                        TAHUN
                                    </div>
                                    <div style="flex-grow: 1;">
                                        SEJARAH PENUBUHAN
                                    </div>
                                </div>
                                <div class="process process-vertical py-4">
                                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">

                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">1885</strong>
                                        </div>

                                        <div class="process-step-content">
                                            <!-- <h4 class="mb-1 text-4 font-weight-bold">First Step</h4> -->
                                            <p class="mb-0">
                                                Jabatan Ukor Negeri Johor yang terawal di Semenanjung Tanah Melayu telah ditubuhkan di Negeri Johor dengan pengarah pertamanya adalah Dato’ Yahya bin Awaluddin. Pejabat pertama terletak di Bangunan Sultan Ibrahim, Bukit Timbalan, Johor Bahru.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">1990</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <!-- <h4 class="mb-1 text-4 font-weight-bold">Second Step</h4> -->
                                            <p class="mb-0">
                                                Jabatan Ukor Negeri Johor telah ditempatkan di bawah Jabatan Ukor Negeri-Negeri Melayu Bersekutu.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="process-step appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                        <div class="process-step-circle">
                                            <strong class="process-step-circle-content">1982</strong>
                                        </div>
                                        <div class="process-step-content">
                                            <!-- <h4 class="mb-1 text-4 font-weight-bold">Third Step</h4> -->
                                            <p class="mb-0">
                                                Jabatan Ukur dan Pemetaan Johor telah berpindah ke Bangunan Persekutuan, Tingkat 7, 8 dan 9, Blok A, Jalan Ayer Molek, Johor Bahru.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- STEPS/PROCESS/TIMELINE - END -->

                        <!-- ============== -->

                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">GALLERY 1</h4>

                        <!-- GALLERY 1 - START -->
                        <div class="row">
                            <div class="col">
                                    <div class="row portfolio-list sort-destination">
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    <div class="row portfolio-list sort-destination">
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
                                            <div class="portfolio-item">
                                                <a href="#">
                                                    <span class="thumb-info thumb-info-lighten border-radius-0">
                                                        <span class="thumb-info-wrapper border-radius-0">
                                                            <img src="img/projects/project.jpg" class="img-fluid border-radius-0" alt="">
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- GALLERY 1 - END -->

                        <!-- ============== -->

                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">GALLERY 2</h4>

                        <!-- GALLERY 2 - START -->
                        <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                            <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-1.jpg">
                                        <img class="img-fluid" src="img/projects/project-1.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-2.jpg">
                                        <img class="img-fluid" src="img/projects/project-2.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-3.jpg">
                                        <img class="img-fluid" src="img/projects/project-3.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-4.jpg">
                                        <img class="img-fluid" src="img/projects/project-4.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-5.jpg">
                                        <img class="img-fluid" src="img/projects/project-5.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-6.jpg">
                                        <img class="img-fluid" src="img/projects/project-6.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project-7.jpg">
                                        <img class="img-fluid" src="img/projects/project-7.jpg" alt="Project Image">
                                    </a>
                                </div>
                                <div>
                                    <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="img/projects/project.jpg">
                                        <img class="img-fluid" src="img/projects/project.jpg" alt="Project Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- GALLERY 2 - END -->

                        <!-- ============== -->

                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">MEDIA</h4>
                        <hr class="solid">

                        <!-- MEDIA - START -->
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Video Korporat JUPEM</h4>
                                <div class="ratio ratio-16x9 ratio-borders">
                                    <!-- <iframe frameborder="0" allowfullscreen="" src="https://youtu.be/HaKc4P8OC-o"></iframe> -->
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HaKc4P8OC-o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p class="mb-0 para-align">Tempoh masa: 9:10</p>
                                <p class="mb-0 para-align">Tarikh: 03-04-2018</p>
                            </div>
                            <div class="col-lg-6">
                                <h4>From Borders to Boundaries – The JUPEM Story</h4>
                                <div class="ratio ratio-16x9 ratio-borders">
                                    <!-- <iframe frameborder="0" allowfullscreen="" src="//www.youtube.com/embed/l-epKcOA7RQ?showinfo=0&amp;wmode=opaque"></iframe> -->
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/HcJn49JK_vI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <p class="mb-0 para-align">Tempoh masa: 9:10</p>
                                <p class="mb-0 para-align">Tarikh: 03-04-2018</p>
                            </div>
                        </div>

                        Number 1
						<div class="col-lg-12 ratio ratio-soundcloud">
							<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1250482729&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
						</div>
						<br>Number 2<br>
						<div class="col-lg-12" style="padding-top: 50px;">
							<audio controls  loop autoplay>
			                   <source src="https://www.jupem.gov.my/jupem18a/assets/uploads/images/contents/20210909111102-61b57-omv_koir_jupem_8-pesuma.mp4" type="audio/ogg">
			                   Your browser dose not Support the audio Tag
			               </audio>
			           </div>

                        <!-- MEDIA - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">FORM ELEMENT + DATEPICKER</h4>

                        <!-- DATEPICKER - START -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <form class="form-horizontal form-bordered">
                                        <div class="form-group row pb-3">
                                            <label class="col-lg-3 control-label text-lg-end pt-2">Default Datepicker</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </span>
                                                    <input type="text" data-plugin-datepicker class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row pb-3">
                                            <label class="col-lg-3 control-label text-lg-end pt-2">Date range</label>
                                            <div class="col-lg-6">
                                                <div class="input-daterange input-group" data-plugin-datepicker>
                                                    <span class="input-group-text">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </span>
                                                    <input type="text" class="form-control" name="start">
                                                    <span class="input-group-text border-start-0 border-end-0 rounded-0">
                                                        to
                                                    </span>
                                                    <input type="text" class="form-control" name="end">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- DATEPICKER - END -->
                        <br><strong>Style 1</strong><br>
                        <div class="form-group row pb-3">
                            <label class="col-lg-2 control-label text-lg-end pt-2">Keyword</label>
                            <div class="col-lg-10">
                                <input class="form-control border-color-quaernary mb-3" type="text" placeholder="Title/Code" aria-label="default color input example">
                            </div>
                        </div>
                        <br><strong>Style 2</strong><br>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-2">Keyword</label>
                                {{-- <input type="text" placeholder="Title/Code"  value="" data-msg-required="Please enter keyword." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required=""> --}}
                                <input class="form-control border-color-quaernary" type="text" placeholder="Title/Code" aria-label="default color input example">
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="form-label mb-1 text-2">Date Range</label>
                                <div class="input-daterange input-group" data-plugin-datepicker>
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input type="text" class="form-control border-color-quaernary" name="start">
                                    <span class="input-group-text border-start-0 border-end-0 rounded-0">to</span>
                                    <input type="text" class="form-control border-color-quaernary" name="end">
                                </div>
                            </div>
                            <div class="form-group col">
                                <label class="form-label">City</label>
                                <div class="custom-select-1">
                                    {{-- <select class="form-select form-control  border-color-quaernary h-auto py-2" data-msg-required="Please select a city." name="city" required> --}}
                                    <select class="form-select form-control  border-color-quaernary h-auto py-2" name="dd-nama" required>
                                        <option value="">Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br><strong>Style 3</strong><br>
                        <!-- FILTERING - START -->
                        <div class="row kotak-filter">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Keyword</label>
                                <input class="form-control border-color-quaernary" type="text" placeholder="Title/Code" aria-label="default color input example">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">Select</label>
                                <div class="custom-select-1">
                                    <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama" required>
                                        <option value="">Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- FILTERING - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">DATATABLE + PAGINATION + RECORD SELECTOR</h4>

                        <br><strong>Example 1</strong><br>
                        <!-- Datatable Full - START -->
                        <table id="example"  class="table table-striped table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sydney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        <!-- Datatable - END -->
                        <br><strong>Example 2 - Empty Table + Pagination + Record Selector</strong><br>
                        <!-- Datatable - START -->
                        <table id="example"  class="table table-striped table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="table-title-jupem">#</th>
                                    <th class="table-title-jupem">TAJUK 1</th>
                                    <th class="table-title-jupem">FORMAT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>autoincrement</td>
                                    <td>text</td>
                                    <td>text</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Datatable - END -->

                        <!-- ============== -->
                        <br>
                        <hr class="solid">
                        <h4 class="text-light bg-color-primary">LOGIN FORM</h4>

                        <!-- Login - START -->
                        <div class="row justify-content-md-center">
                            <div class="col-md-9">
                                <div class="featured-box featured-box-primary text-start mt-0">
                                    <div class="box-content">
                                        <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Sila Log Masuk</h4>
                                        <form action="/" id="frmSignIn" method="post" class="needs-validation">
                                            <div class="row">
                                                <div class="form-group col">
                                                    <label class="form-label">E-mail</label>
                                                    <input type="text" name="username" value="" class="form-control form-control-lg" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <a class="float-end" href="#">(Lupa Password?)</a>
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" value="" class="form-control form-control-lg" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="rememberme" class="custom-control-input" id="rememberme">
                                                        <label class="custom-control-label text-2" for="rememberme">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <input type="submit" value="Login" class="btn btn-primary btn-modern float-end" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Login - END -->





                        <br>
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
