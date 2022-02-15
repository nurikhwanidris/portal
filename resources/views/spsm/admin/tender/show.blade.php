@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row mb-3">
                    <span class="col-sm-2">Tajuk Perolehan</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->title_my }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Tender Title</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->title_en }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Kod</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->kod }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Tempoh</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->tempoh }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Masa</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->masa }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Taklimat</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">{{ $tender->taklimat }}</span>
                </div>
                <div class="row mb-3">
                    <span class="col-sm-2">Lampiran</span>
                    <span class="col-sm-1">:</span>
                    <span class="col-sm-9 font-weight-bold">
                        <a href="{{ '/upload/doc/'.$tender->filename }}" target="_blank">
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