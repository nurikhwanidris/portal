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
                        <div class="text-title-semasa-11" style="padding-bottom: 20px;">Aduan & Maklum Balas</div>
                    </div>
                </div>
                {{-- Alert --}}
                @if (session()->has('success'))
                    <div class="row">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <!-- PAGE TITLE - END-->
                <div role="main" class="main">
                    <div class="col-lg-12">
                        <form action="{{ route('maklum-balas-store', app()->getLocale()) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="">Kategori Aduan & Maklum Balas</label>
                                <div class="col-lg-4">
                                    <select name="product" id="" class="form-control">
                                        <option value="">Sila Pilih</option>
                                        <option value="Portal">Portal JUPEM</option>
                                        <option value="Produk">Produk & Perkhidmatan</option>
                                        <option value="Lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">Jenis Pertanyaan</label>
                                <div class="col-lg-4">
                                    <select name="typeOfQuestion" id="" class="form-control">
                                        <option value="">Sila Pilih</option>
                                        <option value="Pertanyaan">Pertanyaan</option>
                                        <option value="Cadangan">Cadangan</option>
                                        <option value="Aduan">Aduan</option>
                                        <option value="Penghargaan">Penghargaan</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label">Nama Pemberi Maklum Balas</label>
                                <div class="col-lg-8">
                                    <input type="text" name="fullName" id="" placeholder="Masukkan nama penuh anda"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label">Alamat Emel Pemberi Maklum Balas</label>
                                <div class="col-lg-8">
                                    <input type="email" name="email" id="" placeholder="Masukkan email anda"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label">No Telefon</label>
                                <div class="col-lg-4">
                                    <input type="text" name="phone" id="" class="form-control"
                                        placeholder="Masukkan nombor telefon anda">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label">Tajuk Maklum Balas</label>
                                <div class="col-lg-8">
                                    <input type="text" name="title" id="" placeholder="Masukkan tajuk"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label">Ulasan Maklum Balas</label>
                                <div class="col-lg-8">
                                    <textarea name="content" id="" cols="30" rows="10" class="form-control">Sila masukkan ulasan anda</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary float-end">Hantar</button>
                                    <button type="reset" class="btn btn-danger float-start">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
