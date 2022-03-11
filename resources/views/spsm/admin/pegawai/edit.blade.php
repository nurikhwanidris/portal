@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <form action="/spsm/admin/pegawai/{{ $pegawai->id }}" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        @csrf
                        @method('put')
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Nama Pegawai (My)</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="name_my" id=""
                                    class="form-control form-control-sm @error('name_my') is-invalid @enderror"
                                    value="{{ old('name_my', $pegawai->name_my) }}">
                                @error('name_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Nama Pegawai (En)</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="name_en" id=""
                                    class="form-control form-control-sm @error('name_en') is-invalid @enderror"
                                    value="{{ old('name_en', $pegawai->name_en) }}">
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Jawatan (my)</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="jawatan_my" id=""
                                    class="form-control form-control-sm @error('jawatan_my') is-invalid @enderror"
                                    value="{{ old('jawatan_my', $pegawai->jawatan_my) }}">
                                @error('jawatan_my')
                                    <div class=" invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Jawatan (en)</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="jawatan_en" id=""
                                    class="form-control form-control-sm @error('jawatan_en') is-invalid @enderror"
                                    value="{{ old('jawatan_en', $pegawai->jawatan_en) }}">
                                @error('jawatan_en')
                                    <div class=" invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Gred</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-2">
                                <select name="gred_id" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    <option value="1" @if (old('gred_id', $pegawai->gred_id) == 1) selected @endif>A1</option>
                                    <option value="2" @if (old('gred_id', $pegawai->gred_id) == 2) selected @endif>A2</option>
                                    <option value="3" @if (old('gred_id', $pegawai->gred_id) == 3) selected @endif>A3</option>
                                    <option value="4" @if (old('gred_id', $pegawai->gred_id) == 4) selected @endif>A4</option>
                                    <option value="5" @if (old('gred_id', $pegawai->gred_id) == 5) selected @endif>A5</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Emel</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="email" name="email" id=""
                                    class="form-control form-control-sm @error('email') is-invalid @enderror"
                                    value="{{ old('email', $pegawai->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Phone No.</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="phone_no" id=""
                                    class="form-control form-control-sm @error('phone_no') is-invalid @enderror"
                                    value="{{ old('phone_no', $pegawai->phone_no) }}">
                                @error('phone_no')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Jabatan / Bahagian</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <select name="dept_id" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($jabatans as $jabatan)
                                        @if (old('dept_id', $pegawai->dept_id) == $jabatan->id)
                                            <option value="{{ $jabatan->id }}" selected>{{ $jabatan->name_my }}
                                            </option>
                                        @else
                                            <option value="{{ $jabatan->id }}">{{ $jabatan->name_my }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Gambar</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-2">
                                <input type="file" name="photo" id=""
                                    class="form-control form-control-sm @error('photo') is-invalid @enderror"
                                    accept="image/png, image/jpg, image/jpeg">
                                @error('photo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm">Sort Order</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <input type="text" name="sort_order" id=""
                                    class="form-control form-control-sm @error('sort_order') is-invalid @enderror"
                                    value="{{ old('sort_order', $pegawai->sort_order) }}">
                                @error('sort_order')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label-sm col-form-label">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-4">
                                <select name="status_id" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                        @if (old('status_id', $pegawai->status_id) == $status->id)
                                            <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                        @else
                                            <option value="{{ $status->id }}">{{ $status->status }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
