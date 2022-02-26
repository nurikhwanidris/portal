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
                                <th class="align-middle text-center">Tentang</th>
                                <th class="align-middle text-center">Jenis Maklum balas</th>
                                <th class="align-middle">Tajuk Maklum Balas</th>
                                <th class="align-middle">Nama Responden</th>
                                <th class="align-middle">No Telefon</th>
                                <th class="align-middle">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($responses as $response)
                                <tr>
                                    <td class="align-middle text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-center">
                                        {{ $response->product }}
                                    </td>
                                    <td class="align-middle text-center">
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
