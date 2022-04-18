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
                            <a href="/spsm/admin/transaksi/create" class="btn btn-primary btn-sm">Cipta Transaksi</a>
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
                                            Tajuk Transaksi
                                        </th>
                                        <th class="align-middle">
                                            Transaction Title
                                        </th>
                                        <th class="align-middle">
                                            Produk
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
                                    @foreach ($transaksis as $item)
                                        <tr>
                                            <td class="align-middle text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->title_my }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->title_en }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $item->product_id }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <form action="/spsm/admin/transaksi/{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="row-inline">
                                                        <a href="/spsm/admin/transaksi/{{ $item->id }}"
                                                            class="btn btn-link">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="/spsm/admin/transaksi/{{ $item->id }}/edit"
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
