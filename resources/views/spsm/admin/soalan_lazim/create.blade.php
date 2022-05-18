@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/spsm/admin/soalan_lazim" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Soalan dalam Bahasa</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="soalan_my" id=""
                                    class="form-control form-control-sm @error('soalan_my') is-invalid @enderror">
                                @error('soalan_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Question in English</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="soalan_en" id=""
                                    class="form-control form-control-sm @error('soalan_en') is-invalid @enderror">
                                @error('soalan_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Jawapan dalam Bahasa</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <textarea name="jawapan_my" id="" cols="30" rows="10"
                                    class="form-control form-control-sm @error('jawapan_my') is-invalid @enderror"></textarea>
                                @error('jawapan_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Anwser in English</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <textarea name="jawapan_en" id="" cols="30" rows="10"
                                    class="form-control form-control-sm @error('jawapan_en') is-invalid @enderror"></textarea>
                                @error('jawapan_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
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
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Kategori Soalan</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-3">
                                <select name="category_id" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($categories as $kategori_soalan)
                                        @if (old('category_id') == $kategori_soalan->id)
                                            <option value="{{ $kategori_soalan->id }}" selected>
                                                {{ $kategori_soalan->category_name }}
                                            </option>
                                        @else
                                            <option value="{{ $kategori_soalan->id }}">
                                                {{ $kategori_soalan->category_name }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-sm">Hantar</button>
                                <button class="btn btn-danger float-right btn-sm">Reset</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
