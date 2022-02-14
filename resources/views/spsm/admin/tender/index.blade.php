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
                        <a href="/spsm/admin/tender/create" class="btn btn-primary btn-sm">Cipta Perolehan</a>
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
                                    <th class="align-middle">
                                        Tajuk Perolehan
                                    </th>
                                    <th class="align-middle">
                                        Tender Title
                                    </th>
                                    <th class="align-middle">
                                        Kod Perolehan
                                    </th>
                                    <th class="align-middle">
                                        Harga Perolehan
                                    </th>
                                    <th class="align-middle">
                                        Tempoh Iklan
                                    </th>
                                    <th class="align-middle">
                                        Tarikh Mula Papar
                                    </th>
                                    <th class="align-middle">
                                        Status
                                    </th>
                                    <th class="align-middle">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tenders as $tenders)
                                <tr>
                                    <td class="align-middle">
                                        {{ $tender->title_my }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->title_en }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->harga }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->tempoh }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->paparanMula }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->status->status }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $tender->kod }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="/spsm/admin/tender/{{ $tender->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="row-inline">
                                                <a href="/spsm/admin/tender/{{ $tender->id }}"
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