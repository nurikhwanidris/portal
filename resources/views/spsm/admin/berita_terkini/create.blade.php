@extends('spsm.layouts.main')

@section('content')
    {{-- Alert --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('success') }}
        </div>
    @endif

    <form action="/spsm/admin/berita_terkini" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @csrf
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Berita
                                        Terkini</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_my" id=""
                                            class="form-control form-control-sm @error('title_my') is-invalid @enderror"
                                            placeholder="Masukkan tajuk berita terkini">
                                        @error('title_my')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">News
                                        Title</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_en" id=""
                                            class="form-control form-control-sm @error('title_en') is-invalid @enderror"
                                            placeholder="Insert news title">
                                        @error('title_en')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Excerpt MY</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <input type="text" name="excerpt_my" id=""
                                            class="form-control form-control-sm @error('excerpt_my') is-invalid @enderror"
                                            placeholder="Masukan petikan dari berita">
                                        @error('excerpt_my')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Excerpt EN</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <input type="text" name="excerpt_en" id=""
                                            class="form-control form-control-sm @error('excerpt_en') is-invalid @enderror"
                                            placeholder="Insert excerpt from the news">
                                        @error('excerpt_en')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Gambar Hadapan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="file" name="gambarHadapan" id="" class="form-control form-control-sm"
                                            accept="image/png, image/jpeg, image/jpg">
                                    </div>
                                    @error('gambarHadapan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Isi Berita</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <textarea name="content_my" id="content_my" cols="30" rows="5"
                                            class="form-control @error('content_my') is-invalid @enderror"></textarea>
                                        @error('content_my')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">News
                                        Content</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-9">
                                        <textarea name="content_en" id="content_en" cols="30" rows="5"
                                            class="form-control @error('content_en') is-invalid @enderror"></textarea>
                                        @error('content_en')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Mula Paparan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="datetime-local" name="show" id="" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tamat Paparan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="datetime-local" name="hide" id="" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <select name="status_id" id=""
                                            class="form-control form-control-sm @error('status_id') is-invalid @enderror">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->status }}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        // Editor MY
        CKEDITOR.replace('content_my', {
            filebrowserUploadUrl: "{{ route('pageUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
        });

        // Editor EN
        CKEDITOR.replace('content_en', {
            filebrowserUploadUrl: "{{ route('pageUpload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
        });
    </script>
@endsection
