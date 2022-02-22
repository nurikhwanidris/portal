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
                        <a href="/spsm/admin/berita_ukur/create" class="btn btn-primary btn-sm">Cipta Berita</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="align-middle text-center">
                                        #
                                    </th>
                                    <th class="align-middle">
                                        Tajuk Berita
                                    </th>
                                    <th class="align-middle">
                                        New Title
                                    </th>
                                    <th class="align-middle text-center">
                                        Tahun
                                    </th>
                                    <th class="align-middle text-center">
                                        Created Date
                                    </th>
                                    <th class="align-middle text-center">
                                        Status
                                    </th>
                                    <th class="align-middle text-center">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $berita)
                                <tr>
                                    <td class="align-middle text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $berita->title_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $berita->title_en }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $berita->year }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $berita->created_at }}
                                    </td>
                                    <td class="align-middle text-center">
                                        @if ($berita->status->id == 1)
                                        <span class="badge badge-success">Published</span>
                                        @elseif($berita->status->id == 2)
                                        <span class="badge badge-warning">Draft</span>
                                        @elseif($berita->status->id == 3)
                                        <span class="badge badge-primary">Archived</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="/spsm/admin/berita_ukur/{{ $berita->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="row-inline">
                                                <a href="/upload/doc/{{ $berita->filename }}" target="_blank"
                                                    class="btn btn-link">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="/spsm/admin/berita_ukur/{{ $berita->id }}/edit"
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