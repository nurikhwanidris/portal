@extends('spsm.layouts.main')

@section('content')

{{-- Alert --}}
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <form action="/spsm/admin/quote/{{ $quote->id }}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        @method('put')
                        @csrf
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Perolehan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_my" id="" class="form-control form-control-sm"
                                        value="{{ old('title_my',$quote->title_my) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">quote Title</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_en" id="" class="form-control form-control-sm"
                                        value="{{ old('title_en', $quote->title_en) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Kod Perolehan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="kod" id="" class="form-control form-control-sm"
                                        value="{{ old('kod',$quote->kod) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Harga</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="harga" id="" class="form-control form-control-sm"
                                        value="{{ old('harga',$quote->harga) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tempoh Iklan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="tempoh" id="" class="form-control form-control-sm"
                                        value="{{ old('tempoh',$quote->tempoh) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Masa</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="masa" id="" class="form-control form-control-sm"
                                        value="{{ old('masa', $quote->masa) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Taklimat</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="taklimat" id="" class="form-control form-control-sm"
                                        value="{{ old('taklimat', $quote->taklimat) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Pertanyaan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="pertanyaan" id="" class="form-control form-control-sm"
                                        value="{{ old('pertanyaan',$quote->pertanyaan) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Lampiran</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="file" name="filename" id="" class="form-control form-control-sm"
                                        accept="application/pdf">
                                </div>
                            </div>
                            <div class="row mb-3 d-none">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Old File</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="oldFile" id="" class="form-control form-control-sm"
                                        value="{{ $quote->filename }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <select name="status_id" id="" class="form-control form-control-sm">
                                        <option value="">Sila Pilih</option>
                                        @foreach ($statuses as $status)
                                        @if (old('status_id', $quote->status_id)== $status->id)
                                        <option value="{{ $status->id }}" selected>{{ $status->status }}</option>
                                        @else
                                        <option value="{{ $status->id }}">{{ $status->status }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tarikh Mula
                                    Paparan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <input type="datetime-local" name="paparanMula" id=""
                                        class="form-control form-control-sm"
                                        value="{{ old('paparanMula',$quote->paparanMula) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tarikh Tamat
                                    Paparan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <input type="datetime-local" name="paparanTamat" id=""
                                        class="form-control form-control-sm"
                                        value="{{ old('paparanTamat', $quote->paparanTamat) }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
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