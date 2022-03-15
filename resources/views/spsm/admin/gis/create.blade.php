@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/gis" method="post" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Buletin</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="title_my" id=""
                                            class="form-control form-control-sm @error('title_my') is-invalid @enderror"
                                            value="{{ old('title_my') }}">
                                        @error('title_my')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Bulletin Title</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="title_en" id=""
                                            class="form-control form-control-sm @error('title_en') is-invalid @enderror"
                                            value="{{ old('title_en') }}">
                                        @error('title_en')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tahun Terbitan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="text" name="year" id=""
                                            class="form-control form-control-sm @error('year') is-invalid @enderror">
                                        @error('year')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Buletin PDF</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3 input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="pdf">
                                                <i class="fas fa-file-pdf"></i>
                                            </span>
                                            <input type="file" name="filename" id="pdf"
                                                class="rounded-0 form-control form-control-sm @error('filename') is-invalid @enderror"
                                                accept="application/pdf">
                                        </div>
                                        @error('filename')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Gambar Hadapan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3 input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="gambarHadapan">
                                                <i class="far fa-file-image"></i>
                                            </span>
                                            <input type="file" name="gambarHadapan" id="image"
                                                class="rounded-0 form-control form-control-sm @error('gambarHadapan') is-invalid @enderror"
                                                accept="image/png, image/jpeg, image/jpg" onchange="previewImage()">
                                        </div>
                                        @error('gambarHadapan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label-sm">Status</label>
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
                                        <button type="submit" class="btn btn-success btn-sm float-left">Submit</button>
                                        <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
