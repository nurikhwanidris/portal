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
                            <a href="/spsm/admin/gis/create" class="btn btn-primary btn-sm">Cipta Buletin</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-striped table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="align-middle text-center">
                                            #
                                        </th>
                                        <th class="align-middle">
                                            Tajuk Buletin
                                        </th>
                                        <th class="align-middle">
                                            Bulletin Title
                                        </th>
                                        <th class="align-middle text-center">
                                            Gambar Hadapan
                                        </th>
                                        <th class="align-middle text-center">
                                            Tahun Terbitan
                                        </th>
                                        <th class="align-middle text-center">
                                            Created
                                        </th>
                                        <th class="align-middle">
                                            Status
                                        </th>
                                        <th class="align-middle text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bulletins as $bulletin)
                                        <tr>
                                            <td class="align-middle text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $bulletin->title_my }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $bulletin->title_en }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="/upload/doc/{{ $bulletin->filename }}" target="_blank"
                                                    rel="noopener noreferrer">
                                                    <img src="/upload/img/{{ $bulletin->gambarHadapan }}" alt="" srcset=""
                                                        style="height:200px; width:auto;" class="img-fluid img-thumbnail">
                                                </a>
                                            </td>
                                            <td class="align-middle text-center">
                                                {{ $bulletin->year }}
                                            </td>
                                            <td class="align-middle text-center">
                                                {{ $bulletin->created_at }}
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge badge-success">{{ $bulletin->status->status }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <form action="/spsm/admin/gis/{{ $bulletin->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="row-inline">
                                                        <a href="/spsm/admin/gis/{{ $bulletin->id }}"
                                                            class="btn btn-link">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="/spsm/admin/gis/{{ $bulletin->id }}/edit"
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
