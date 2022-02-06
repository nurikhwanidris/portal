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
            <table class="table table-striped table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="align-middle text-center">Gambar</th>
                        <th class="align-middle">Tajuk</th>
                        <th class="align-middle text-center">Sumber</th>
                        <th class="align-middle text-center">Tarikh Terbitan</th>
                        <th class="align-middle text-center">Status</th>
                        <th class="align-middle text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keratanAkhbars as $keratanAkhbar)
                    <tr>
                        <td class="align-middle text-center">
                            <a href="{{ asset('upload/img/'.$keratanAkhbar->filename) }}" data-toggle="lightbox">
                                <img src="{{ asset('upload/img/'.$keratanAkhbar->filename) }}"
                                    alt="{{ $keratanAkhbar->tajukKeratanAkhbar }}" srcset=""
                                    class="img-fluid img-thumbnail" style="height:auto; width:150px;">
                            </a>
                        </td>
                        <td class="align-middle text-left">
                            {{ $keratanAkhbar->tajukKeratanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $keratanAkhbar->sumberKeratanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $keratanAkhbar->tarikhTerbitanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $keratanAkhbar->status->status }}
                        </td>

                        <td class="align-middle text-center">
                            <div class="form-inline">
                                <a href="/spsm/admin/newspaper/{{ $keratanAkhbar->id }}/edit"
                                    class="text-decoration-none text-center"><i class="far fa-edit"></i></a>&nbsp;&nbsp;
                                <form action="/spsm/admin/newspaper/{{ $keratanAkhbar->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn-link btn" type="submit"
                                        onclick="return confirm('Are you sure?')"><i
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

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });
</script>
@endsection