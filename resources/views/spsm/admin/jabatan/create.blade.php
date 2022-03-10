@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/spsm/admin/jabatan" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">Nama Jabatan</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-8">
                                        <input type="text" name="namaJabatan" id="" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">Department Name</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-8">
                                        <input type="text" name="departmentName" id="" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">Jabatan Induk</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <select name="jabatanInduk" id="" class="form-control form-control-sm">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($jabatanInduk as $item)
                                                <option value="{{ $item->id }}">{{ $item->name_my }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-forml-label col-form-label-sm">Status</label>
                                    <span class="col-sm-1">:</span>
                                    <div class="col-sm-4">
                                        <select name="status_id" id="" class="form-control form-control-sm">
                                            <option value="">Sila Pilih</option>
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status->id }}">{{ $status->status }}</option>
                                            @endforeach
                                        </select>
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
