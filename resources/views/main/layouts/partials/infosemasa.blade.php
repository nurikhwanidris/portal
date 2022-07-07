<div class="container-fluid" style="margin-bottom: -80px;">
    <div class="row" style="padding: 10px 40px;">
        <!-- Berita Terkini 1 -->
        <div class="col-sm-10 col-md-7 col-lg-4" style="padding: 20px 30px 20px 30px;">
            <span class="row text-title-semasa-1 mb-2">{{ __('message.Latest News') }}</span>
            @livewire('main.berita-terkini')
        </div>

        <!-- Tawaran Perolehan 2 -->
        <div class="col-sm-10 col-md-7 col-lg-4" style="padding:20px 30px 20px 30px;">
            <span class="row text-title-semasa-1 mb-2">{{ __('message.Procurement Offer') }}</span>
            @livewire('main.tawaran-perolehan')
        </div>

        <!-- Waktu Solat -->
        <div class="col-sm-10 col-md-7 col-lg-4" style="padding:20px 30px 20px 30px;">
            @livewire('main.waktu-solat')
        </div>
    </div>
</div>
