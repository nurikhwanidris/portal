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
                            <div class="text-title-semasa-11" style="padding-bottom: 20px;">Dasar Keselamatan</div>
                        </div>
                    </div>
                    <!-- PAGE TITLE - END-->
                    <div role="main" class="main">
                        <!-- SUB TITLE - START-->
                        <h2 class="font-weight-normal text-6 mb-3">Perlindungan Data</h2>
                        <!-- SUB TITLE - END-->
                        <!-- PARAGRAPH - START -->
                        <p class="mb-0 para-align">
                            Teknologi terkini termasuk penyulitan data adalah digunakan untuk melindungi data yang dikemukakan dan pematuhan kepada standard keselamatan yang ketat adalah terpakai untuk menghalang capaian yang tidak dibenarkan.
                        </p>
                        <!-- PARAGRAPH - END -->
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

