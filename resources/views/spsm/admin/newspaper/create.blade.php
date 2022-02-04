@extends('spsm.layouts.main')

@section('content')
{{-- Alert --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

{{-- Alert --}}
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="col-lg-12">
            <form action="/spsm/admin/newspaper/create" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <label for="" class="col-md-3 col-form-label col-form-label-sm">Muat Naik Keratan
                                Akhbar</label>
                            <span class="col-md-1">:</span>
                            <div class="col-md-8">
                                <input type="file" name="keratanAkbar" id="" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 col-form-label col-form-label-sm">Tajuk Berita</label>
                            <span class="col-md-1">:</span>
                            <div class="col-md-8">
                                <input type="text" name="tajukKeratanAkbar" id="" class="form-control form-control-sm"
                                    placeholder="Sapok Biki Menang Acara Tinju di Sukan Komenwel">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 col-form-label col-form-label-sm">Tarikh Diterbitkan</label>
                            <span class="col-md-1">:</span>
                            <div class="col-md-4">
                                <input type="date" name="tarikhTerbitan" id="" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3 col-form-label col-form-label-sm">Status</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-md-4">
                                <select name="status" id="" class="form-control form-control-sm">
                                    <option value="">Sila Pilih</option>
                                    @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-sm float-left">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                <img src="" alt="" srcset="" style="height: auto; width: 30%" class="img-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection