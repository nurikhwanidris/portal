@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <a href="/spsm/admin/pegawai/create" class="btn btn-primary btn-sm">Tambah Pegawai</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-sm table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th class="align-middle">Nama Pegawai</th>
                                <th class="align-middle">Jawatan</th>
                                <th class="align-middle">Jabatan/Bahagian</th>
                                <th class="align-middle">Emel</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">Nur Ikhwan Idris Abdul Rahman</td>
                                <td class="align-middle">Programmer</td>
                                <td class="align-middle">SPSM</td>
                                <td class="align-middle">nurikhwanidris.trsb@gmail.com</td>
                                <td class="align-middle text-center">
                                    <form action="/spsm/admin/pegawai/#" method="post">
                                        @method('delete')
                                        @csrf
                                        <div class="row-inline">
                                            <a href="/upload/doc/#" class="btn btn-link" target="_blank">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="/spsm/admin/pegawai/#/edit" class="btn btn-link text-warning">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button class="btn btn-link text-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
