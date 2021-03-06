@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="align-middle text-center">#</th>
                                <th class="align-middle text-center">
                                    Created At
                                </th>
                                <th class="align-middle">Tentang</th>
                                <th class="align-middle">Jenis Maklum balas</th>
                                <th class="align-middle">Tajuk Maklum Balas</th>
                                <th class="align-middle">Nama Responden</th>
                                <th class="align-middle">No Telefon</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle text-center">Status</th>
                                <th class="align-middle text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responses as $response)
                                <tr>
                                    <td class="align-middle text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $response->created_at->diffForHumans() }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->product }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->typeOfQuestion }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->title }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->fullName }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->phone }}
                                    </td>
                                    <td class="align-middle">
                                        {{ $response->email }}
                                    </td>
                                    <td class="align-middle text-center">
                                        @if ($response->status == null)
                                            <span class="badge badge-pill badge-primary">
                                                Baru
                                            </span>
                                        @elseif ($response->status == '1')
                                            <span class="badge badge-pill badge-success">
                                                Selesai
                                            </span>
                                        @elseif ($response->status == '2')
                                            <span class="badge badge-pill badge-info">
                                                Dibalas
                                            </span>
                                        @elseif ($response->status == '3')
                                            <span class="badge badge-pill badge-dark">
                                                On Hold
                                            </span>
                                        @elseif ($response->status == '4')
                                            <span class="badge badge-pill badge-warning">
                                                Balasan Baru
                                            </span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="row-inline">
                                            <a href="/spsm/admin/maklum-balas/{{ $response->id }}/reply" target="_blank"
                                                class="btn btn-primary btn-sm">
                                                <i class="fas fa-comment-dots"></i> Balas
                                            </a>
                                        </div>
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
