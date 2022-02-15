@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <form action="/spsm/admin/tender" method="post" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Perolehan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_my" id="" class="form-control form-control-sm"
                                        value="{{ old('title_my') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tender Title</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="title_en" id="" class="form-control form-control-sm"
                                        value="{{ old('title_en') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Kod</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="kod" id="" class="form-control form-control-sm"
                                        value="{{ old('kod') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Harga</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <input type="text" name="harga" id="" class="form-control form-control-sm"
                                        value="{{ old('harga') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tempoh Iklan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="tempoh" id="" class="form-control form-control-sm"
                                        value="{{ old('tempoh') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Masa</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="masa" id="" class="form-control form-control-sm"
                                        value="{{ old('masa') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Taklimat</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="taklimat" id="" class="form-control form-control-sm"
                                        value="{{ old('taklimat') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Pertanyaan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-6">
                                    <input type="text" name="pertanyaan" id="" class="form-control form-control-sm"
                                        value="{{ old('pertanyaan') }}">
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
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Status</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-3">
                                    <select name="status_id" id="" class="form-control form-control-sm">
                                        <option value="">Sila Pilih</option>
                                        @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->status }}</option>
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
                                        class="form-control form-control-sm" value="{{ old('paparanMula') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tarikh Tamat
                                    Paparan</label>
                                <span class="col-sm-1">:</span>
                                <div class="col-sm-2">
                                    <input type="datetime-local" name="paparanTamat" id=""
                                        class="form-control form-control-sm" value="{{ old('paparanTamat') }}">
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