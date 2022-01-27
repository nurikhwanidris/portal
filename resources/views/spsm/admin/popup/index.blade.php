@extends('spsm.layouts.main')
@section('content')

{{-- Alert --}}
@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('success') }}
</div>
@endif

{{-- Alert --}}
@if (session()->has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ session('error') }}
</div>
@endif

<div class="card">
    <div class="card-body">
        <div class="col-lg-12">
            <div class="">
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center align-middle">#</th>
                            <th class="text-left align-middle">Tajuk</th>
                            <th class="text-center align-middle">Status</th>
                            <th class="text-left align-middle">Mula</th>
                            <th class="text-left align-middle">Tamat</th>
                            <th class="text-left align-middle">Created</th>
                            <th class="text-left align-middle">Modified</th>
                            <th class="text-left align-middle">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($popups as $popup)
                        <tr>
                            <td class="text-center align-middle">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-left align-middle">
                                {{ $popup->tajuk }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $popup->status->status }}
                            </td>
                            <td class="text-center align-middle">
                                {{ $popup->show }}
                            </td>
                            <td class="text-left align-middle">
                                {{ $popup->hide }}
                            </td>
                            <td class="text-left align-middle">
                                {{ $popup->created_at }}
                            </td>
                            <td class="text-left align-middle">
                                {{ $popup->updated_at }}
                            </td>
                            <td class="text-left align-middle">
                                <form action="/spsm/admin/popup/{{ $popup->id }}" class="form-inline" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/spsm/admin/popup/{{ $popup->id }}/edit" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-link">
                                        <i class="fas fa-trash"></i>
                                    </button>
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