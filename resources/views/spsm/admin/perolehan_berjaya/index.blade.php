@extends('spsm.layouts.main')

@section('content')
    {{-- Alert --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col">
                            <a href="/spsm/admin/perolehan_berjaya/create" class="btn btn-primary btn-sm">Tambah Perolehan
                                Berjaya</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-sm table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle text-center">#</th>
                                        <th class="align-middle">Jenis Perolehan</th>
                                        <th class="align-middle">Tajuk Perolehan</th>
                                        <th class="align-middle text-center">Nama Syarikat</th>
                                        <th class="align-middle text-center">Nilai Perolehan</th>
                                        <th class="align-middle text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perolehanBerjayas as $perolehanBerjaya)
                                        <tr>
                                            <td class="align-middle text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $perolehanBerjaya->siri_perolehan }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $perolehanBerjaya->tajuk_perolehan }}
                                            </td>
                                            <td class="align-middle text-left">
                                                {{ $perolehanBerjaya->nama_syarikat }}
                                            </td>
                                            <td class="align-middle text-center">
                                                {{ number_format($perolehanBerjaya->nilai_perolehan, 2, '.', ',') }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <form action="/spsm/admin/piagam_pelanggan/{{ $perolehanBerjaya->id }}"
                                                    method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="row-inline">
                                                        <a href="/upload/doc/{{ $perolehanBerjaya->filename_my }}"
                                                            class="btn btn-link" target="_blank">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="/spsm/admin/piagam_pelanggan/{{ $perolehanBerjaya->id }}/edit"
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
        </div>
    </div>
@endsection
