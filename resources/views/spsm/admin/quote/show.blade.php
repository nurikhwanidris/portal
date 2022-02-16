@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mb-3">
                    <span class="col-sm-2">Tajuk Sebut Harga</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->title_my }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Quote Title</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->title_en }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Kod</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->kod }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Tempoh</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->tempoh }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Masa</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->masa }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Taklimat</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $quote->taklimat }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Lampiran</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">
                        <a href="{{ '/upload/doc/'.$quote->filename }}" target="_blank">
                            <i class="fa fa-download"></i>
                            Muat turun
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection