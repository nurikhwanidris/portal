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
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Image</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Mula</th>
                            <th>Tamat</th>
                            <th class="text-center">Susunan</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                        <tr>
                            <td class="align-middle text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="align-middle text-center">
                                <img src="/upload/img/{{ $slider->filename }}" alt="" srcset="" class="img-fluid"
                                    style="width: auto; height: 150px;">
                            </td>
                            <td class="align-middle text-left text-wrap">
                                <a href="{{ $slider->link }}" target="_blank" rel="noopener noreferrer">{{ $slider->link
                                    }}</a>
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->statuses->status }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->show }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->hide }}
                            </td>
                            <td class="align-middle text-center">
                                {{ $slider->susunan }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->created_at }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->updated_at }}
                            </td>
                            <td class="align-middle text-center">
                                <div class="form-inline text-center">
                                    <a href="/spsm/admin/slider/edit/{{ $slider->id }}"
                                        class="text-decoration-none text-center"><i
                                            class="far fa-edit"></i></a>&nbsp;&nbsp;
                                    <form action="/spsm/admin/slider/delete/{{ $slider->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn-link btn" onclick="return confirm('Are you sure?')"><i
                                                class="fas fa-trash"></i></button></button>
                                    </form>
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