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
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle">Nama Pegawai</th>
                                <th class="align-middle">Jawatan</th>
                                <th class="align-middle">Jabatan/Bahagian</th>
                                <th class="align-middle">Emel</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pegawais as $pegawai)
                                <tr>
                                    <td class="text-center align-middle">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $pegawai->name_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $pegawai->jawatan_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $pegawai->jabatan->name_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $pegawai->email }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="/spsm/admin/pegawai/{{ $pegawai->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="row-inline">
                                                <a href="/upload/doc/" class="btn btn-link" target="_blank">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="/spsm/admin/pegawai/{{ $pegawai->id }}/edit"
                                                    class="btn btn-link text-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button class="btn btn-link text-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
