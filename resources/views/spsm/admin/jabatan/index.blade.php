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
            <div class="row">
                <div class="col-lg-12">
                    <a href="/spsm/admin/jabatan/create" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i>
                        Tambah
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        @foreach ($jabatans as $jabatan)
                            <ul>
                                {{-- <li>Coffee</li> --}}
                                @if ($jabatan->parent_id == 0)
                                    <li>
                                        <b>{{ $jabatan->name_my }}</b>
                                        <a href="/spsm/admin/jabatan/{{ $jabatan->id }}/edit">
                                            &nbsp;<i class="fas fa-edit"></i>
                                        </a>
                                    </li>
                                @elseif ($jabatan->parent_id != 0)
                                    <ul>
                                        <li>{{ $jabatan->name_my }}
                                            <a href="/spsm/admin/jabatan/{{ $jabatan->id }}/edit">
                                                &nbsp;<i class="fas fa-edit"></i>
                                            </a>
                                        </li>
                                    </ul>
                                @endif
                            </ul>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
