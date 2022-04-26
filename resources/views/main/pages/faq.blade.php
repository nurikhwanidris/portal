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

				<div class="container" style="margin-bottom: 100px;">
                    <!-- PAGE TITLE - START-->
                    <div class="row">
                        <div class="col">
                            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Soalan Lazim</div>
                        </div>
                    </div>
                    <!-- PAGE TITLE - END-->
                    <!-- TAB STYLE 3 - START -->
					<div class="row">
						<div class="col">
							{{-- <div class="tabs tabs-bottom tabs-center tabs-simple"> --}}
                            <div class="tabs tabs-bottom tabs-center tabs-simple">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured fas fa-user"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">UMUM</p>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured fas fa-file"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">PEMETAAN</p>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#tabsNavigationSimpleIcons3" data-bs-toggle="tab">
											<span class="featured-boxes featured-boxes-style-6 p-0 m-0">
												<span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
													<span class="box-content p-0 m-0">
														<i class="icon-featured fab fa-google-plus-g"></i>
													</span>
												</span>
											</span>
											<p class="mb-0 pb-0">KADASTER</p>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tabsNavigationSimpleIcons1">
										{{-- <div class="text-center"> --}}
                                            <!-- FILTERING - START -->
                                            <div class="row kotak-filter">
                                                <div class="form-group col-lg-12">
                                                    <label class="form-label mb-1 text-2">Select</label>
                                                    <div class="custom-select-1">
                                                        <select class="form-select form-control  border-color-quaernary h-auto" name="dd-nama" required>
                                                            <option value="">Choose...</option>
                                                            <option value="1">Produk dan Perkhidmatan</option>
                                                            <option value="2">Latihan Amali/Praktikal</option>
                                                            <option value="3">Lain-lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- FILTERING - END -->
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
                                                                            Bagaimanakah untuk mendapatkan data digital JUPEM?
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="collapse200One" class="collapse" aria-labelledby="collapse200HeadingOne" data-bs-parent="#accordion200">
                                                                    <div class="card-body pt-0">
                                                                        <!-- PARAGRAPH - START -->
                                                                        <p class="mb-0 para-align">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                                        </p>
                                                                        <div class="para-gap"></div>
                                                                        <!-- PARAGRAPH - END -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ACCORDION 1 - END -->
										{{-- </div> --}}
									</div>
									<div class="tab-pane" id="tabsNavigationSimpleIcons2">
										<div class="text-center">
                                            456
										</div>
									</div>
									<div class="tab-pane" id="tabsNavigationSimpleIcons3">
										<div class="text-center">
                                            789
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- TAB STYLE 3 - END -->
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
