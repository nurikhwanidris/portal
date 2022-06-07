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
                        <div class="text-title-semasa-11" style="padding-bottom: 20px;">{{ __('message.staps') }}</div>
                    </div>
                </div>
                <!-- PAGE TITLE - END-->
                <!-- SUB TITLE - START-->
                <h2 class="font-weight-normal text-6 mb-3">{{ __('message.senarai_stesyen') }}</h2>
                <!-- SUB TITLE - END-->
                <!-- Button - Stesen - START -->
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-outline btn-quaternary mb-2 active">Pulau Langkawi</a>
                        <a href="#" class="btn btn-outline btn-quaternary mb-2">Pulau Pinang</a>
                        <a href="#" class="btn btn-outline btn-quaternary mb-2">Lumut</a>
                    </div>
                </div>
                <!-- Button - Stesen - END -->

                <!-- SUB TITLE - START-->
                <h2 class="font-weight-normal text-6 mb-3">{{ __('message.jadual_stesyen') }}</h2>
                <!-- SUB TITLE - END-->
                <!-- Button - Pilih hari - START -->
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-success mb-2">{{ __('message.current') }}</a>
                        <a href="#" class="btn btn-success mb-2">{{ __('message.2_days') }}</a>
                        <a href="#" class="btn btn-success mb-2">{{ __('message.7_hari') }}</a>
                    </div>
                </div>
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
