@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/buletingis/{{ $gis->id }}" method="post" enctype="multipart/form-data">
                        <div class="row">
                            @method('put')
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
                                            value="{{ old('title_my', $gis->title_my) }}">
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
                                            value="{{ old('title_en', $gis->title_en) }}">
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
                                    <div class="col-sm-6">
                                        <input type="text" name="year" id=""
                                            class="form-control form-control-sm @error('year') is-invalid @enderror"
                                            value="{{ old('title_en', $gis->year) }}">
                                        @error('year')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Buletin</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="hidden" name="oldFile" value="{{ $gis->filename }}">
                                        <input type="file" name="filename" id=""
                                            class="form-control form-control-sm @error('filename') is-invalid @enderror"
                                            accept="application/pdf">
                                        @error('filename')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label sm">Gambar Hadapan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <input type="hidden" name="oldGambar" value="{{ $gis->gambarHadapan }}">
                                        <input type="file" name="gambarHadapan" id="image"
                                            class="form-control form-control-sm @error('gambarHadapan') is-invalid @enderror"
                                            accept="image/png, image/jpeg, image/jpg" onchange="previewImage()">
                                        @error('gambarHadapan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-3 h-75">
                                        <img src="" alt="" class="img-preview img-fluid float-right img-thumbnail">
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
                                                @if (old('status_id', $gis->status_id) == $status->id)
                                                    <option value="{{ $status->id }}" selected>{{ $status->status }}
                                                    </option>
                                                @else
                                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                                @endif
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
