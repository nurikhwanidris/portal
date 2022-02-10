@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Tajuk Pengumuman</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-9">
                                <input type="text" name="tajukPengumuman" id="" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Isi Pengumuman</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-9">
                                <textarea name="isiPengumuman" id="" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-1 col-form-label col-form-label-sm"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection