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
                            <a href="/spsm/admin/berita_terkini/create" class="btn btn-primary btn-sm">Cipta Berita
                                Terkini</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Tajuk Berita Terkini</th>
                                <th class="align-middle">News Titlte</th>
                                <th class="align-middle">Mula Paparan</th>
                                <th class="align-middle">Tamat Paparan</th>
                                <th class="align-middle">Masa yang Tinggal</th>
                                <th class="align-middle text-center">Status</th>
                                <th class="align-middle text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currentNews as $news)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        <a href="/spsm/admin/berita_terkini/{{ $news->id }}" target="_blank"
                                            rel="noopener noreferrer">{{ $news->title_my }}</a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="/spsm/admin/berita_terkini/{{ $news->id }}" target="_blank"
                                            rel="noopener noreferrer">{{ $news->title_en }}</a>
                                    </td>
                                    <td class="align-middle">{{ $news->show }}</td>
                                    <td class="align-middle">{{ $news->hide }}</td>
                                    <td class="align-middle">
                                        {{ now()->diffInDays($news->show) }}
                                    <td class="align-middle text-center">
                                        @if ($news->status->id == 1)
                                            <span class="badge badge-success">Published</span>
                                        @elseif($news->status->id == 2)
                                            <span class="badge badge-warning">Draft</span>
                                        @elseif($news->status->id == 3)
                                            <span class="badge badge-primary">Archived</span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <form action="/spsm/admin/berita_terkini/{{ $news->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <div class="row-inline">
                                                <a href="/spsm/admin/berita_terkini/{{ $news->id }}/edit"
                                                    class="btn btn-link text-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="submit" class="btn btn-link text-danger">
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
@endsection
