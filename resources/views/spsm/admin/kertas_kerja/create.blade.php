@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="/spsm/admin/kertas_kerja" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @csrf
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Tajuk Kertas
                                    Kerja</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_my" id=""
                                        class="form-control form-control-sm @error('title_my') is-invalid @enderror"
                                        value="{{ old('title_my') }}">
                                </div>
                                @error('title_my')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Title</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_en" id=""
                                        class="form-control form-control-sm @error('title_en') is-invalid @enderror"
                                        value="{{ old('title_en') }}">
                                </div>
                                @error('title_en')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Pembentang</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="presentedBy" id=""
                                        class="form-control form-control-sm @error('presentedBy') is-invalid @enderror"
                                        value="{{ old('presentedBy') }}">
                                </div>
                                @error('presentedBy')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Lampiran</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <input type="file" name="filename" id=""
                                        class="form-control form-control-sm @error('filename') is-invalid @enderror"
                                        accept="application/pdf">
                                </div>
                                @error('filename')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Tarikh</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <input type="date" name="date" id=""
                                        class="form-control form-control-sm @error('date') is-invalid @enderror"
                                        value="{{ old('date') }}">
                                </div>
                                @error('date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-form-lable col-form-label-sm col-sm-1">Status</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <select name="status_id" id=""
                                        class="form-control form-control-sm @error('status_id') is-invalid @enderror">
                                        <option value="">Sila Pilih</option>
                                        @foreach ($statuses as $status)
                                        @if (old('status_id') == $status->id)
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
