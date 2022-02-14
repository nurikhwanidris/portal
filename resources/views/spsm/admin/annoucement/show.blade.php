@extends('spsm.layouts.main')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4>{{ $annoucement->title_my }}</h4>
            </div>
            <div class="col-md-6">
                <form action="/spsm/admin/pengumuman/{{ $annoucement->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm float-right ml-2"><i class="fa fa-trash"></i> Delete</button>
                </form>
                <a href="/spsm/admin/pengumuman/{{ $annoucement->id }}/edit">
                    <button class="btn btn-warning btn-sm float-right mr-2"><i class="fa fa-edit"></i> Edit</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        {!! $annoucement->content_my !!}
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <span class="col-md-1">Created by</span>
            <span class="col-md-1 text-center">:</span>
            <span class="col-md-4">{{ $annoucement->user->name }}</span>
        </div>
        <div class="row">
            <span class="col-md-1">Published on</span>
            <span class="col-md-1 text-center">:</span>
            <span class="col-md-4">{{ $annoucement->created_at }}</span>
        </div>
    </div>
</div>
@endsection