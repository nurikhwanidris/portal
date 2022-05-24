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
                            <div class="text-title-semasa-11" style="padding-bottom: 20px;">STAPS</div>
                        </div>
                    </div>
                    <!-- PAGE TITLE - END-->
                    <!-- SUB TITLE - START-->
                    <h2 class="font-weight-normal text-6 mb-3">Senarai Stesen</h2>
                    <!-- SUB TITLE - END-->
                    <!-- Button - Stesen - START -->
                    <div class="row" style="padding-bottom:20px;border: solid 1px red;">
                        <div class="col">
                            <a href="#" class="btn btn-outline btn-quaternary mb-2 active">Pulau Langkawi</a>
                            <a href="#" class="btn btn-outline btn-quaternary mb-2">Pulau Pinang</a>
                            <a href="#" class="btn btn-outline btn-quaternary mb-2">Lumut</a>
                        </div>
                    </div>
                    <!-- Button - Stesen - END -->

                    <!-- SUB TITLE - START-->
                    <h2 class="font-weight-normal text-6 mb-3">Waktu Air Pasang Surut Untuk Klang</h2>
                    <!-- SUB TITLE - END-->
                    <!-- Button - Pilih hari - START -->
                    <div class="row" style="padding-bottom:20px;border: solid 1px blue;">
                        <div class="col">
                            <a href="#" class="btn btn-success mb-2">Semasa</a>
                            <a href="#" class="btn btn-success mb-2">2 Hari</a>
                            <a href="#" class="btn btn-success mb-2">7 Hari</a>
                        </div>
                    </div>
                    <!-- Button - Pilih hari - END -->
                    {{-- <div class="col-md-8 ps-md-5">
                        <p class="mb-0 para-align-title">Waktu pasang surut bagi: <strong> Pulau Langkawi </strong></p>
                        <p class="mb-0 para-align">Jangkaan air pasang surut bagi hari <strong> Selasa, 24 Mei 2022</strong> untuk <strong>Pulau Langkawi</strong> adalah seperti berikut:</p>
                    </div> --}}
                    @livewire('main.staps-table')
                    

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

