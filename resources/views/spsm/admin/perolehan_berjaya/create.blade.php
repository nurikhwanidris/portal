@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/spsm/admin/perolehan_berjaya" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Jenis
                                        Perolehan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <select name="jenis_perolehan" id=""
                                            class="form-control form-control-sm @error('jenis_perolehan') is-invalid @enderror">
                                            <option value="">Pilih Jenis Perolehan</option>
                                            <option value="1">Tender</option>
                                            <option value="2">Sebut Harga</option>
                                        </select>
                                        @error('jenis_perolehan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">No. Siri
                                        Perolehan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="text" name="siri_perolehan" id=""
                                            class="form-control form-control-sm @error('siri_perolehan') is-invalid @enderror">
                                        @error('siri_perolehan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Tajuk
                                        Perolehan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-10">
                                        <input type="text" name="tajuk_perolehan" id=""
                                            class="form-control form-control-sm @error('tajuk_perolehan') is-invalid @enderror"
                                            value="{{ old('tajuk_perolehan') }}">
                                        @error('tajuk_perolehan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Nama
                                        Syarikat</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="text" name="nama_syarikat" id=""
                                            class="form-control form-control-sm @error('nama_syarikat') is-invalid @enderror"
                                            value="{{ old('nama_syarikat') }}">
                                        @error('nama_syarikat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Nilai
                                        Perolehan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <input type="text" name="nilai_perolehan" id=""
                                            class="form-control form-control-sm @error('nilai_perolehan') is-invalid @enderror"
                                            value="{{ old('nilai_perolehan') }}">
                                        <small class="w-100 text-primary">Hanya <b>titik</b> dibenarkan di dalam ruang nilai
                                            perolehan.</small>
                                        @error('nilai_perolehan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Status</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
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
