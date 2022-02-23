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
                        <a href="/spsm/admin/piagam_pelanggan/create" class="btn btn-primary btn-sm">Tambah Piagam</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-sm table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="align-middle text-center">#</th>
                                    <th class="align-middle">Tajuk Piagam</th>
                                    <th class="align-middle">Charter Title</th>
                                    <th class="align-middle text-center">Created on</th>
                                    <th class="align-middle text-center">Status</th>
                                    <th class="align-middle text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($piagams as $piagam)
                                <tr>
                                    <td class="align-middle text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $piagam->title_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $piagam->title_en }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $piagam->created_at }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $piagam->status->status }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="/spsm/admin/piagam_pelanggan/{{ $piagam->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="row-inline">
                                                <a href="/upload/doc/{{ $piagam->filename_my }}" class="btn btn-link"
                                                    target="_blank">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="/spsm/admin/piagam_pelanggan/{{ $piagam->id }}/edit"
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
