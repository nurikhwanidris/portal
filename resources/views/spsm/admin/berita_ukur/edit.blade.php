@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/spsm/admin/berita_ukur/{{ $berita->id }}" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @csrf
                                @method('put')
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Tajuk Berita</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_my" id="" class="form-control form-control-sm"
                                        value="{{ old('title_my',$berita->title_my) }}">
                                </div>
                                @error('title_my')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">News Title</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_en" id="" class="form-control form-control-sm"
                                        value="{{ old('title_en',$berita->title_en) }}">
                                </div>
                                @error('title_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Tahun</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="year" id="" class="form-control form-control-sm"
                                        value="{{ old('year', $berita->year) }}">
                                </div>
                                @error('year')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Gambar Hadapan</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="oldGambarHadapan" id=""
                                        class="form-control form-control-sm d-none"
                                        value="{{ $berita->gambarHadapan }}">
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
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Lampiran</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="oldFilename" id=""
                                        class="form-control form-control-sm d-none" value="{{ $berita->filename }}">
                                    <input type="file" name="filename" id="" class="form-control form-control-sm"
                                        accept="application/pdf">
                                </div>
                                @error('filename')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-label col-form-label-sm col-sm-1">Status</label>
                                <span class="col-sm-1 text-center">:</span>
                                <div class="col-sm-3">
                                    <select name="status_id" id="" class="form-control form-control-sm">
                                        <option value="">Sila Pilih</option>
                                        @foreach ($statuses as $status)
                                        @if (old('status_id', $berita->status->id) == $status->id)
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
                            <div class="row mb-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                    <button type="reset" class="btn btn-danger btn-sm float-right">Submit</button>
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