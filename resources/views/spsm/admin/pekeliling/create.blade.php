@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/pekeliling" method="post" enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Pekeliling</label>
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
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Circular Title</label>
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
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Bilangan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="bilangan" id=""
                                            class="form-control form-control-sm @error('bilangan') is-invalid @enderror"
                                            value="{{ old('bilangan') }}">
                                        @error('bilangan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Lampiran</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
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
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Jenis Pekeliling</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <select name="jenisPekeliling" id=""
                                            class="form-control form-control-sm @error('jenisPekeliling') is-invalid @enderror">
                                            <option value="">Sila Pilih</option>
                                            @if (old('jenisPekeliling') == 1)
                                                <option value="1" selected>Pekeliling KPUP</option>
                                            @elseif (old('jenisPekeliling') == 2)
                                                <option value="2" selected>Pekeliling KPUP Yang Dibatalkan</option>
                                            @elseif (old('jenisPekeliling') == 3)
                                                <option value="3" selected>Surat Pekeliling</option>
                                            @else
                                                <option value="1">Pekeliling KPUP</option>
                                                <option value="2">Pekeliling KPUP Yang Dibatalkan</option>
                                                <option value="3">Surat Pekeliling</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-3">
                                        <select name="status_id" id=""
                                            class="form-control form-control-sm @error('status_id') is-invalid @enderror">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($statuses as $status)
                                                @if (old('status_id') == $status->id)
                                                    <option value="{{ $status->id }}" selected>{{ $status->status }}
                                                    </option>
                                                @else
                                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        <button type="reset" class="float-right btn btn-danger btn-sm">Reset</button>
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
