@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/maklum-balas/balas/{{ $response->id }}" method="post"
                        enctype="multipart/form-data">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Pengadu</h3>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Tarikh Aduan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->created_at }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Respondan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->fullName }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Emel</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->email }}
                                        <input type="hidden" name="email" value="{{ $response->email }}">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">No Telefon</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->phone }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Produk</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->product }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Jenis Soalan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        {{ $response->typeOfQuestion }}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Soalan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <p>
                                            {{ $response->content }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <h3>Balasan</h3>
                                <div class="row mb-2 d-none">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">ID Balasan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <input type="text" name="id" value="{{ $response->id }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Balasan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-6">
                                        <textarea name="reply" id="reply" cols="30" rows="10" class="form-control form-control-sm"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <label for="" class="col-sm-1 col-form-label col-form-label-sm">Status</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-2">
                                        <select name="status" id="status" class="form-control form-control-sm">
                                            <option value="">Sila Pilih</option>
                                            <option value="1">Selesai</option>
                                            <option value="3">On Hold</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success btn-sm float-left">Submit</button>
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
