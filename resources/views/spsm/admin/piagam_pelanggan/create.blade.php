@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/spsm/admin/pegawai" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm">Tajuk</label>
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
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm">Title</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="title_en" id=""
                                    class="form-control form-control-sm @error('title_en') is-invalid @enderror">
                                @error('title_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm">Lampiran MY</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <input type="file" name="filename_my" id=""
                                    class="form-control form-control-sm @error('filename_my') is-invalid @enderror"
                                    accept="application/pdf">
                                @error('filename_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm">Lampiran EN</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <input type="file" name="filename_en" id=""
                                    class="form-control form-control-sm @error('filename_en') is-invalid @enderror"
                                    accept="application/pdf">
                                @error('filename_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <select name="status_id" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                        @if (old('status_id') == $status->id)
                                            <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                        @else
                                            <option value="{{ $status->id }}">{{ $status->status }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('filename_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                <button type="reset" class="btn btn-danger float-right btn-sm">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
