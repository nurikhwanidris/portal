@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/spsm/admin/soalan_lazim/kategori" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @csrf
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Nama Kategori</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="name_my" id=""
                                    class="form-control form-control-sm @error('name_my') is-invalid @enderror">
                                @error('name_my')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Category Name</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="name_en" id=""
                                    class="form-control form-control-sm @error('name_en') is-invalid @enderror">
                                @error('name_en')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Susunan Induk</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="sort_parent" id=""
                                    class="form-control form-control-sm @error('sort_parent') is-invalid @enderror">
                                @error('sort_parent')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-sm-2 col-form-label col-form-label-sm">Susunan Kecil</label>
                            <span class="col-sm-1">:</span>
                            <div class="col-sm-6">
                                <input type="text" name="sort_child" id=""
                                    class="form-control form-control-sm @error('sort_child') is-invalid @enderror">
                                @error('sort_child')
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
                </div>
            </form>
        </div>
    </div>
@endsection
