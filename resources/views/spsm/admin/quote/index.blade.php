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
                            <a href="/spsm/admin/quote/create" class="btn btn-primary btn-sm">Cipta Sebut Harga</a>
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
                                            Tajuk Sebut Harga
                                        </th>
                                        <th class="align-middle">
                                            quote Title
                                        </th>
                                        <th class="align-middle">
                                            Kod Sebut Harga
                                        </th>
                                        <th class="align-middle">
                                            Harga Sebut Harga
                                        </th>
                                        <th class="align-middle text-center">
                                            Tempoh Iklan
                                        </th>
                                        <th class="align-middle">
                                            Tarikh Mula Papar
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
                                    @foreach ($quotes as $quote)
                                        <tr>
                                            <td class="align-middle text-center">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->title_my }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->title_en }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->kod }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->harga }}
                                            </td>
                                            <td class="align-middle text-center">
                                                {{ $quote->masa }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->show }}
                                            </td>
                                            <td class="align-middle">
                                                {{ $quote->status->status }}
                                            </td>
                                            <td class="align-middle text-center">
                                                <form action="/spsm/admin/quote/{{ $quote->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="row-inline">
                                                        <a href="/spsm/admin/quote/{{ $quote->id }}"
                                                            class="btn btn-link">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="/spsm/admin/quote/{{ $quote->id }}/edit"
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
