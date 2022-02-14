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
                    <div class="col-md-12">
                        <a href="/spsm/admin/pengumuman/create" class="btn btn-primary btn-sm">Cipta Pengumuman</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="align-middle">#</th>
                            <th class="align-middle">Tajuk Pengumuman</th>
                            <th class="align-middle">Annoucement Titlte</th>
                            <th class="align-middle">Mula Paparan</th>
                            <th class="align-middle">Tamat Paparan</th>
                            <th class="align-middle">Masa yang Tinggal</th>
                            <th class="align-middle text-center">Status</th>
                            <th class="align-middle text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($annoucements as $annoucement)
                        <tr>
                            <td class="align-middle">{{ $loop->iteration }}</td>
                            <td class="align-middle">
                                <a href="/spsm/admin/pengumuman/{{ $annoucement->id }}" target="_blank"
                                    rel="noopener noreferrer">{{ $annoucement->title_my }}</a>
                            </td>
                            <td class="align-middle">
                                <a href="/spsm/admin/pengumuman/{{ $annoucement->id }}" target="_blank"
                                    rel="noopener noreferrer">{{ $annoucement->title_en }}</a>
                            </td>
                            <td class="align-middle">{{ $annoucement->paparanMula }}</td>
                            <td class="align-middle">{{ $annoucement->paparanTamat }}</td>
                            <td class="align-middle">13 Jam</td>
                            <td class="align-middle text-center">
                                <span class="badge badge-success">Published</span>
                            </td>
                            <td class="align-middle text-center">
                                <form action="/spsm/admin/pengumuman/{{ $annoucement->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <div class="row-inline">
                                        <a href="/spsm/admin/pengumuman/{{ $annoucement->id }}/edit"
                                            class="btn btn-link text-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button type="submit" class="btn btn-link text-danger">
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