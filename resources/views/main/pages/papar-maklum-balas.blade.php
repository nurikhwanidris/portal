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
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-12">
                                <!-- PAGE TITLE - START-->
                                <div class="row">
                                    <div class="col">
                                        <div class="text-title-semasa-11" style="padding-bottom: 20px;">Aduan & Maklum
                                            Balas</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Nama</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->fullName }}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Emel</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->email }}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">No Telefon</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->phone }}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Produk</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->product }}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Jenis Soalan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->typeOfQuestion }}
                                        </strong>
                                    </div>
                                </div>
                                <hr>
                                <div class="row my-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <strong>
                                            {{ $response->title }}
                                        </strong>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Isi
                                        Kandungan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <p>
                                            {{ $response->content }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-title-semasa-11" style="padding-bottom: 20px;">
                                            Jawapan
                                        </div>
                                    </div>
                                </div>
                                @if (count($answer) > 0)
                                    @foreach ($answer as $item)
                                        <div class="row">
                                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Balasan
                                                Dari</label>
                                            <span class="col-sm-1">:</span>
                                            <div class="col-sm-4">
                                                @if ($item->user_id == 0)
                                                    <p>
                                                        {{ $response->fullName }}
                                                    </p>
                                                @else
                                                    <p>
                                                        {{ $item->user->name }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Waktu
                                                Balasan</label>
                                            <span class="col-sm-1">:</span>
                                            <div class="col-sm-4">
                                                <p>
                                                    {{ $item->created_at->diffForHumans() . ' [' . $item->created_at . ']' }}
                                                </p>
                                            </div>
                                            <div class="row my-3">
                                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Isi
                                                    Kandungan</label>
                                                <span class="col-sm-1">:</span>
                                                <div class="col-sm-4">
                                                    <p>
                                                        {{ $item->reply }}
                                                    </p>
                                                </div>
                                            </div>
                                            <hr>
                                    @endforeach
                                    <form action="/maklum-balas/balas/{{ $response->id }}" method="post">
                                        @csrf
                                        <div class="row mb-3 d-none">
                                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">ID
                                                Balasan</label>
                                            <span class="col-sm-1">:</span>
                                            <div class="col-sm-4">
                                                <input type="text" name="id" value="{{ $response->id }}"
                                                    class="form-control form-control-sm" readonly>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <label for=""
                                                class="col-sm-2 col-form-label col-form-label-sm">Balas</label>
                                            <span class="col-sm-1">:</span>
                                            <div class="col-lg-9">
                                                <textarea name="reply" id="" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary float-end">Hantar
                                                    Balasan</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <div class="row my-3">
                                        <span>Belum ada apa-apa balasan.</span>
                                    </div>
                                @endif
                            </div>
                        </div>
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
