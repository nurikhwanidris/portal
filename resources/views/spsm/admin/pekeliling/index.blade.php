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
                            <a href="/spsm/admin/pekeliling/create" class="btn btn-primary btn-sm">Tambah Pekeliling</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class="table table-striped table-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th class="align-middle text-center">#</th>
                                                <th class="align-middle">Tajuk Pekeliling</th>
                                                <th class="align-middle">Circular Title</th>
                                                <th class="align-middle text-center">Jenis Pekeliling</th>
                                                <th class="align-middle text-center">Status</th>
                                                <th class="align-middle text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pekelilings as $pekeliling)
                                                <tr>
                                                    <td class="align-middle text-center">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $pekeliling->title_my }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $pekeliling->title_en }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        {{ $pekeliling->jenisPekeliling }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        @if ($pekeliling->status->id == 1)
                                                            <span class="badge badge-success">Published</span>
                                                        @elseif ($pekeliling->status->id == 2)
                                                            <span class="badge badge-warning">Draft</span>
                                                        @elseif ($pekeliling->status->id == 3)
                                                            <span class="badge badge-secondary">Archived</span>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <form action="/spsm/admin/pekeliling/{{ $pekeliling->id }}"
                                                            method="post">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="row-inline">
                                                                <a href="/spsm/admin/pekeliling/{{ $pekeliling->id }}"
                                                                    class="btn btn-link">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                                <a href="/spsm/admin/pekeliling/{{ $pekeliling->id }}/edit"
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
        </div>
    </div>
@endsection
