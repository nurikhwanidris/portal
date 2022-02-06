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
                        <th class="align-middle text-center">#</th>
                        <th class="align-middle text-center">Gambar</th>
                        <th class="align-middle">Tajuk</th>
                        <th class="align-middle text-center">Sumber</th>
                        <th class="align-middle text-center">Tarikh Terbitan</th>
                        <th class="align-middle text-center">Status</th>
                        <th class="align-middle text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsArticles as $newsArticle)
                    <tr>
                        <td class="align-middle text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td class="align-middle text-center w-25">
                            <img src="{{ asset('upload/img/'.$newsArticle->keratanAkhbar) }}"
                                alt="{{ $newsArticle->tajukKeratanAkhbar }}" srcset="" class="img-fluid img-thumbnail">
                        </td>
                        <td class="align-middle text-left">
                            {{ $newsArticle->tajukKeratanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $newsArticle->sumberKeratanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $newsArticle->tarikhTerbitanAkhbar }}
                        </td>
                        <td class="align-middle text-center">
                            {{ $newsArticle->status->status }}
                        </td>

                        <td class="align-middle text-left">
                            <form action="/spsm/admin/newspaper/{{ $newsArticle->id }}" class="form-inline"
                                method="post">
                                @csrf
                                @method('delete')
                                <a href="/spsm/admin/newspaper/{{ $newsArticle->id }}/edit" target="_blank"
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

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });
</script>
@endsection