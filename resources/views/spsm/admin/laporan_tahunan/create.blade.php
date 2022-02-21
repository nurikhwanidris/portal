@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/spsm/admin/laporan_tahunan" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @csrf
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Tajuk Laporan</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_my" id="" class="form-control form-control-sm @error('title_my') is-invalid @enderror" value="{{ old('title_my') }}">
                                    @error('title_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Report Title</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_en" id="" class="form-control form-control-sm @error('title_en') is-invalid @enderror" value="{{ old('title_en') }}">
                                    @error('title_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Tahun</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-2">
                                    <input type="text" name="year" id="" class="form-control form-control-sm @error('year') is-invalid @enderror" value="{{ old('year') }}">
                                    @error('year')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Gambar</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-2 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-file-image"></i>
                                        </span>
                                    </div>
                                    <input type="file" name="gambar" id="" class="form-control form-control-sm @error('gambar') is-invalid @enderror"
                                        accept="image/png, image/jpeg, image/jpg">
                                    @error('gambar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Laporan</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-2 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-file-pdf"></i>
                                        </span>
                                    </div>
                                    <input type="file" name="filename" id="" class="form-control form-control-sm @error('filename') is-invalid @enderror"
                                        accept="application/pdf">
                                    @error('filename')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Status</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <select name="status_id" id="" class="form-control form-control-sm @error('status_id') is-invalid @enderror">
                                        <option value="">Sila Pilih</option>
                                        @foreach ($statuses as $status)
                                        @if (old('status_id') ==$status->id)
                                            <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
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
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
