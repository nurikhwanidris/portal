@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/spsm/admin/pegawai" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        @csrf
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label sm">Nama Pegawai (My)</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="name_my" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label sm">Nama Pegawai (En)</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="name_en" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label sm">Jawatan (my)</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="jawatan_my" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label sm">Jawatan (en)</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="jawatan_en" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label sm">Gred</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-2">
                        <select name="gred_id" id="" class="form-control form-control-sm">
                            <option value="">Sila Pilih</option>
                            <option value="1">A1</option>
                            <option value="2">A2</option>
                            <option value="3">A3</option>
                            <option value="4">A4</option>
                            <option value="5">A5</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label-sm">Emel</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="email" name="email" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label-sm">Phone No.</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="phone" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label-sm">Jabatan / Bahagian</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <select name="dept_id" id="" class="form-control form-control-sm">
                            <option value="">Sila Pilih</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label col-form-label-sm">Gambar</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-2">
                        <input type="file" name="photo" id="" class="form-control form-control-sm"
                            accept="image/png, image/jpg, image/jpeg">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label-sm">Sort Order</label>
                    <span class="col-sm-1">:</span>
                    <div class="col-sm-4">
                        <input type="text" name="sort" id="" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        <button type="reset" class="btn btn-danger btn-sm float-right">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
