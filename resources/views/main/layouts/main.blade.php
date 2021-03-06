<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laman Web Rasmi JUPEM</title>
    <meta name="keywords" content="Laman Web Rasmi JUPEM" />
    <meta name="description" content="Laman Web Rasmi JUPEM">
    <meta name="author" content="JUPEM">

    {{-- Livewire style --}}
    @livewireStyles

    <!-- CSS & Script -->
    @include('main.layouts.partials.headerlink')
</head>

<body data-plugin-page-transition>
    <div class="body" id="divContent">
        <!-- Header - Logo + Icons 4 + Search - START -->
        @include('main.layouts.partials.header')
        <!-- Header - Logo + Icons 4 + Search - END -->

        <div role="main" class="main">

            <!-- Bring out content to display on the main page -->

            <!-- Video - START -->
            @include('main.layouts.partials.mainvideo')
            <!-- Video - END -->

            <!-- Pengumuman - START -->
            @livewire('main.pengumuman')
            <!-- Pengumuman - END -->

            <!-- Sidemenu - START -->
            @include('main.layouts.partials.switcher')
            <!-- Sidemenu - END -->

            <!-- Slider - START -->
            @livewire('main.slider')
            <!-- Slider - END -->

            <!-- Pautan Info Semasa - START -->
            @include('main.layouts.partials.infosemasa')
            <!-- Pautan  Info Semasa  - END -->

            <!-- Pautan P & P - START -->
            @include('main.layouts.partials.pp')
            <!-- Pautan P & P - END -->

            <!-- Online Trans - START -->
            @livewire('orang-awam.transaksi-dalam-talian')
            <!-- Online Trans - END -->

            <!-- Map Hubungi Kami - START -->
            @include('main.layouts.partials.darkgreen')
            <!-- Map Hubungi Kami - END -->

            <!-- Pautan Laman Web Kerajaan - START -->
            @include('main.layouts.partials.lamanluar')
            <!-- Pautan Laman Web Kerajaan - END -->

        </div>

        <!-- Footer - START -->
        @include('main.layouts.partials.footer')
        <!-- Footer - END -->
    </div>

    <!-- Javascripts - START -->
    @include('main.layouts.partials.scripts')
    <!-- Javascripts - END -->

</body>

{{-- Livewire script --}}
@livewireScripts

</html>
