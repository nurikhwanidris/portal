@extends('spsm.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="align-middle text-center">#</th>
                            <th class="align-middle">Tajuk</th>
                            <th class="align-middle">Title</th>
                            {{-- <th class="align-middle text-center">Status</th> --}}
                            <th class="align-middle text-center">Type</th>
                            <th class="align-middle text-left">Created by</th>
                            <th class="align-middle text-center">Created on</th>
                            <th class="align-middle text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="align-middle text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="align-middle">
                                    <a href="/halaman/{{ $post->slug_my }}" target="_blank" rel="noopener noreferrer">
                                        {{ $post->title_my }}
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <a href="/post/{{ $post->slug_en }}" target="_blank" rel="noopener noreferrer">
                                        {{ $post->title_en }}
                                    </a>
                                </td>
                                <td class="align-middle text-center">
                                    {{-- {{ $post->type }} --}}
                                    @if ($post->type == 'post')
                                        {{ 'Post' }}
                                    @else
                                        {{ 'Post' }}
                                    @endif
                                </td>
                                <td class="align-middle text-left">
                                    {{ $post->user->name }}
                                </td>
                                <td class="align-middle text-center">
                                    {{ $post->created_at }}
                                </td>
                                <td class="align-middle text-center">
                                    <a href="/halaman/{{ $post->slug_my }}" target="_blank" class="badge bg-info"><i
                                            class="far fa-eye"></i></a>
                                    <a href="/spsm/admin/post/{{ $post->slug_my }}/edit" target="_blank"
                                        class="badge bg-warning"><i class="far fa-edit"></i></a>
                                    <form action="/spsm/admin/post/{{ $post->slug_my }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Are you sure?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
