<div>
    <div class="tabs tabs-bottom tabs-center tabs-simple">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#perolehan-semasa" data-bs-toggle="tab">
                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                            <span class="box-content p-0 m-0">
                                <i class="fas fa-sticky-note"></i>
                            </span>
                        </span>
                    </span>
                    <p class="mb-0 pb-0" style="font-size: 10px;"> Perolehan Semasa</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#perolehan-berjaya" data-bs-toggle="tab">
                    <span class="featured-boxes featured-boxes-style-6 p-0 m-0 col">
                        <span class="featured-box featured-box-primary featured-box-effect-6 p-0 m-0">
                            <span class="box-content p-0 m-0">
                                <i class="far fa-sticky-note"></i>
                            </span>
                        </span>
                    </span>
                    <p class="mb-0 pb-0" style="font-size: 10px;">Perolehan Berjaya</p>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="perolehan-semasa">
                <div>
                    <!-- Perolehan semasa - START -->
                    @livewire('orang-awam.tawaran-perolehan.perolehan-semasa')
                    <!-- Perolehan semasa - END -->
                </div>
            </div>
            <div class="tab-pane" id="perolehan-berjaya">
                <div>
                    <!-- Perolehan berjaya - START -->
                    @livewire('orang-awam.tawaran-perolehan.perolehan-berjaya')
                    <!-- Perolehan berjaya - END -->
                </div>
            </div>
        </div>
    </div>
</div>
