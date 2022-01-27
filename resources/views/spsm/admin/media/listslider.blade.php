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
                            <th class="text-left">Link</th>
                            <th class="text-left">Status</th>
                            <th class="text-left">Mula</th>
                            <th class="text-left">Tamat</th>
                            <th class="text-center">Susunan</th>
                            <th class="text-left">Created</th>
                            <th class="text-left">Modified</th>
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
                                @if ($slider->link == NULL)
                                <span class="badge badge-dark">No link</span>
                                @else
                                <a href="{{ $slider->link }}" target="_blank" rel="noopener noreferrer">{{ $slider->link
                                    }}</a>
                                @endif
                            </td>
                            <td class="align-middle text-left">
                                @if ($slider->status_id == 1)
                                <span class="badge badge-success">{{ $slider->statuses->status }}</span>
                                @elseif($slider->status_id == 2)
                                <span class="badge badge-warning">{{ $slider->statuses->status }}</span>
                                @elseif($slider->status_id == 3)
                                <span class="badge badge-info">{{ $slider->statuses->status }}</span>
                                @endif
                            </td>
                            <td class="align-middle text-left">
                                @if ($slider->show == NULL)
                                <span class="badge badge-primary">Instantly</span>
                                @else
                                {{ $slider->show }}
                                @endif
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->hide }}
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-white badge badge-secondary">{{ $slider->susunan }}</span>
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->created_at }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $slider->updated_at }}
                            </td>
                            <td class="align-middle text-center">
                                <div class="form-inline text-center">
                                    <a href="/spsm/admin/slider/view/{{ $slider->id }}"
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