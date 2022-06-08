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
                        <button wire:model='selectedStesen' value="1"
                            class="btn btn-outline btn-quaternary mb-2 active">Pulau
                            Langkawi</button>
                        <button wire:model='selectedStesen' value="2" class="btn btn-outline btn-quaternary mb-2">Pulau
                            Pinang</button>
                        <button wire:model='selectedStesen' value="3"
                            class="btn btn-outline btn-quaternary mb-2">Lumut</button>
                        <button wire:model='selectedStesen' value="4"
                            class="btn btn-outline btn-quaternary mb-2">Perlabuhan
                            Klang</button>
                        <button wire:model='selectedStesen' value="5"
                            class="btn btn-outline btn-quaternary mb-2">Tanjung
                            Keling</button>
                        <button wire:model='selectedStesen' value="6"
                            class="btn btn-outline btn-quaternary mb-2">Kukup</button>
                        <button wire:model='selectedStesen' value="7" class="btn btn-outline btn-quaternary mb-2">Johor
                            Bahru</button>
                        <button wire:model='selectedStesen' value="8"
                            class="btn btn-outline btn-quaternary mb-2">Tanjung
                            Sedili</button>
                        <button wire:model='selectedStesen' value="9" class="btn btn-outline btn-quaternary mb-2">Pulau
                            Tioman</button>
                        <button wire:model='selectedStesen' value="10"
                            class="btn btn-outline btn-quaternary mb-2">Tanjung
                            Gelang</button>
                        <button wire:model='selectedStesen' value="11"
                            class="btn btn-outline btn-quaternary mb-2">Cendering</button>
                        <button wire:model='selectedStesen' value="12"
                            class="btn btn-outline btn-quaternary mb-2">Geting</button>
                        <button wire:model='selectedStesen' value="13" class="btn btn-outline btn-quaternary mb-2">Pulau
                            Lekai</button>
                        <button wire:model='selectedStesen' value="14"
                            class="btn btn-outline btn-quaternary mb-2">Sejingkat</button>
                        <button wire:model='selectedStesen' value="15"
                            class="btn btn-outline btn-quaternary mb-2">Bintulu</button>
                        <button wire:model='selectedStesen' value="16"
                            class="btn btn-outline btn-quaternary mb-2">Miri</button>
                        <button wire:model='selectedStesen' value="22"
                            class="btn btn-outline btn-quaternary mb-2">Labuan</button>
                        <button wire:model='selectedStesen' value="17" class="btn btn-outline btn-quaternary mb-2">Kota
                            Kinabalu</button>
                        <button wire:model='selectedStesen' value="18"
                            class="btn btn-outline btn-quaternary mb-2">Kudat</button>
                        <button wire:model='selectedStesen' value="19"
                            class="btn btn-outline btn-quaternary mb-2">Sandakan</button>
                        <button wire:model='selectedStesen' value="20" class="btn btn-outline btn-quaternary mb-2">Lahad
                            Datu</button>
                        <button wire:model='selectedStesen' value="21"
                            class="btn btn-outline btn-quaternary mb-2">Tawau</button>
                    </div>
                </div>
                <!-- Button - Stesen - END -->

                <!-- SUB TITLE - START-->
                <h2 class="font-weight-normal text-6 mb-3">
                    {{ __('message.jadual_stesyen', ['STESEN' => 'Pulau Langkawi']) }}</h2>
                <!-- SUB TITLE - END-->
                <!-- Button - Pilih hari - START -->
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn btn-success mb-2">{{ __('message.current') }}</a>
                        <a href="#" class="btn btn-success mb-2">{{ __('message.2_hari') }}</a>
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
