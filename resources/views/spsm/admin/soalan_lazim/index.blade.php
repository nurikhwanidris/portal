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
                            <a href="/spsm/admin/soalan_lazim/create" class="btn btn-primary btn-sm">Cipta Soalan Lazim</a>
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
                                            Soalan Lazim
                                        </th>
                                        <th class="align-middle text-left">
                                            Kategori Induk
                                        </th>
                                        <th class="align-middle text-left">
                                            Sub Kategori
                                        </th>
                                        <th class="align-middle text-center">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($soalanLazim as $item)
                                        <tr>
                                            <td class="align-middle text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle w-50">
                                                {{ $item->soalan_my }}
                                            </td>
                                            <td class="align-middle text-left">
                                                {{ $item->parent->category_name }}
                                            </td>
                                            <td class="align-middle text-left">
                                                {{ $item->child->category_name }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <form action="/spsm/admin/soalan_lazim/{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="row-inline">
                                                        <a href="/spsm/admin/soalan_lazim/{{ $item->id }}"
                                                            class="btn btn-link">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="/spsm/admin/soalan_lazim/{{ $item->id }}/edit"
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
